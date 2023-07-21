<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class PasienPdfController extends Controller
{
    public function cetak_pdf()
    {
        $pasien = Pasien::all();

        $pdf = Pdf::loadview('pasien_pdf', ['pasien' => $pasien]);
        return $pdf->download('laporan-pasien-pdf');
    }
}