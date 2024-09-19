<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;

class reportController extends Controller
{
    public function report1($pid)
    {
    $payment =Payment::find($pid);
    $pdf =App::make('dompdf.wrapper');
    $print ="<div style 'margin:20px; padding:20px'>";
    $print.= "<h1>Payment receipt </h1>";
    $print.= "<hr/>";
    $print.="<p> Receipt No : <b>". $pid ."</b> </p>";
    $print.="<p> Date : <b>". $payment->paid_date ."</b> </p>";
    $print.="<p> Enrollment No : <b>". $payment->enrollment->enroll_no ."</b> </p>";
    $print.="<p> Student Name: <b>". $payment->enrollment->student->name ."</b> </p>";

    $print.= "<hr/>";

    //table creation 
    $print.="<table style='width: 100%'>";
    $print.="<tr>";
    $print.="<td> <p> Batch Name  </p> <h3>".$payment->enrollment->batch->name ."</h3> </td>";
    $print.="<td> <p> Amount </p><h3>".$payment->amount."</h3> </td>";
    $print.="</tr>";

    $print.="</table>";

    $print.="<hr/>";

   // $print.="<span> Printed By: <b>" .Auth::user(). "</b> </span>";
    $print.="<span> Printed Date :<b> ". date('Y-m-d')."</b> </span>";
    
    $print.="</div>";
    $pdf->loadHTML($print);
    return $pdf->stream();
    
    }
}
