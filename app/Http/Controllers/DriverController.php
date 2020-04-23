<?php

namespace App\Http\Controllers;

use App\Driver;
use Illuminate\Http\Request;

class DriverController extends Controller
{
    public function index()
    {
        $getdriver = Driver::orderBy('id', 'desc')->paginate(8);
        return view('driver/index', ['getdriver' => $getdriver]);
    }

    public function cari(Request $data)
    {
        $key = $data->key;
        $getdriver = Driver::where([
            ['registerDriver', 'like', "%" . $key . "%"],
        ])
        ->paginate(10);
        return view('driver/index', ['getdriver' => $getdriver]);
    }

    public function create() 
    {
        return view('driver/create');
    } 

    public function store(Request $request){
        $registerDriver = $request->input('registerDriver');
        $idNumberDriver = $request->input('idNumberDriver');
        $address = $request->input('address');
        $phoneNumber = $request->input('phoneNumber');
        $grup = $request->input('grup');
        $unitLv0 = $request->input('unitLv0');
        $unitLv1 = $request->input('unitLv1');
        $unitLv2 = $request->input('unitLv2');
        $unitLv3 = $request->input('unitLv3');
        $driverClass = $request->input('driverClass');
        $driverDescription = $request->input('driverDescription');
        
        $newRealisasi = new Driver();
        $newRealisasi->registerDriver = $registerDriver;
        $newRealisasi->idNumberDriver = $idNumberDriver;
        $newRealisasi->address = $address;
        $newRealisasi->phoneNumber = $phoneNumber;
        $newRealisasi->grup = $grup;
        $newRealisasi->unitLv0 = $unitLv0;
        $newRealisasi->unitLv1 = $unitLv1;
        $newRealisasi->unitLv2 = $unitLv2;
        $newRealisasi->unitLv3 = $unitLv3;
        $newRealisasi->driverClass = $driverClass;
        $newRealisasi->driverDescription = $driverDescription;
        $newRealisasi->driverStatus = 'Aktif';
        $newRealisasi->save();
        
        return redirect('driver');
    }
    
    public function edit($id)
    {
        $editdriver = Driver::where('id', $id)->first();
        return view('driver/edit', ['editdriver' => $editdriver]);
    }

    public function update($id,Request $request){
        $registerDriver = $request->input('registerDriver');
        $idNumberDriver = $request->input('idNumberDriver');
        $address = $request->input('address');
        $phoneNumber = $request->input('phoneNumber');
        $grup = $request->input('grup');
        $unitLv0 = $request->input('unitLv0');
        $unitLv1 = $request->input('unitLv1');
        $unitLv2 = $request->input('unitLv2');
        $unitLv3 = $request->input('unitLv3');
        $driverClass = $request->input('driverClass');
        $driverDescription = $request->input('driverDescription');
        $driverStatus = $request->input('driverStatus');
        
        $newRealisasi = Driver::findOrFail($id);
        $newRealisasi->registerDriver = $registerDriver;
        $newRealisasi->idNumberDriver = $idNumberDriver;
        $newRealisasi->address = $address;
        $newRealisasi->phoneNumber = $phoneNumber;
        $newRealisasi->grup = $grup;
        $newRealisasi->unitLv0 = $unitLv0;
        $newRealisasi->unitLv1 = $unitLv1;
        $newRealisasi->unitLv2 = $unitLv2;
        $newRealisasi->unitLv3 = $unitLv3;
        $newRealisasi->driverClass = $driverClass;
        $newRealisasi->driverDescription = $driverDescription;
        $newRealisasi->driverStatus = $driverStatus;
        $newRealisasi->save();
        
        return redirect('driver');
    }

    public function delete($id)
    {
        $deletedriver = Driver::findOrFail($id);
        $deletedriver->delete();
        return redirect('driver'); 
    }
}
