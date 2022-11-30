<?php

namespace App\Http\Controllers;

// use Excel;
use App\Models\Pomodoro;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\PomodoroRecord;
use Illuminate\Http\Request;

class PomodoroController extends Controller
{
    public function pomodoro()
    {
        return view('pomodoro', [
            "title" => "Pomodoro",
            "sesi" => "POMODORO TIMER",
        ]);
    }

    public function pomodoroExport()
    {
        return Excel::download(new PomodoroRecord, 'pomodororecord.xlsx');
    }

    public function setTimer(Request $request)
    {

        dd($request->except(['_token', 'submit']));
        // Pomodoro::pomodoro($request->except(['_token','submit']));
    }
}
