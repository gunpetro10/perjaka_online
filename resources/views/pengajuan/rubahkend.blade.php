@extends('template_backend.home')
@section('sub-judul', 'Edit Persetujuan')
@section('content')


<form method="post" action="/pengajuan/rubah/{{ $gestdriver->id }}">
{{ csrf_field() }}

<div class="form-row">
            <div class="form-group col-md-12">
                <label for="inputEmail3" class="col-sm-4 col-form-label text-primary">N. Booking</label>
                <input type="text" class="form-control danger" placeholder="" name="bookNumber" value="{{ $gestdriver->bookNumber }}" readonly>
            </div>
        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="inputEmail3" class="col-sm-4 col-form-label text-primary">Nama Pengemudi</label>
                <input type="text" class="form-control primary @error('registerKaryawan') is-invalid @enderror" id="registerDriver" placeholder="" name="registerDriver" value="{{ $gestdriver->registerDriver }}">
                @error('registerKaryawan') <div class="class invalid-feedback">{{ $message}}</div>@enderror
            </div>
            
        </div>

        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="inputEmail3" class="col-sm-4 col-form-label text-primary">Nopol</label>
                <input type="text" class="form-control success @error('registerNumber0') is-invalid @enderror" id="registerNumber0" placeholder="" name="registerNumber0" value="{{ $gestdriver->registerNumber0 }}">
                @error('nama') <div class="class invalid-feedback">{{ $message}}</div>@enderror
            </div>
            <div class="form-group col-md-12">
                <label for="inputEmail3" class="col-sm-4 col-form-label text-primary">Nomor Telpon</label>
                <input type="text" class="form-control warning @error('phoneNumber') is-invalid @enderror" id="" placeholder="" name="phoneNumber" value="{{ $gestdriver->phoneNumber }}">
                @error('phoneNumber') <div class="class invalid-feedback">{{ $message}}</div>@enderror
            </div>
        </div>

        <div hidden class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail3" class="col-sm-4 col-form-label text-primary">Type</label>
                <input type="text" class="form-control" id="vehicleType" placeholder="" name="vehicleType" value="{{ $gestdriver->vehicleType }}">
            </div>
                <div class="form-group col-md-6">
                <label for="inputEmail3" class="col-sm-4 col-form-label text-primary">Jenis Kend</label>
                <input type="text" class="form-control" id="vehicleCategory" placeholder="" name="vehicleCategory" value="{{ $gestdriver->vehicleCategory }}">
            </div>
        </div>

        <div hidden class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail3" class="col-sm-4 col-form-label text-primary">Merk</label>
                <input type="text" class="form-control" id="vehicleBrand" placeholder="" name="vehicleBrand" value="{{ $gestdriver->vehicleBrand }}">
            </div>
                <div class="form-group col-md-6">
                <label for="inputEmail3" class="col-sm-4 col-form-label text-primary">Nik</label>
                <input type="text" class="form-control" id="idNumberDriver" placeholder="" name="idNumberDriver" value="{{ $gestdriver->idNumberDriver }}">
            </div>
        </div>
        </div>
        </div>
        <div class="form-group col-md-4">
        <button type="submit" class="btn btn-primary ">Submit</button>
        </div>
</form>

@endsection