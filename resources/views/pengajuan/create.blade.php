@extends('template_backend.home')
@section('sub-judul', 'Form Permohonan')
@section('content')
<form method="post" action="/pengajuan/store">
{{ csrf_field() }}
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail3" class="col-sm-4 col-form-label text-primary">Nama Pemohon</label>
                <input type="text" class="form-control danger @error('registerKaryawan') is-invalid @enderror" id="registerKaryawan" placeholder="" name="registerKaryawan">
                
            </div>
            <div class="form-group col-md-6">
                <label for="inputEmail3" class="col-sm-4 col-form-label text-primary">N i k</label>
                <input type="text" class="form-control success @error('idNumberKaryawan') is-invalid @enderror" id="idNumberKaryawan" name="idNumberKaryawan" readonly>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail3" class="col-sm-4 col-form-label text-primary">Tanggal Berangkat</label>
                <input type="date" class="form-control default @error('tripStart') is-invalid @enderror" id="" placeholder="" name="tripStart">
               
            </div>
            <div class="form-group col-md-6">
                <label for="inputEmail3" class="col-sm-4 col-form-label text-primary">Jam</label>
                <input type="time" class="form-control warning @error('timeStart') is-invalid @enderror" placeholder="" name="timeStart">
               
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail3" class="col-sm-4 col-form-label text-primary">Tanggal Selesai</label>
                <input type="date" class="form-control info @error('tripEnd') is-invalid @enderror" id="" placeholder="" name="tripEnd">
         
            </div>
            <div class="form-group col-md-6">
                <label for="inputEmail3" class="col-sm-4 col-form-label text-primary">Jam</label>
                <input type="time" class="form-control success @error('timeEnd') is-invalid @enderror" id="" placeholder="" name="timeEnd">
              
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail3" class="col-sm-6 col-form-label text-primary">Jenis Kenadaraan</label>
                    <select name="vehicleCategory" class="form-control success">
                        <option value="">Pilih Jenis Kendaraan</option>
                        <option value="Sedan">Sedan</option>
                        <option value="Station">Station</option>
                        <option value="Pickup">Pick up</option>
                    </select>
            </div>
            <div class="form-group col-md-6">
                <label for="inputEmail3" class="col-sm-6 col-form-label text-primary">Kategory</label>
                    <select name="tripType0" class="form-control default">
                        <option value="">Pilih Kategory</option>
                        <option value="Dinas">Dinas</option>
                        <option value="NonDinas">Non Dinas</option>
                    </select>
            </div>

            <div class="form-group col-md-6">
                <label for="inputEmail3" class="col-sm-6 col-form-label text-primary">Keperluan</label>
                <input type="text" class="form-control danger @error('tripDescription') is-invalid @enderror" id="" placeholder="" name="tripDescription">
                @error('tgl_um') <div class="class invalid-feedback">{{ $message}}</div>@enderror
            </div>
            <div class="form-group col-md-6">
                <label for="inputEmail3" class="col-sm-6 col-form-label text-primary">Jumlah Pengikut</label>
                <input type="text" class="form-control primary @error('follower') is-invalid @enderror" id="" placeholder="" name="follower">
                @error('tgl_um') <div class="class invalid-feedback">{{ $message}}</div>@enderror
            </div>
        </div>
        
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail3" class="col-sm-4 col-form-label text-primary">Standby</label>
                <input type="text" class="form-control primary @error('pickUpLocation') is-invalid @enderror" id="" placeholder="" name="pickUpLocation">
                @error('tgl_um') <div class="class invalid-feedback">{{ $message}}</div>@enderror
            </div>
                <div class="form-group col-md-6">
                <label for="inputEmail3" class="col-sm-4 col-form-label text-primary">Tujuan</label>
                <input type="text" class="form-control danger @error('tripDestination') is-invalid @enderror" id="nama" placeholder="" name="tripDestination">
                @error('nama') <div class="class invalid-feedback">{{ $message}}</div>@enderror
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="inputEmail3" class="col-sm-4 col-form-label text-primary">No. telpon</label>
                <input type="text" class="form-control warning @error('phoneNumber') is-invalid @enderror" id="" placeholder="" name="phoneNumber">
                @error('phoneNumber') <div class="class invalid-feedback">{{ $message}}</div>@enderror
            </div>

        <div hidden class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail3" class="col-sm-4 col-form-label text-primary">Directorat</label>
                <input type="text" class="form-control @error('unitLv0') is-invalid @enderror" id="unitLv0" placeholder="" name="unitLv0">
                @error('tgl_um') <div class="class invalid-feedback">{{ $message}}</div>@enderror
            </div>
                <div class="form-group col-md-6">
                <label for="inputEmail3" class="col-sm-4 col-form-label text-primary">Kompartemen</label>
                <input type="text" class="form-control @error('unitLv1') is-invalid @enderror" id="unitLv1" placeholder="" name="unitLv1">
                @error('nama') <div class="class invalid-feedback">{{ $message}}</div>@enderror
            </div>
        </div>

        <div hidden class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail3" class="col-sm-4 col-form-label text-primary">Departemen</label>
                <input type="text" class="form-control @error('unitLv2') is-invalid @enderror" id="unitLv2" placeholder="" name="unitLv2">
                @error('tgl_um') <div class="class invalid-feedback">{{ $message}}</div>@enderror
            </div>
                <div class="form-group col-md-6">
                <label for="inputEmail3" class="col-sm-4 col-form-label text-primary">Bagian</label>
                <input type="text" class="form-control @error('unitLv3') is-invalid @enderror" id="unitLv3" placeholder="" name="unitLv3">
                @error('nama') <div class="class invalid-feedback">{{ $message}}</div>@enderror
            </div>
        </div>
        </div>
        </div>
        <div class="form-group col-md-4">
        <button type="submit" class="btn btn-raised btn-danger">Submit</button>
        </div>
</form>
@endsection