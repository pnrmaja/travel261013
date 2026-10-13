<?php

namespace App\Http\Controllers;

use App\Models\Travel;

class TravelController extends Controller
{
    public function show($flight_id, $user_id)
    {
        $travel = Travel::where('flight_id', $flight_id)
            ->where('user_id', $user_id)
            ->firstOrFail();

        return response()->json($travel);
    }

    public function destroy($flight_id, $user_id)
    {
        $deleted = Travel::where('flight_id', $flight_id)
            ->where('user_id', $user_id)
            ->delete();

        if (!$deleted) {
            return response()->json([
                'message' => 'A travel rekord nem található.'
            ], 404);
        }

        return response()->json([
            'message' => 'A travel rekord sikeresen törölve.'
        ]);
    }
}
