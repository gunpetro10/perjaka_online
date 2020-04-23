@extends('template_backend.home')
@section('sub-judul', 'Form Close')
@section('content')


<form method="post" action="/pengajuan/prosesclose/{{ $gestdriver->id }}">
{{ csrf_field() }}

<div class="form-row">
            <div class="form-group col-md-12">
                <label for="inputEmail3" class="col-sm-4 col-form-label text-primary">N. Booking</label>
                <input type="text" class="form-control" placeholder="" name="bookNumber" value="{{ $gestdriver->bookNumber }}" readonly>
            </div>
            
        </div>

        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="inputEmail3" class="col-sm-4 col-form-label text-primary">Nopol</label>
                <input type="text" class="form-control @error('registerNumber0') is-invalid @enderror" id="registerNumber0" placeholder="" name="registerNumber0" value="{{ $gestdriver->registerNumber0 }}" readonly>
                @error('nama') <div class="class invalid-feedback">{{ $message}}</div>@enderror
            </div>
        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="inputEmail3" class="col-sm-4 col-form-label text-primary">Oddo Meter Berangkat</label>
                <input type="text" class="form-control @error('registerKaryawan') is-invalid @enderror" id="" placeholder="Isi KM Berangkat" name="oddoStart">
                @error('registerKaryawan') <div class="class invalid-feedback">{{ $message}}</div>@enderror
            </div>
            <div class="form-group col-md-12">
                <label for="inputEmail3" class="col-sm-4 col-form-label text-primary">Oddo Mster Datang</label>
                <input type="text" class="form-control @error('phoneNumber') is-invalid @enderror" id="" placeholder="Isi KM Kembali" name="oddoEnd">
                @error('phoneNumber') <div class="class invalid-feedback">{{ $message}}</div>@enderror
            </div>
        </div>
        </div>
        </div>
        </div>
        <div class="form-group col-md-4">
        <button type="submit" class="btn btn-primary ">Submit</button>
        </div>
</form>

@endsection