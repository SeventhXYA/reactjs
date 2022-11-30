<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Dailysd;
use App\Models\Dailybp;
use App\Models\Dailykl;
use App\Models\Dailyic;
use App\Models\Longtermtarget;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $users = User::where('level_id', 2)->count();
        $dailysd = Dailysd::whereBetween('created_at', [
            Carbon::now()->format('Y-m-d 00:00:00'), Carbon::now()->format('Y-m-d 23:59:59')
        ])->count();
        $dailybp = Dailybp::whereBetween('created_at', [
            Carbon::now()->format('Y-m-d 00:00:00'), Carbon::now()->format('Y-m-d 23:59:59')
        ])->count();
        $dailykl = Dailykl::whereBetween('created_at', [
            Carbon::now()->format('Y-m-d 00:00:00'), Carbon::now()->format('Y-m-d 23:59:59')
        ])->count();
        $dailyic = Dailyic::whereBetween('created_at', [
            Carbon::now()->format('Y-m-d 00:00:00'), Carbon::now()->format('Y-m-d 23:59:59')
        ])->count();
        $ltt_pending = Longtermtarget::where('status', 0)->count();
        $ltt_approve = Longtermtarget::where('status', 1)->count();
        $ltt_approve_user = Longtermtarget::where('user_id', Auth::user()->id)->where('status', 1)->count();
        $ltt_decline = Longtermtarget::where('status', 2)->count();
        return view('home', [
            "title" => "Beranda"
        ], compact('users', 'ltt_pending', 'ltt_approve', 'ltt_decline', 'dailysd', 'dailybp', 'dailykl', 'dailyic'));
    }

    public function adminIndex()
    {
    }
}
