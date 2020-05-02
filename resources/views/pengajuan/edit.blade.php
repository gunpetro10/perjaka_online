@extends('template_backend.home')
@section('sub-judul', 'Edit Pengajuan')
@section('content')

@foreach($maskenonline as $ptk)
<form method="post" action="/pengajuan/update/{{ $ptk->id }}">
{{ csrf_field() }}

        <div class="form-row">
            <div hidden class="form-group col-md-12">
                <label for="inputEmail3" class="col-sm-4 col-form-label text-primary">N. Booking</label>
                <input type="text" class="form-control @error('bookNumber') is-invalid @enderror" id="bookNumber" placeholder="" name="bookNumber" value="{{ $ptk->bookNumber }}" readonly>
                @error('bookNumber') <div class="class invalid-feedback">{{ $message}}</div>@enderror
            </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail3" class="col-sm-4 col-form-label text-primary">Nama Pemohon</label>
                <input type="text" class="form-control @error('registerKaryawan') is-invalid @enderror" id="registerKaryawan" placeholder="" name="registerKaryawan" value="{{ $ptk->registerKaryawan }}" readonly>
                @error('registerKaryawan') <div class="class invalid-feedback">{{ $message}}</div>@enderror
            </div>
            <div class="form-group col-md-6">
                <label for="inputEmail3" class="col-sm-4 col-form-label text-primary">N i k</label>
                <input type="text" class="form-control @error('nama') is-invalid @enderror" id="idNumberKaryawan" name="idNumberKaryawan" value="{{ $ptk->idNumberKaryawan }}" readonly>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail3" class="col-sm-4 col-form-label text-primary">Tanggal Berangkat</label>
                <input type="date" class="form-control @error('tgl_um') is-invalid @enderror" id="" placeholder="" name="tripStart" value="{{ $ptk->tripStart }}">
                @error('tgl_um') <div class="class invalid-feedback">{{ $message}}</div>@enderror
            </div>
            <div class="form-group col-md-6">
                <label for="inputEmail3" class="col-sm-4 col-form-label text-primary">Jam</label>
                <input type="time" class="form-control @error('nama') is-invalid @enderror" placeholder="" name="timeStart" value="{{ $ptk->timeStart }}">
                @error('nama') <div class="class invalid-feedback">{{ $message}}</div>@enderror
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail3" class="col-sm-4 col-form-label text-primary">Tanggal Selesai</label>
                <input type="date" class="form-control @error('tgl_um') is-invalid @enderror" id="" placeholder="" name="tripEnd" value="{{ $ptk->tripEnd }}">
                @error('tgl_um') <div class="class invalid-feedback">{{ $message}}</div>@enderror
            </div>
            <div class="form-group col-md-6">
                <label for="inputEmail3" class="col-sm-4 col-form-label text-primary">Jam</label>
                <input type="time" class="form-control @error('nama') is-invalid @enderror" id="" placeholder="" name="timeEnd" value="{{ $ptk->timeEnd }}">
                @error('nama') <div class="class invalid-feedback">{{ $message}}</div>@enderror
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail3" class="col-sm-6 col-form-label text-primary">Jenis Kenadaraan</label>
                    <select name="vehicleCategory" class="form-control" value="">
                        <option selected value="{{ $ptk->vehicleCategory }}">{{ $ptk->vehicleCategory }}</option>
                        <option value="Sedan">Sedan</option>
                        <option value="Station">Station</option>
                        <option value="Pickup">Pick up</option>
                    </select>
            </div>
            <div class="form-group col-md-6">
                <label for="inputEmail3" class="col-sm-6 col-form-label text-primary">Kategory</label>
                    <select name="tripType0" class="form-control">
                        <option selected value="{{$ptk->tripType0}}">{{$ptk->tripType0}}</option>
                        <option value="Dinas">Dinas</option>
                        <option value="NonDinas">Non Dinas</option>
                    </select>
            </div>
            <div class="form-group col-md-6">
                <label for="inputEmail3" class="col-sm-6 col-form-label text-primary">Keperluan</label>
                <input type="text" class="form-control @error('follower') is-invalid @enderror" id="" placeholder="" name="tripDescription" value="{{ $ptk->tripDescription }}">
                @error('tgl_um') <div class="class invalid-feedback">{{ $message}}</div>@enderror
            </div>
            <div class="form-group col-md-6">
                <label for="inputEmail3" class="col-sm-6 col-form-label text-primary">Jumlah Pengikut</label>
                <input type="text" class="form-control @error('follower') is-invalid @enderror" id="" placeholder="" name="follower" value="{{ $ptk->follower }}">
                @error('tgl_um') <div class="class invalid-feedback">{{ $message}}</div>@enderror
            </div>
        </div>
        
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail3" class="col-sm-4 col-form-label text-primary">Standby</label>
                <input type="text" class="form-control @error('pickUpLocation') is-invalid @enderror" id="" placeholder="" name="pickUpLocation" value="{{ $ptk->pickUpLocation }}">
                @error('tgl_um') <div class="class invalid-feedback">{{ $message}}</div>@enderror
            </div>
                <div class="form-group col-md-6">
                <label for="inputEmail3" class="col-sm-4 col-form-label text-primary">Tujuan</label>
                <input type="text" class="form-control @error('tripDestination') is-invalid @enderror" id="nama" placeholder="" name="tripDestination" value="{{ $ptk->tripDestination }}">
                @error('nama') <div class="class invalid-feedback">{{ $message}}</div>@enderror
            </div>
        </div>

        <div hidden class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail3" class="col-sm-4 col-form-label text-primary">Directorat</label>
                <input type="text" class="form-control @error('unitLv0') is-invalid @enderror" id="unitLv0" placeholder="" name="unitLv0" value="{{ $ptk->unitLv0 }}">
                @error('tgl_um') <div class="class invalid-feedback">{{ $message}}</div>@enderror
            </div>
                <div class="form-group col-md-6">
                <label for="inputEmail3" class="col-sm-4 col-form-label text-primary">Kompartemen</label>
                <input type="text" class="form-control @error('unitLv1') is-invalid @enderror" id="unitLv1" placeholder="" name="unitLv1" value="{{ $ptk->unitLv1 }}">
                @error('nama') <div class="class invalid-feedback">{{ $message}}</div>@enderror
            </div>
        </div>

        <div hidden class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail3" class="col-sm-4 col-form-label text-primary">Departemen</label>
                <input type="text" class="form-control @error('unitLv2') is-invalid @enderror" id="unitLv2" placeholder="" name="unitLv2" value="{{ $ptk->unitLv2 }}">
                @error('tgl_um') <div class="class invalid-feedback">{{ $message}}</div>@enderror
            </div>
                <div class="form-group col-md-6">
                <label for="inputEmail3" class="col-sm-4 col-form-label text-primary">Bagian</label>
                <input type="text" class="form-control @error('unitLv3') is-invalid @enderror" id="unitLv3" placeholder="" name="unitLv3" value="{{ $ptk->unitLv3 }}">
                @error('nama') <div class="class invalid-feedback">{{ $message}}</div>@enderror
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="inputEmail3" class="col-sm-4 col-form-label text-primary">No. Telpon</label>
                <input type="text" class="form-control @error('phoneNumber') is-invalid @enderror" id="phoneNumber" placeholder="" name="phoneNumber" value="{{ $ptk->phoneNumber }}">
                @error('phoneNumber') <div class="class invalid-feedback">{{ $message}}</div>@enderror
            </div>
        </div>
        </div>
        <div class="form-group col-md-4">
        <button type="submit" class="btn btn-3d btn-danger ">Submit</button>
        </div>
</form>
@endforeach
@endsection