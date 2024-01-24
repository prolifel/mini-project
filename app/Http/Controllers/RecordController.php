<?php

namespace App\Http\Controllers;

use App\Models\Record;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Http\JsonResponse;

class RecordController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (is_null(auth()->user())) {
            return view("welcome");
        }

        $id = auth()->user()->id;
        $currentDateTime = Carbon::now()->format('Y-m-d');
        $records = Record::where('date', $currentDateTime)->where('user_id', $id)->orderBy("created_at", "desc")->get();
        return view("welcome", [
            "records" => $records
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validation
        $id = auth()->user()->id;
        $date = $request->input('date');
        $time = strtotime($date);
        $date = date('Y-m-d', $time);
        $currentDateTime = strtotime(Carbon::now()->format('Y-m-d'));

        $record = new Record();
        
        switch ($request->input("type")) {
            case 'manual':
                $record->start_time = $request->input('start');
                $record->end_time = $request->input('end');
                break;
            case 'auto':
                $record->start_time = Carbon::now()->format('H:i');
                $date = Carbon::now()->format('Y-m-d');
                break;
            default:
                return back()->with('error', 'Silakan pilih record secara manual atau otomatis!');
        }
        $record->date = $date;
        $record->description = $request->input('description');
        $record->is_late = 0;
        if ($time < $currentDateTime && $request->input("type") == 'manual') {
            $record->is_late = 1;
        }
        $record->user_id = $id;
        $record->category_id = $request->input('category_id');
        $record->save();

        return back()->with('sukses', 'Successfully add task!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Record $record)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Record $record)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Record $record)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Record $record)
    {
        //
    }

    public function report()
    {
        if (is_null(auth()->user())) {
            return view("welcome");
        }

        $id = auth()->user()->id;
        $currentDateTime = Carbon::now()->format('Y-m-d');
        $records = Record::where('date', $currentDateTime)->where('user_id', $id)->orderBy("created_at", "desc")->get();
        return view("report", compact('records'));
    }
    public function endAutoRecord(Request $request)
    {
        if ($request->ajax() || $request->wantsJson()) {
            return new JsonResponse([
                'status' => 'error',
                'message' => 'Must using API'
            ], 422);
        }

        try {
            $request->validate([
                'id' => 'required|numeric|integer',
            ]);

            $record = Record::findOrFail($request->input('id'));

            if (!is_null($record->end_time)) {
                return response()->json([
                    'status' => 'error',
                    'message' => 'Record tersebut telah berakhir!',
                ], 400);
            }

            $record->end_time = Carbon::now()->format('H:i');
            $record->save();

            return response()->json([
                'status' => 'success',
                'message' => 'Record telah tersimpan',
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => 'error',
                'message' => $th->getMessage(),
            ], 500);
        }
    }
}
