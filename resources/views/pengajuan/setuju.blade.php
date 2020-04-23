@extends('template_backend.home')
@section('sub-judul', 'Persetujuan')
@section('content')

@foreach($maskenonline as $ptk)
<form method="post" action="/pengajuan/simpan/{{ $ptk->id }}">
{{ csrf_field() }}

<div class="form-row">
            <div class="form-group col-md-12">
                <label for="inputEmail3" class="col-sm-4 col-form-label text-primary">N. Booking</label>
                <input type="text" class="form-control success" id="registerKaryawan" placeholder="" name="bookNumber" value="{{ $ptk->bookNumber }}" readonly>
            </div>
        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="inputEmail3" class="col-sm-4 col-form-label text-primary">Nama Pengemudi</label>
                <input type="text" class="form-control danger @error('registerKaryawan') is-invalid @enderror" id="registerDriver" placeholder="" name="registerDriver" required>
                @error('registerKaryawan') <div class="class invalid-feedback">{{ $message}}</div>@enderror
            </div>
            
        </div>

        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="inputEmail3" class="col-sm-4 col-form-label text-primary">Nopol</label>
                <input type="text" class="form-control primary @error('registerNumber0') is-invalid @enderror" id="registerNumber0" placeholder="" name="registerNumber0" required>
                @error('nama') <div class="class invalid-feedback">{{ $message}}</div>@enderror
            </div>
            <div hidden class="form-group col-md-12">
                <label for="inputEmail3" class="col-sm-4 col-form-label text-primary">Nomor Telpon</label>
                <input type="text" class="form-control @error('phoneNumber') is-invalid @enderror" id="phoneNumber" placeholder="" name="phoneNumber">
                @error('phoneNumber') <div class="class invalid-feedback">{{ $message}}</div>@enderror
            </div>
        </div>

        <div hidden class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail3" class="col-sm-4 col-form-label text-primary">Type</label>
                <input type="text" class="form-control" id="vehicleType" placeholder="" name="vehicleType">
            </div>
                <div class="form-group col-md-6">
                <label for="inputEmail3" class="col-sm-4 col-form-label text-primary">Jenis Kend</label>
                <input type="text" class="form-control" id="vehicleCategory" placeholder="" name="vehicleCategory">
            </div>
        </div>

        <div hidden class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail3" class="col-sm-4 col-form-label text-primary">Merk</label>
                <input type="text" class="form-control" id="vehicleBrand" placeholder="" name="vehicleBrand">
            </div>
                <div class="form-group col-md-6">
                <label for="inputEmail3" class="col-sm-4 col-form-label text-primary">Nik</label>
                <input type="text" class="form-control" id="idNumberDriver" placeholder="" name="idNumberDriver">
            </div>
        </div>
        </div>
        </div>
        <div class="form-group col-md-4">
        <button type="submit" class="btn btn-3d btn-primary">Submit</button>
        </div>
</form>
@endforeach
@endsection