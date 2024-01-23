<?php

namespace App\Http\Controllers;

use App\Models\Record;
use Illuminate\Http\Request;
use Carbon\Carbon;

class RecordController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Record::all();
        dd($data);
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
        $id = auth()->user()->id;
        $date = $request->input('date');
        $time = strtotime($date);
        $date = date('Y-m-d', $time);
        $currentDateTime = strtotime(Carbon::now()->format('Y-m-d'));
        // dd($date);

        $record = new Record();
        $record->date = $date;
        $record->start_time = Carbon::now()->format('H:i:s');
        $record->end_time = Carbon::now()->format('H:i:s');
        $record->description = $request->input('description');
        // $checkDateTime = $date->gt($currentDateTime);
        if($time<$currentDateTime)
        {
            $record->is_late = 1;
        } 
        else
        {
            $record->is_late = 0;
        }
        $record->category_id = $request->input('category_id');
        dd($record->is_late);

        // $record->save();
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
}
