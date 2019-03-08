<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;



class pdfController extends Controller
{
    //

    public function generatePDF(){

        
        $data = ["title" => "welcome to PDF"];
        $pdf  = PDF::loadView('ticketout', $data);

        return $pdf->download('newoneshere.pdf');
    }
}
