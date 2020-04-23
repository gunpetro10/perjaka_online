<?php

namespace App\Http\Controllers;
use App\Karyawan;
use Illuminate\Http\Request;

class RegristrasiController extends Controller
{
    public function create()
    {
        return view('regristrasi/create');
    }

    public function index()
    {
        $karyawan = Karyawan::orderBy('id', 'desc')->paginate(10);
        return view('regristrasi/index', ['karyawan' => $karyawan]);
    }

    public function store(Request $request){
       
        $registerKaryawan = $request->input('registerKaryawan');
        $idNumberKaryawan = $request->input('idNumberKaryawan');
        $unitLv0 = $request->input('unitLv0');
        $unitLv1 = $request->input('unitLv1');
        $unitLv2 = $request->input('unitLv2');
        $unitLv3 = $request->input('unitLv3');
        $email = $request->input('email');
        $tripDestination = $request->input('tripDestination');
        $phoneNumber = $request->input('phoneNumber');
        
        $newRealisasi = new Karyawan();
        $newRealisasi->registerKaryawan = $registerKaryawan;
        $newRealisasi->idNumberKaryawan = $idNumberKaryawan;
        $newRealisasi->unitLv0 = $unitLv0;
        $newRealisasi->unitLv1 = $unitLv1;
        $newRealisasi->unitLv2 = $unitLv2;
        $newRealisasi->unitLv3 = $unitLv3;
        $newRealisasi->save();
    
        $newRealisasi = new User();
        $newRealisasi->name = $registerKaryawan;
        $newRealisasi->user_id = $idNumberKaryawan;
        $newRealisasi->role = 'karyawan';
        $newRealisasi->email = $email;
        $newRealisasi->password = bcrypt('rahasia');
        $newRealisasi->remember_token = str::random(60);
        $newRealisasi->save();
        
        return redirect('login');
    }
}
