<?php
namespace App\Http\Controllers;
use App\MasterKendaraan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KendaraanController extends Controller
{
    public function index() 
    {
        $getkend = MasterKendaraan::orderBy('id', 'desc')->paginate(8);
        return view('kendaraan/index', ['getkend' => $getkend]);
    } 

    public function carikend(Request $data)
    {
        $key = $data->key;
        $getkend = MasterKendaraan::where([
            ['registerNumber0', 'like', "%" . $key . "%"],
        ])
        ->paginate(10);
        return view('kendaraan/index', ['getkend' => $getkend]);
    }

    public function edit($id)
    {
        $getkend = MasterKendaraan::where('id', $id)->first();
        return view('kendaraan/edit',['getkend' => $getkend]);
    }

    public function update($id,Request $request){
            
        $assetNumber = $request->input('assetNumber');
        $registerNumber0 = $request->input('registerNumber0');
        $registerNumber1 = $request->input('registerNumber1');
        $vehicleBrand = $request->input('vehicleBrand');
        $vehicleType = $request->input('vehicleType');
        $vehicleCategory = $request->input('vehicleCategory');
        $vehicleYear = $request->input('vehicleYear');
        $vehicleColor = $request->input('vehicleColor');
        $capacity = $request->input('capacity');
        $BBMType = $request->input('BBMType');
        $transmission = $request->input('transmission');
        $engineNumber = $request->input('engineNumber');
        $chassisNumber = $request->input('chassisNumber');
        $unitLv0 = $request->input('unitLv0');
        $unitLv1 = $request->input('unitLv1');
        $unitLv2 = $request->input('unitLv2');
        $unitLv3 = $request->input('unitLv3');
        $SPNumber = $request->input('SPNumber');
        $BANumber = $request->input('BANumber');
        $owner = $request->input('owner');
        $BBMQuota = $request->input('BBMQuota');
        $vehicleStatus = $request->input('vehicleStatus');
       
        
        $newRealisasi = MasterKendaraan::findOrFail($id);
        $newRealisasi->assetNumber = $assetNumber;
        $newRealisasi->registerNumber0 = $registerNumber0;
        $newRealisasi->registerNumber1 = $registerNumber1;
        $newRealisasi->vehicleBrand = $vehicleBrand;
        $newRealisasi->vehicleType = $vehicleType;
        $newRealisasi->transmission = $transmission;
        $newRealisasi->vehicleYear = $vehicleYear;
        $newRealisasi->vehicleColor = $vehicleColor;
        $newRealisasi->capacity = $capacity;
        $newRealisasi->BBMType = $BBMType;
        $newRealisasi->vehicleCategory = $vehicleCategory;
        $newRealisasi->engineNumber = $engineNumber;
        $newRealisasi->chassisNumber = $chassisNumber;
        $newRealisasi->unitLv0 = $unitLv0;
        $newRealisasi->unitLv1 = $unitLv1;
        $newRealisasi->unitLv2 = $unitLv2;
        $newRealisasi->unitLv3 = $unitLv3;
        $newRealisasi->SPNumber = $SPNumber;
        $newRealisasi->BANumber = $BANumber;
        $newRealisasi->owner = $owner;
        $newRealisasi->BBMQuota = $BBMQuota;
        $newRealisasi->vehicleStatus = $vehicleStatus;
        $newRealisasi->save();
        
        return redirect('kendaraan');
    }

    public function cari(Request $data)
    {
        $key = $data->key;
        $kend = MasterKendaraan::where([
            ['nopol', 'like', "%" . $key . "%"]
        ])
        ->paginate(10);
        return view('kendaraan/tampil', ['kend' => $kend]);
    }

    public function create() 
    {
        return view('kendaraan/create');
    } 

    public function save(Request $request){
            
        $assetNumber = $request->input('assetNumber');
        $registerNumber0 = $request->input('registerNumber0');
        $registerNumber1 = $request->input('registerNumber1');
        $vehicleBrand = $request->input('vehicleBrand');
        $vehicleType = $request->input('vehicleType');
        $vehicleCategory = $request->input('vehicleCategory');
        $vehicleYear = $request->input('vehicleYear');
        $vehicleColor = $request->input('vehicleColor');
        $capacity = $request->input('capacity');
        $BBMType = $request->input('BBMType');
        $transmission = $request->input('transmission');
        $engineNumber = $request->input('engineNumber');
        $chassisNumber = $request->input('chassisNumber');
        $unitLv0 = $request->input('unitLv0');
        $unitLv1 = $request->input('unitLv1');
        $unitLv2 = $request->input('unitLv2');
        $unitLv3 = $request->input('unitLv3');
        $SPNumber = $request->input('SPNumber');
        $BANumber = $request->input('BANumber');
        $owner = $request->input('owner');
        $BBMQuota = $request->input('BBMQuota');
       
        
        $newRealisasi = new MasterKendaraan();
        $newRealisasi->assetNumber = $assetNumber;
        $newRealisasi->registerNumber0 = $registerNumber0;
        $newRealisasi->registerNumber1 = $registerNumber1;
        $newRealisasi->vehicleBrand = $vehicleBrand;
        $newRealisasi->vehicleType = $vehicleType;
        $newRealisasi->transmission = $transmission;
        $newRealisasi->vehicleYear = $vehicleYear;
        $newRealisasi->vehicleColor = $vehicleColor;
        $newRealisasi->capacity = $capacity;
        $newRealisasi->BBMType = $BBMType;
        $newRealisasi->vehicleCategory = $vehicleCategory;
        $newRealisasi->engineNumber = $engineNumber;
        $newRealisasi->chassisNumber = $chassisNumber;
        $newRealisasi->unitLv0 = $unitLv0;
        $newRealisasi->unitLv1 = $unitLv1;
        $newRealisasi->unitLv2 = $unitLv2;
        $newRealisasi->unitLv3 = $unitLv3;
        $newRealisasi->SPNumber = $SPNumber;
        $newRealisasi->BANumber = $BANumber;
        $newRealisasi->owner = $owner;
        $newRealisasi->BBMQuota = $BBMQuota;
        $newRealisasi->vehicleStatus = 'Aktif';
        $newRealisasi->save();
        
        return redirect('kendaraan');
    }

    public function getnama(Request $request) {
  
        $search = $request->search;
    
        if($search == '') {
            $registerKaryawan = DB::table('tb_karyawan')
            ->orderby('registerKaryawan','asc')
            ->select('registerKaryawan','idNumberKaryawan','unitLv0', 'unitLv1','unitLv2','unitLv3')
            ->limit(5)
            ->get();
        } else {
            $registerKaryawan = DB::table('tb_karyawan')
            ->orderby('registerKaryawan','asc')
            ->select('registerKaryawan','idNumberKaryawan', 'unitLv0', 'unitLv1','unitLv2','unitLv3')
            ->where('registerKaryawan', 'like', '%' .$search . '%')
            ->limit(5)
            ->get();
        }
    
        $response = array();
        foreach($registerKaryawan as $data) {
            $response[] = array(
                "value"=>$data->idNumberKaryawan,
                "label"=>$data->registerKaryawan,
                "unitLv0"=>$data->unitLv0,
                "unitLv1"=>$data->unitLv1,
                "unitLv2"=>$data->unitLv2,
                "unitLv3"=>$data->unitLv3
            );
        }
    
        echo json_encode($response);
        exit;
        }
}
