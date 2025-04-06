<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Roster;
use App\Services\RosterParserService;


class EventController extends Controller
{
    public function getEventsBetweenDates(Request $request)
    {
        $request->validate([
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
        ]);

        $start = $request->input('start_date');
        $end = $request->input('end_date');

        $data = Roster::whereBetween('date', [$start, $end])->get();

        return response()->json($data);
    }








    public function getUpcomingFlights()
    {
        $startDate = Carbon::create(2022, 1, 14);
        $endDate = $startDate->copy()->addDays(6);

        $flights = Roster::whereBetween('date', [$startDate->toDateString(), $endDate->toDateString()])
            ->orderBy('date')
            ->get();

        return response()->json($flights);
    }



    public function standbyEventsNextWeek()
    {

        $startDate = Carbon::createFromFormat('Y-m-d', '2022-01-14');
        $endDate = $startDate->copy()->addDays(7);


        $standbyEvents = Roster::where('activity', 'SBY')
            ->whereBetween('date', [$startDate, $endDate])
            ->get();

        return response()->json($standbyEvents);
    }

    public function getFlightsFrom($location)
    {

        $startDate = Carbon::createFromFormat('Y-m-d', '2022-01-14');
        $endDate = $startDate->copy()->addDays(7);

        $flights = Roster::where('from', strtoupper($location))
            ->whereBetween('date', [$startDate, $endDate])
            ->get();

        return response()->json([
            'status' => 'success',
            'count' => $flights->count(),
            'data' => $flights
        ]);
    }


    public function upload(Request $request)
    {
        $request->validate([
            'pdf' => 'required|file|mimes:pdf|max:10240', // max 10MB
        ]);

        $file = $request->file('pdf');
        $path = $file->storeAs('rosters', $file->getClientOriginalName());

        return response()->json([
            'message' => 'PDF uploaded successfully.',
            'path' => $path,
        ]);
    }
}
