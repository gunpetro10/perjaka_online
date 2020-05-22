<?php

namespace App\Http\Controllers;
use App\TampilSetuju;
use PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class LaporanController extends Controller
{
    public function tampil()
    {
        $aktifitas = TampilSetuju::orderBy('id', 'desc')
        ->paginate(10);
        return view('laporan/tampil', ['aktifitas' => $aktifitas]);
    }

    public function laporan(Request $data)
    {
        $awal = $data->awal;
        $akhir = $data->akhir;
        $aktifitas = TampilSetuju::orderBy('id','desc')
        ->where('tripStart','>=',$awal)
        ->where('tripStart','<=',$akhir)
        ->where('reqStatus','Close')
        ->paginate(10);
        return view('laporan/tampil', 
        ['aktifitas' => $aktifitas,
        'awal' =>$awal,
        'akhir' =>$akhir
        ]);
    }

    public function preview($awal, $akhir)
    {
        $aktifitas=TampilSetuju::orderBy('id','desc')
        ->where('tripStart','>=',$awal)
        ->where('tripStart','<=',$akhir)
        ->where('reqStatus','Close')
        ->get();
        $pdf = PDF::loadView('laporan.preview',['aktifitas'=>$aktifitas]);
        return $pdf->stream();
    }

    public function nopol(Request $data)
    {
        $key = $data->key;
        $aktifitas = TampilSetuju::orderBy('id','desc')
        ->where([
            ['registerNumber0', 'like', "%" . $key . "%"],
            ['reqStatus', '=', 'Close'],
        ])
        ->paginate(10);
        return view('laporan/lapnopol', ['aktifitas' => $aktifitas]);
    }

    
}
