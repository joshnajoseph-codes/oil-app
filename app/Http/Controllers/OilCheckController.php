<?php

namespace App\Http\Controllers;
use App\Models\OilCheck;
use Carbon\Carbon;

use Illuminate\Http\Request;

class OilCheckController extends Controller
{
  
     public function create()
    {
        return view('oilchecks.form');
    }

    // POST /check
    public function store(Request $request)
    {
        // 1) Validate inputs
        $validated = $request->validate([
            'current_odometer' => ['required', 'integer', 'min:0'],
            'previous_change_odometer' => ['required', 'integer', 'min:0'],
            'previous_change_date' => ['required', 'date', 'before:today'],
        ]);

        // extra rule: current odometer >= previous change odometer
        if ((int)$validated['current_odometer'] < (int)$validated['previous_change_odometer']) {
            return back()
                ->withErrors(['current_odometer' => 'Current odometer must be greater than or equal to the odometer at previous oil change.'])
                ->withInput();
        }

        // 2) Calculate if due
        $kmSince = (int)$validated['current_odometer'] - (int)$validated['previous_change_odometer'];

        $previousDate = Carbon::parse($validated['previous_change_date'])->startOfDay();
        $now = Carbon::now()->startOfDay();

        // "more than 6 months" => use diff in months (strictly greater than 6)
        $monthsSince = $previousDate->diffInMonths($now);

        $isDue = ($kmSince > 5000) || ($monthsSince > 6);

        // 3) Save to DB
        $check = OilCheck::create([
            'current_odometer' => (int)$validated['current_odometer'],
            'previous_change_odometer' => (int)$validated['previous_change_odometer'],
            'previous_change_date' => $validated['previous_change_date'],
            'is_due' => $isDue,
        ]);

        // 4) Redirect to unique result page
        return redirect("/result/{$check->id}");
    }

    // GET /result/{id}
    public function show($id)
    {
        $check = OilCheck::findOrFail($id);
        return view('oilchecks.result', compact('check'));
    }
}
