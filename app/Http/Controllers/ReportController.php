<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

use Barryvdh\DomPDF\Facade\Pdf;


class ReportController extends Controller
{
    public function index(){

        $userCount = User::select('country_id',\DB::raw("count(id) as users"))
                     ->groupBy('country_id')->with('country')->get();

        $pdf = PDF::loadView('report', compact('userCount'));

        return $pdf->stream('users_report.pdf');
    }
}
