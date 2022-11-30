<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Longtermtarget;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Barryvdh\DomPDF\Facade\Pdf;

class LongTermController extends Controller
{
    public function index()
    {
        $longterm = Longtermtarget::where('user_id', Auth::user()->id)->orderBy('id', 'DESC')->whereBetween('created_at', [
            Carbon::now()->startOfMonth(), Carbon::now()->endOfMonth()
        ])->get();
        return view('longterm.longtermtarget', [
            "title" => "Long Term Target",
        ], compact('longterm'));
    }

    public function create()
    {
        $user = User::all();
        return view('longterm.newlongtermtarget', [
            "title" => "Long Term Target",
            "sesi" => "LONG TERM TARGET",
            $longterm = Longtermtarget::where('user_id', Auth::user()->id)->orderBy('id', 'DESC')->get()
            // ->paginate(4)
        ], compact('user', 'longterm'));
    }

    public function store(Request $request)
    {
        $validated_data = $request->validate([
            'sesi' => 'required',
            'target' => 'required',
            'desc' => 'required',
            'benefit' => 'required',
            'status' => 'required|numeric'
        ]);
        $longtermtarget = new Longtermtarget();
        $longtermtarget->sesi = $validated_data['sesi'];
        $longtermtarget->target = $validated_data['target'];
        $longtermtarget->desc = $validated_data['desc'];
        $longtermtarget->benefit = $validated_data['benefit'];
        $longtermtarget->status = $validated_data['status'];

        Auth::user()->longtermtarget()->save($longtermtarget);

        return redirect('longterm');
    }
    public function history()
    {
        $longterm = Longtermtarget::where('user_id', Auth::user()->id)->whereBetween('created_at', [
            Carbon::now()->startOfMonth(), Carbon::now()->endOfMonth()
        ])->get();

        return view('historytarget', [
            "title" => "History Target",
        ], compact('longtermtarget'));
    }

    public function viewadmin()
    {
        $longterm = Longtermtarget::orderBy('id', 'DESC')->get();
        return view('admin.viewlttadm', [
            "title" => "Long Term Approval",

        ], compact('longterm'));
    }

    public function pending()
    {
        $longterm = Longtermtarget::where('status', 0)->orderBy('id', 'DESC')->get();
        // $carbon = Carbon::parse($longterm['created_at'])->format('d M Y');
        return view('admin.lttpending', [
            "title" => "LTT Pending",

        ], compact('longterm'));
    }

    public function approved()
    {
        $longterm = Longtermtarget::where('status', 1)->orderBy('id', 'DESC')->get();
        return view('admin.lttapprove', [
            "title" => "LTT Approved",

        ], compact('longterm'));
    }

    public function approval(Request $request)
    {
        // dd($request->all());
        if ($request->isMethod('POST')) {
            $ltt = $request->all();

            Longtermtarget::where(['id' => $ltt["id"]])->update(['status' => $ltt['status']]);
            return redirect()->back();
        }
    }

    public function downloadPdf()
    {
        $longterm = Longtermtarget::all();
        $data = [
            'tittle' => 'All Post Data',
            'date' => date('d/m/Y'),
            'longterm' => $longterm
        ];

        $pdf = Pdf::loadView('admin.pdflongterm', $data);
        return $pdf->download('longtermtarget.pdf');
    }
}
