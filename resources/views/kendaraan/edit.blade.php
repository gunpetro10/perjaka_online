@extends('template_backend.home')
@section('sub-judul', 'Edit Kendaraan')
@section('content')

<form method="post" action="/kendaraan/update/{{ $getkend->id }}">
{{ csrf_field() }}
        
<div class="form-row">
            <div class="form-group col-md-12">
                <input type="text" class="form-control danger @error('registerNumber0') is-invalid @enderror" id="" placeholder="Nopol" name="registerNumber0" value="{{$getkend->registerNumber0}}" required>
                @error('registerKaryawan') <div class="class invalid-feedback">{{ $message}}</div>@enderror
            </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <input type="text" class="form-control success @error('registerKaryawan') is-invalid @enderror" id="" placeholder="No. Asset" name="assetNumber" value="{{$getkend->assetNumber}}" required>
                @error('registerKaryawan') <div class="class invalid-feedback">{{ $message}}</div>@enderror
            </div>
            <div class="form-group col-md-6">
                <input type="text" class="form-control default @error('vehicleType') is-invalid @enderror" id="" placeholder ="Type" name="vehicleType" value="{{$getkend->vehicleType}}" required>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <input type="text" class="form-control warning @error('tgl_um') is-invalid @enderror" id="" placeholder="Nopol Lama" name="registerNumber1" value="{{$getkend->registerNumber1}}" required>
                @error('tgl_um') <div class="class invalid-feedback">{{ $message}}</div>@enderror
            </div>
            <div class="form-group col-md-6">
                <input type="text" class="form-control info @error('vehicleBrand') is-invalid @enderror" placeholder="Merk" name="vehicleBrand" value="{{$getkend->vehicleBrand}}" required>
                @error('nama') <div class="class invalid-feedback">{{ $message}}</div>@enderror
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                    <select name="vehicleCategory" class="form-control success">
                        <option value="{{$getkend->vehicleCategory}}">{{$getkend->vehicleCategory}}</option>
                        <option value="Sedan">Sedan</option>
                        <option value="Station">Station</option>
                        <option value="Pickup">Pick up</option>
                    </select>
            </div>
            <div class="form-group col-md-6">
                <input type="text" class="form-control default @error('vehicleBrand') is-invalid @enderror" placeholder="Tahun Pembuatan" name="vehicleYear" value="{{$getkend->vehicleYear}}" required>
                @error('nama') <div class="class invalid-feedback">{{ $message}}</div>@enderror
            </div>
        </div>
        
        <div class="form-row">
            <div class="form-group col-md-6">
                <input type="text" class="form-control primary @error('tgl_um') is-invalid @enderror" id="" placeholder="Warna" name="vehicleColor" value="{{$getkend->vehicleColor}}" required>
                @error('tgl_um') <div class="class invalid-feedback">{{ $message}}</div>@enderror
            </div>
            <div class="form-group col-md-6">
                <input type="text" class="form-control danger @error('nama') is-invalid @enderror" id="" placeholder="Capasitas Mesin" name="capacity" value="{{$getkend->capacity}}" required>
                @error('nama') <div class="class invalid-feedback">{{ $message}}</div>@enderror
            </div>
        </div>
        
        <div class="form-row">
            <div class="form-group col-md-6">
                <input type="text" class="form-control warning @error('tgl_um') is-invalid @enderror" id="" placeholder="" name="BBMType" value="{{$getkend->BBMType}}" required>
                @error('tgl_um') <div class="class invalid-feedback">{{ $message}}</div>@enderror
            </div>
            <div class="form-group col-md-6">
                <input type="text" class="form-control info @error('vehicleBrand') is-invalid @enderror" placeholder="Transmition" name="transmission" value="{{$getkend->transmission}}" required>
                @error('nama') <div class="class invalid-feedback">{{ $message}}</div>@enderror
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <input type="text" class="form-control success @error('registerKaryawan') is-invalid @enderror" id="" placeholder="" name="engineNumber" value="{{$getkend->engineNumber}}" required>
                @error('registerKaryawan') <div class="class invalid-feedback">{{ $message}}</div>@enderror
            </div>
            <div class="form-group col-md-6">
                <input type="text" class="form-control default @error('registerNumber0') is-invalid @enderror" id="" placeholder ="" name="chassisNumber" value="{{$getkend->chassisNumber}}" required>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <input type="text" class="form-control primary @error('tgl_um') is-invalid @enderror" id="" placeholder="" name="unitLv0" value="{{$getkend->unitLv0}}" required> 
                @error('tgl_um') <div class="class invalid-feedback">{{ $message}}</div>@enderror
            </div>
            <div class="form-group col-md-6">
                <input type="text" class="form-control danger @error('nama') is-invalid @enderror" id="" placeholder="" name="unitLv1" value="{{$getkend->unitLv1}}" required>
                @error('nama') <div class="class invalid-feedback">{{ $message}}</div>@enderror
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <input type="text" class="form-control warning @error('tgl_um') is-invalid @enderror" id="" placeholder="" name="unitLv2" value="{{$getkend->unitLv2}}" required>
                @error('tgl_um') <div class="class invalid-feedback">{{ $message}}</div>@enderror
            </div>
            <div class="form-group col-md-6">
                <input type="text" class="form-control info @error('vehicleBrand') is-invalid @enderror" placeholder="" name="unitLv3" value="{{$getkend->unitLv3}}" required>
                @error('nama') <div class="class invalid-feedback">{{ $message}}</div>@enderror
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <input type="text" class="form-control success @error('registerKaryawan') is-invalid @enderror" id="" placeholder="" name="SPNumber" value="{{$getkend->SPNumber}}" required>
                @error('registerKaryawan') <div class="class invalid-feedback">{{ $message}}</div>@enderror
            </div>
            <div class="form-group col-md-6">
                <input type="text" class="form-control default @error('registerNumber0') is-invalid @enderror" id="" placeholder ="" name="BANumber" value="{{$getkend->BANumber}}" required>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <input type="text" class="form-control primary @error('tgl_um') is-invalid @enderror" id="" placeholder="" name="owner" value="{{$getkend->owner}}" required>
                @error('tgl_um') <div class="class invalid-feedback">{{ $message}}</div>@enderror
            </div>
            <div class="form-group col-md-6">
                <input type="text" class="form-control danger @error('nama') is-invalid @enderror" id="" placeholder="" name="BBMQuota" value="{{$getkend->BBMQuota}}" required>
                @error('nama') <div class="class invalid-feedback">{{ $message}}</div>@enderror
            </div>
        </div>
        <div class="form-group col-md-12">
                <input type="text" class="form-control danger @error('vehicleStatus') is-invalid @enderror" id="" placeholder="" name="vehicleStatus" value="{{$getkend->vehicleStatus}}" required>
                @error('nama') <div class="class invalid-feedback">{{ $message}}</div>@enderror
            </div>
        </div>
        </div>
        </div>
        <div class="form-group col-md-4">
        <button type="submit" class="btn btn-primary ">Submit</button>
        </div>
</form>
@endsection