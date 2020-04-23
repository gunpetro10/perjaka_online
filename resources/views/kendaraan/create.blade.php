@extends('template_backend.home')
@section('sub-judul', 'Form Kendaraan Baru')
@section('content')

<form method="post" action="/kendaraan/save">
{{ csrf_field() }}
        
<div class="form-row">
            <div class="form-group col-md-12">
                <input type="text" class="form-control danger @error('registerNumber0') is-invalid @enderror" id="" placeholder="Nopol" name="registerNumber0" required>
                @error('registerKaryawan') <div class="class invalid-feedback">{{ $message}}</div>@enderror
            </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <input type="text" class="form-control success @error('registerKaryawan') is-invalid @enderror" id="" placeholder="No. Asset" name="assetNumber" required>
                @error('registerKaryawan') <div class="class invalid-feedback">{{ $message}}</div>@enderror
            </div>
            <div class="form-group col-md-6">
                <input type="text" class="form-control default @error('vehicleType') is-invalid @enderror" id="" placeholder ="Type" name="vehicleType" required>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <input type="text" class="form-control warning @error('tgl_um') is-invalid @enderror" id="" placeholder="Nopol Lama" name="registerNumber1" required>
                @error('tgl_um') <div class="class invalid-feedback">{{ $message}}</div>@enderror
            </div>
            <div class="form-group col-md-6">
                <input type="text" class="form-control info @error('vehicleBrand') is-invalid @enderror" placeholder="Merk" name="vehicleBrand" required>
                @error('nama') <div class="class invalid-feedback">{{ $message}}</div>@enderror
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                    <select name="vehicleCategory" class="form-control success">
                        <option value="">Pilih Jenis Kendaraan</option>
                        <option value="Sedan">Sedan</option>
                        <option value="Station">Station</option>
                        <option value="Pickup">Pick up</option>
                    </select>
            </div>
            <div class="form-group col-md-6">
                <input type="text" class="form-control default @error('vehicleBrand') is-invalid @enderror" placeholder="Tahun Pembuatan" name="vehicleYear" required>
                @error('nama') <div class="class invalid-feedback">{{ $message}}</div>@enderror
            </div>
        </div>
        
        <div class="form-row">
            <div class="form-group col-md-6">
                <input type="text" class="form-control primary @error('tgl_um') is-invalid @enderror" id="" placeholder="Warna" name="vehicleColor" required>
                @error('tgl_um') <div class="class invalid-feedback">{{ $message}}</div>@enderror
            </div>
            <div class="form-group col-md-6">
                <input type="text" class="form-control danger @error('nama') is-invalid @enderror" id="" placeholder="Capasitas Mesin" name="capacity" required>
                @error('nama') <div class="class invalid-feedback">{{ $message}}</div>@enderror
            </div>
        </div>
        
        <div class="form-row">
            <div class="form-group col-md-6">
                <input type="text" class="form-control warning @error('tgl_um') is-invalid @enderror" id="" placeholder="Jenis Bbm" name="BBMType" required>
                @error('tgl_um') <div class="class invalid-feedback">{{ $message}}</div>@enderror
            </div>
            <div class="form-group col-md-6">
                <input type="text" class="form-control info @error('vehicleBrand') is-invalid @enderror" placeholder="Transmition" name="transmission" required>
                @error('nama') <div class="class invalid-feedback">{{ $message}}</div>@enderror
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <input type="text" class="form-control success @error('registerKaryawan') is-invalid @enderror" id="" placeholder="No. Mesin" name="engineNumber" required>
                @error('registerKaryawan') <div class="class invalid-feedback">{{ $message}}</div>@enderror
            </div>
            <div class="form-group col-md-6">
                <input type="text" class="form-control default @error('registerNumber0') is-invalid @enderror" id="" placeholder ="No. Chasis" name="chassisNumber" required>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <input type="text" class="form-control primary @error('tgl_um') is-invalid @enderror" id="" placeholder="Directorat" name="unitLv0" required> 
                @error('tgl_um') <div class="class invalid-feedback">{{ $message}}</div>@enderror
            </div>
            <div class="form-group col-md-6">
                <input type="text" class="form-control danger @error('nama') is-invalid @enderror" id="" placeholder="Kompartemen" name="unitLv1" required>
                @error('nama') <div class="class invalid-feedback">{{ $message}}</div>@enderror
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <input type="text" class="form-control warning @error('tgl_um') is-invalid @enderror" id="" placeholder="Departemen" name="unitLv2" required>
                @error('tgl_um') <div class="class invalid-feedback">{{ $message}}</div>@enderror
            </div>
            <div class="form-group col-md-6">
                <input type="text" class="form-control info @error('vehicleBrand') is-invalid @enderror" placeholder="Bagian" name="unitLv3" required>
                @error('nama') <div class="class invalid-feedback">{{ $message}}</div>@enderror
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <input type="text" class="form-control success @error('registerKaryawan') is-invalid @enderror" id="" placeholder="No. SP" name="SPNumber" required>
                @error('registerKaryawan') <div class="class invalid-feedback">{{ $message}}</div>@enderror
            </div>
            <div class="form-group col-md-6">
                <input type="text" class="form-control default @error('registerNumber0') is-invalid @enderror" id="" placeholder ="No.BA" name="BANumber" required>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <input type="text" class="form-control primary @error('tgl_um') is-invalid @enderror" id="" placeholder="Pemilik" name="owner" required>
                @error('tgl_um') <div class="class invalid-feedback">{{ $message}}</div>@enderror
            </div>
            <div class="form-group col-md-6">
                <input type="text" class="form-control danger @error('nama') is-invalid @enderror" id="" placeholder="Jata BBM" name="BBMQuota" required>
                @error('nama') <div class="class invalid-feedback">{{ $message}}</div>@enderror
            </div>
        </div>
        </div>
        </div>
        <div class="form-group col-md-1">
        <button type="submit" class="btn ripple btn-3d btn-primary">Submit</button>
        </div>
</form>
@endsection