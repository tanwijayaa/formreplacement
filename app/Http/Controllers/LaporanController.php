<?php

namespace App\Http\Controllers;

use App\Models\formReplacement;
use Illuminate\Http\Request;
use PDF;

class LaporanController extends Controller
{
    public function index(){
        $rpl = formReplacement::all();
        return view('laporan/replacement',['replacement'=>$rpl]);

    }

    public function cetak_pdf(){
        $rpl = formReplacement::all();
        $pdf = PDF::loadview('laporan/replacementpdf',['replacement'=>$rpl]);

        return $pdf->download('laporan-replacement.pdf');
    }
}