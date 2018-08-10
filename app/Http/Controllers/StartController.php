<?php

namespace App\Http\Controllers;

use App\VisitCounter;
use Carbon\Carbon;
use Illuminate\Http\Request;

class StartController extends Controller
{
    public function index() {

        $date = date('Y-m-d');

        $ip = $_SERVER['REMOTE_ADDR'];

        $visitCounter = new VisitCounter(['ip_visitor' => $ip]);

        $user = VisitCounter::where('created_at', $date)
                                    ->where('ip_visitor', $ip)
                                    ->get();

        $counter = VisitCounter::all()->count();

        if ($user->count() === 0) {

            $visitCounter->save();
        }

        return view('start-page', [
            'counter' => $counter,
        ]);
    }
}
