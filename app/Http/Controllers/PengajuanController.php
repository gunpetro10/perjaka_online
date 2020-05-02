<?php

namespace App\Http\Controllers;
use App\Maskenonline;
use App\Driverreq;
use PDF;
use App\TampilSetuju;
use App\KendaraanReq;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PengajuanController extends Controller
{
    public function create() 
    {
        return view('pengajuan/create');
    } 

    public function store(Request $request){
        $request->validate([
            'registerKaryawan' => ['required'],
            'tripStart' => ['required'],
            'tripEnd' => ['required'],
            ]);

        $datas = Maskenonline::select('id', 'bookNumber', 'thn')
        ->where('thn','=',date('Y'))
        ->orderBy('id', 'desc')->count();
        $thn_skrg = date('y');
        if ($datas > 0) {
            $bookNumber = $thn_skrg  . sprintf('%05s', $datas + 1);
        } else {
            $bookNumber = $thn_skrg  . sprintf('%05s', 1);
        }
        
        $registerKaryawan = $request->input('registerKaryawan');
        $idNumberKaryawan = $request->input('idNumberKaryawan');
        $unitLv0 = $request->input('unitLv0');
        $unitLv1 = $request->input('unitLv1');
        $unitLv2 = $request->input('unitLv2');
        $unitLv3 = $request->input('unitLv3');
        $tripStart = $request->input('tripStart');
        $tripEnd = $request->input('tripEnd');
        $timeStart = $request->input('timeStart');
        $timeEnd = $request->input('timeEnd');
        $vehicleCategory = $request->input('vehicleCategory');
        $pickUpLocation = $request->input('pickUpLocation');
        $tripType0 = $request->input('tripType0');
        $follower = $request->input('follower');
        $tripDescription = $request->input('tripDescription');
        $tripDestination = $request->input('tripDestination');
        $phoneNumber = $request->input('phoneNumber');
        
        $newRealisasi = new Maskenonline();
        $newRealisasi->thn = date('Y');
        $newRealisasi->bookNumber = $bookNumber;
        $newRealisasi->registerKaryawan = $registerKaryawan;
        $newRealisasi->idNumberKaryawan = $idNumberKaryawan;
        $newRealisasi->unitLv0 = $unitLv0;
        $newRealisasi->unitLv1 = $unitLv1;
        $newRealisasi->unitLv2 = $unitLv2;
        $newRealisasi->unitLv3 = $unitLv3;
        $newRealisasi->tripStart = $tripStart;
        $newRealisasi->tripEnd = $tripEnd;
        $newRealisasi->timeStart = $timeStart;
        $newRealisasi->timeEnd = $timeEnd;
        $newRealisasi->vehicleCategory = $vehicleCategory;
        $newRealisasi->pickUpLocation = $pickUpLocation;
        $newRealisasi->tripType0 = $tripType0;
        $newRealisasi->follower = $follower;
        $newRealisasi->tripDescription = $tripDescription;
        $newRealisasi->tripDestination = $tripDestination;
        $newRealisasi->phoneNumber = $phoneNumber;
        $newRealisasi->reqStatus = 'Pengajuan';
        $newRealisasi->save();
        
        return redirect('pengajuan');
    }

    public function index()
    {
        $maskenonline = Maskenonline::orderBy('id', 'desc')
        ->where('reqStatus', '=', 'Pengajuan')
        ->paginate(10);
        return view('pengajuan/index', ['maskenonline' => $maskenonline]);
    }

    public function cari(Request $data)
    {
        $key = $data->key;
        $maskenonline = Maskenonline::where([
            ['bookNumber', 'like', "%" . $key . "%"],
            ['reqStatus','=','Pengajuan']
        ])
        ->paginate(10);
        return view('pengajuan/index', ['maskenonline' => $maskenonline]);
    }

    
    public function edit($id)
    {
        $maskenonline = Maskenonline::where('id', $id)->get();
        return view('pengajuan/edit', ['maskenonline' => $maskenonline]);
    }
    
    public function update($id,Request $request)
    {
        $unitLv0 = $request->input('unitLv0');
        $unitLv1 = $request->input('unitLv1');
        $unitLv2 = $request->input('unitLv2');
        $unitLv3 = $request->input('unitLv3');
        $tripStart = $request->input('tripStart');
        $tripEnd = $request->input('tripEnd');
        $timeStart = $request->input('timeStart');
        $timeEnd = $request->input('timeEnd');
        $vehicleCategory = $request->input('vehicleCategory');
        $pickUpLocation = $request->input('pickUpLocation');
        $tripType0 = $request->input('tripType0');
        $follower = $request->input('follower');
        $tripDescription = $request->input('tripDescription');
        $tripDestination = $request->input('tripDestination');
        $phoneNumber = $request->input('phoneNumber');
        
        $newRealisasi = Maskenonline::findOrFail($id);
        $newRealisasi->unitLv0 = $unitLv0;
        $newRealisasi->unitLv1 = $unitLv1;
        $newRealisasi->unitLv2 = $unitLv2;
        $newRealisasi->unitLv3 = $unitLv3;
        $newRealisasi->tripStart = $tripStart;
        $newRealisasi->tripEnd = $tripEnd;
        $newRealisasi->timeStart = $timeStart;
        $newRealisasi->timeEnd = $timeEnd;
        $newRealisasi->vehicleCategory = $vehicleCategory;
        $newRealisasi->pickUpLocation = $pickUpLocation;
        $newRealisasi->tripType0 = $tripType0;
        $newRealisasi->follower = $follower;
        $newRealisasi->tripDescription = $tripDescription;
        $newRealisasi->tripDestination = $tripDestination;
        $newRealisasi->phoneNumber = $phoneNumber;
        $newRealisasi->save();
        
        return redirect('pengajuan');
    }
    
    public function delete($id)
    {
        $maskenonline = Maskenonline::findOrFail($id);
        $maskenonline->delete();
        return redirect('pengajuan'); 
    }
    
    public function setuju($id)
    {
        $maskenonline = Maskenonline::where('id', $id)->get();
        return view('pengajuan/setuju', ['maskenonline' => $maskenonline]);
    }
    
    public function simpan($id,Request $request){
        
        $bookNumber = $request->input('bookNumber');
        $registerNumber0 = $request->input('registerNumber0');
        $registerDriver = $request->input('registerDriver');
        $idNumberDriver = $request->input('idNumberDriver');
        $phoneNumber = $request->input('phoneNumber');
        $vehicleBrand = $request->input('vehicleBrand');
        $vehicleCategory = $request->input('vehicleCategory');
        $vehicleType = $request->input('vehicleType');
        
        $newRealisasi = new Driverreq();
        $newRealisasi->bookNumber = $bookNumber;
        $newRealisasi->registerNumber0 = $registerNumber0;
        $newRealisasi->registerDriver = $registerDriver;
        $newRealisasi->idNumberDriver = $idNumberDriver;
        $newRealisasi->phoneNumber = $phoneNumber;
        $newRealisasi->save();
        
        $newRealisasi = new KendaraanReq();
        $newRealisasi->bookNumber = $bookNumber;
        $newRealisasi->registerNumber0 = $registerNumber0;
        $newRealisasi->vehicleBrand = $vehicleBrand;
        $newRealisasi->vehicleType = $vehicleType;
        $newRealisasi->vehicleCategory = $vehicleCategory;
        $newRealisasi->save();
        
        $newRealisasi = Maskenonline::findOrFail($id);
        $newRealisasi->reqStatus = 'Disetujui';
        $newRealisasi->save();
        
        return redirect('pengajuan/tampilsetuju');
    }
    
    public function tampilsetuju()
    {
        $getsetuju = TampilSetuju::orderBy('id', 'desc')
        ->where('reqStatus', '=', 'Disetujui')
        ->paginate(8);
        return view('pengajuan/tampilsetuju', ['getsetuju' => $getsetuju]);
    }

    public function rubahkend($id)
    {
        $gestdriver = TampilSetuju::where('id', $id)->first();
        return view('pengajuan/rubahkend', ['gestdriver' => $gestdriver]);
    }
    
    public function rubah($id,Request $request){
        
        $registerNumber0 = $request->input('registerNumber0');
        $registerDriver = $request->input('registerDriver');
        $idNumberDriver = $request->input('idNumberDriver');
        $phoneNumber = $request->input('phoneNumber');
        $vehicleBrand = $request->input('vehicleBrand');
        $vehicleCategory = $request->input('vehicleCategory');
        $vehicleType = $request->input('vehicleType');
        
        $newRealisasi = Driverreq::findOrFail($id);
        $newRealisasi->registerNumber0 = $registerNumber0;
        $newRealisasi->registerDriver = $registerDriver;
        $newRealisasi->idNumberDriver = $idNumberDriver;
        $newRealisasi->phoneNumber = $phoneNumber;
        $newRealisasi->save();
        
        $newRealisasi = KendaraanReq::findOrFail($id);
        $newRealisasi->registerNumber0 = $registerNumber0;
        $newRealisasi->vehicleBrand = $vehicleBrand;
        $newRealisasi->vehicleType = $vehicleType;
        $newRealisasi->vehicleCategory = $vehicleCategory;
        $newRealisasi->save();
        
        return redirect('pengajuan/tampilsetuju');
    }

    public function close($id)
    {
        $gestdriver = TampilSetuju::where('id', $id)->first();
        return view('pengajuan/close', ['gestdriver' => $gestdriver]);
    }

    public function prosesclose($id,Request $request){
        
        $oddoStart = $request->input('oddoStart');
        $oddoEnd = $request->input('oddoEnd');
        
        $newRealisasi = KendaraanReq::findOrFail($id);
        $newRealisasi->oddoStart = $oddoStart;
        $newRealisasi->oddoEnd = $oddoEnd;
        $newRealisasi->save();
        
        $newRealisasi = Maskenonline::findOrFail($id);
        $newRealisasi->reqStatus = 'Close';
        $newRealisasi->save();
        
        return redirect('pengajuan/tampilsetuju');
    }

    public function tampilclose()
    {
        $getsetuju = TampilSetuju::orderBy('id', 'desc')
        ->where('reqStatus', '=', 'Close')
        ->paginate(8);
        return view('pengajuan/tampilclose', ['getsetuju' => $getsetuju]);
    }

    public function cariclose(Request $data)
    {
        $key = $data->key;
        $getsetuju = TampilSetuju::orderBy('id','desc')
        ->where([
            ['bookNumber', 'like', "%" . $key . "%"],
            ['reqStatus', '=', 'Close'],
        ])
        ->paginate(10);
        return view('pengajuan/tampilclose', ['getsetuju' => $getsetuju]);
    }

    public function rubahoddo($id)
    {
        $gestdriver = TampilSetuju::where('id', $id)->first();
        return view('pengajuan/rubahoddo', ['gestdriver' => $gestdriver]);
    }

    public function simpanoddo($id,Request $request){
        
        $oddoStart = $request->input('oddoStart');
        $oddoEnd = $request->input('oddoEnd');
        
        $newRealisasi = KendaraanReq::findOrFail($id);
        $newRealisasi->oddoStart = $oddoStart;
        $newRealisasi->oddoEnd = $oddoEnd;
        $newRealisasi->save();
        
        return redirect('pengajuan/tampilclose');
    }

    public function preview($id)
    {
        $getsetuju=TampilSetuju::where('id',$id)->get();
        $pdf = PDF::loadView('pengajuan.preview',['getsetuju'=>$getsetuju]);
        return $pdf->stream();
    }
    
    public function cari1(Request $data)
    {
        $key = $data->key;
        $getsetuju = TampilSetuju::where([
            ['bookNumber', 'like', "%" . $key . "%"],
            ['reqStatus', '=', 'Disetujui'],
        ])
        ->paginate(10);
        return view('pengajuan/tampilsetuju', ['getsetuju' => $getsetuju]);
    }

    public function getnama1(Request $request) {
  
        $search = $request->search;
    
        if($search == '') {
            $registerDriver = DB::table('tb_driver')
            ->orderby('registerDriver','asc')
            ->select('registerDriver', 'idNumberDriver', 'phoneNumber')
            ->limit(5)
            ->get();
        } else {
            $registerDriver = DB::table('tb_driver')
            ->orderby('registerDriver','asc')
            ->select('registerDriver', 'idNumberDriver', 'phoneNumber')
            ->where('registerDriver', 'like', '%' .$search . '%')
            ->limit(5)
            ->get();
        }
    
        $response = array();
        foreach($registerDriver as $data) {
            $response[] = array(
                "label"=>$data->registerDriver,
                "value"=>$data->idNumberDriver,
                "phoneNumber"=>$data->phoneNumber
            );
        }
    
        echo json_encode($response);
        exit;
    }

    public function getnopol(Request $request) {
  
        $search = $request->search;
    
        if($search == '') {
            $registerNumber0 = DB::table('tb_kendaraan')
            ->orderby('registerNumber0','asc')
            ->select('registerNumber0', 'vehicleBrand', 'vehicleType', 'vehicleCategory')
            ->limit(5)
            ->get();
        } else {
            $registerNumber0 = DB::table('tb_kendaraan')
            ->orderby('registerNumber0','asc')
            ->select('registerNumber0', 'vehicleBrand','vehicleType','vehicleCategory')
            ->where('registerNumber0', 'like', '%' .$search . '%')
            ->limit(5)
            ->get();
        }
    
        $response = array();
        foreach($registerNumber0 as $data) {
            $response[] = array(
                "label"=>$data->registerNumber0,
                "value"=>$data->vehicleBrand,
                "vehicleType"=>$data->vehicleType,
                "vehicleCategory"=>$data->vehicleCategory
            );
        }
    
        echo json_encode($response);
        exit;
    }
}
