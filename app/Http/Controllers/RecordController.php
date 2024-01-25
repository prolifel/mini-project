<?php

namespace App\Http\Controllers;

use App\Models\Record;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Http\JsonResponse;
use DB;

class RecordController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $id = auth()->user()->id;
        $currentDateTime = Carbon::now()->format('Y-m-d');
        $records = Record::where('date', $currentDateTime)->where('user_id', $id)->orderBy("created_at", "desc");
        $isMore = $records->count() > 3 ? true : false;
        $records = $records->limit(3)->get();
        $recordOngoing = Record::where('date', $currentDateTime)->where('user_id', $id)->whereNull('end_time')->orderBy("created_at", "desc")->first();
        $manualStartTime = !is_null($records) ? (!is_null($records->first()) ? $records->first()->end_time : '09:00') : '09:00';

        //send data for donut chart
        $date = Carbon::now()->format('Y-m-d');
        $total = DB::select("SELECT
            category_id,
            SUM(IF(TIMEDIFF(end_time, start_time) < 0, -ABS(HOUR(TIMEDIFF(end_time, start_time)) + MINUTE(TIMEDIFF(end_time,start_time)) / 60), HOUR(TIMEDIFF(end_time, start_time)) + MINUTE(TIMEDIFF(end_time, start_time)) / 60)) as total_time
            FROM records
            WHERE user_id = $id AND date = '$date'
            GROUP BY category_id
            ORDER BY category_id;");

        return view("welcome", [
            "records" => $records,
            "recordOngoing" => $recordOngoing,
            "isMore" => $isMore,
            "manualStartTime" => $manualStartTime,
            "total" => $total
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
                return back()->with('error', 'Please select records manually or automatically!');
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
        $records = "";
        $graph = [];
        $periode = 0;
        return view("report", compact("records", 'graph', 'periode'));
    }

    public function detailReport(Request $request)
    {
        $id = auth()->user()->id;
        $periode = $request->periode;

        if($periode==2 && $request->bulan!=null) {
            //table
            $tahun = Carbon::now()->format('Y');
            $bulan = $request->bulan;
            $start_date = Carbon::create($tahun, $bulan)->firstOfMonth();
            $end_date = Carbon::create($tahun, $bulan)->lastOfMonth();
            $records = Record::whereBetween('date', [$start_date, $end_date])->where('user_id', $id)->orderBy("created_at", "desc")->get();

            //graph
            $graph = DB::select("SELECT
                category_id,
                WEEK(date) - WEEK('2024-01-01') as week,
                SUM(IF(TIMEDIFF(end_time, start_time) < 0, -ABS(HOUR(TIMEDIFF(end_time, start_time)) + MINUTE(TIMEDIFF(end_time, start_time)) / 60), HOUR(TIMEDIFF(end_time, start_time)) + MINUTE(TIMEDIFF(end_time, start_time)) / 60)) as total_time_week
                FROM records
                WHERE user_id = $id AND date BETWEEN '$start_date' AND '$end_date'
                GROUP BY category_id, week
                ORDER BY week ASC, category_id;");
            // dd($graph);
        } else if($periode==1) {
            //table
            $date = Carbon::now()->format('Y-m-d');
            $records = Record::where('date', $date)->where('user_id', $id)->orderBy("created_at", "desc")->get();

            //graph
            $graph = DB::select("SELECT
                category_id,
                SUM(IF(TIMEDIFF(end_time, start_time) < 0, -ABS(HOUR(TIMEDIFF(end_time, start_time)) + MINUTE(TIMEDIFF(end_time, start_time)) / 60), HOUR(TIMEDIFF(end_time, start_time)) + MINUTE(TIMEDIFF(end_time, start_time)) / 60)) as total_time
                FROM records
                WHERE user_id = $id AND date = '$date'
                GROUP BY category_id
                ORDER BY category_id;");
            // dd($graph);
        } else {
            $records = "";
            $graph = [];
        }

        return view("report", compact('records', 'graph', 'periode'));
    }

    public function graph()
    {
        // $id = auth()->user()->id;
        // $periode = $request->periode;
        // if($periode==2) {
            // $tahun = Carbon::now()->format('Y');
            // $bulan = $request->bulan;
            // $start_date = Carbon::create($tahun, $bulan)->firstOfMonth();
            // $end_date = Carbon::create($tahun, $bulan)->lastOfMonth();

            // $records = Record::whereBetween('date', [$start_date, $end_date])->where('user_id', $id)->orderBy("created_at", "desc")->get();
        // } else {
            $date = Carbon::now()->format('Y-m-d');

            $records = Record::where('date', $date)->where('user_id', 2)->orderBy("created_at", "desc")->get();
            // $records = [];
        // }
        // dd($records);

        return view("graph", compact('records'));
    }

    public function summary()
    {
        $id = auth()->user()->id;
        $date = Carbon::now()->format('Y-m-d');
        $summary = DB::select("SELECT
                SUM(IF(TIMEDIFF(end_time, start_time) < 0, -ABS(HOUR(TIMEDIFF(end_time, start_time)) + MINUTE(TIMEDIFF(end_time, start_time)) / 60), HOUR(TIMEDIFF(end_time, start_time)) + MINUTE(TIMEDIFF(end_time, start_time)) / 60)) as total_time
                FROM records
                WHERE user_id = $id AND date = '$date'
                ");
        $project = DB::select("SELECT
                SUM(IF(TIMEDIFF(end_time, start_time) < 0, -ABS(HOUR(TIMEDIFF(end_time, start_time)) + MINUTE(TIMEDIFF(end_time, start_time)) / 60), HOUR(TIMEDIFF(end_time, start_time)) + MINUTE(TIMEDIFF(end_time, start_time)) / 60)) as total_time
                FROM records
                WHERE user_id = $id AND date = '$date' AND category_id=1
                ");
        $meeting = DB::select("SELECT
                SUM(IF(TIMEDIFF(end_time, start_time) < 0, -ABS(HOUR(TIMEDIFF(end_time, start_time)) + MINUTE(TIMEDIFF(end_time, start_time)) / 60), HOUR(TIMEDIFF(end_time, start_time)) + MINUTE(TIMEDIFF(end_time, start_time)) / 60)) as total_time
                FROM records
                WHERE user_id = $id AND date = '$date' AND category_id=2
                ");
        $unproductive = DB::select("SELECT
                SUM(IF(TIMEDIFF(end_time, start_time) < 0, -ABS(HOUR(TIMEDIFF(end_time, start_time)) + MINUTE(TIMEDIFF(end_time, start_time)) / 60), HOUR(TIMEDIFF(end_time, start_time)) + MINUTE(TIMEDIFF(end_time, start_time)) / 60)) as total_time
                FROM records
                WHERE user_id = $id AND date = '$date' AND category_id=3
                ");

        $summaryHours = is_null($summary[0]->total_time) ? 0 : floor($summary[0]->total_time);
        $projectHours = is_null($project[0]->total_time) ? 0 : floor($project[0]->total_time);
        $meetingHours = is_null($meeting[0]->total_time) ? 0 : floor($meeting[0]->total_time);
        $unproductiveHours = is_null($unproductive[0]->total_time) ? 0 : floor($unproductive[0]->total_time);

        $summaryMinutes = is_null($summary[0]->total_time) ? 0 : ($summary[0]->total_time * 60) % 60 ;
        $projectMinutes = is_null($project[0]->total_time) ? 0 : ($project[0]->total_time * 60) % 60 ;
        $meetingMinutes = is_null($meeting[0]->total_time) ? 0 : ($meeting[0]->total_time * 60) % 60 ;
        $unproductiveMinutes = is_null($unproductive[0]->total_time) ? 0 : ($unproductive[0]->total_time * 60) % 60 ;

        $summary = "$summaryHours hours $summaryMinutes minutes";
        $project = "$projectHours hours $projectMinutes minutes";
        $meeting = "$meetingHours hours $meetingMinutes minutes";
        $unproductive = "$unproductiveHours hours $unproductiveMinutes minutes";

        // dd($meeting);
        return view("summary", compact("summary", "project", "meeting", "unproductive"));
    }

    public function endAutoRecord(Request $request)
    {
        // dd($request->wantsJson(), $request->ajax());
        if (!$request->ajax() || $request->wantsJson()) {
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
                    'message' => 'The record has ended',
                ], 400);
            }

            $record->end_time = Carbon::now()->format('H:i');
            $record->save();

            return response()->json([
                'status' => 'success',
                'message' => 'The record has been saved',
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => 'error',
                'message' => $th->getMessage(),
            ], 500);
        }
    }
}
