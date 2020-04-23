<?php

namespace App\Http\Controllers;
use App\TampilSetuju;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function tampil()
    {
        $aktifitas = TampilSetuju::orderBy('id', 'desc')
        ->where('reqStatus', '=', 'Close')
        ->paginate(8);
        return view('laporan/tampil', ['aktifitas' => $aktifitas]);
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
