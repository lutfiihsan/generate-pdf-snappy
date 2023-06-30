<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class ExportPDFController extends Controller
{
    public function printPDF()
    {
        $pdf = PDF::loadView('report1');
        // $pdf->setPaper('a4');
        $pdf->setOption('page-size', 'A4');

        //Aktifkan Local File Access supaya bisa pakai file external ( cth File .CSS )
        $pdf->setOption('enable-local-file-access', true);

        // Stream untuk menampilkan tampilan PDF pada browser
        return $pdf->stream('report.pdf');
    }
}
