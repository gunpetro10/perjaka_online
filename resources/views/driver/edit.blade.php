@extends('template_backend.home')
@section('sub-judul', 'Edit Driver')
@section('content')

<form method="post" action="/driver/update/{{ $editdriver->id }}">
{{ csrf_field() }}
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail3" class="col-sm-4 col-form-label text-primary">Nama Driver</label>
                <input type="text" class="form-control danger" id="" placeholder="" name="registerDriver" value="{{ $editdriver->registerDriver }}" required>
                
            </div>
            <div class="form-group col-md-6">
                <label for="inputEmail3" class="col-sm-4 col-form-label text-primary">N i k</label>
                <input type="text" class="form-control success" id="" name="idNumberDriver" value="{{ $editdriver->idNumberDriver }}"required>
            </div> 
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail3" class="col-sm-4 col-form-label text-primary">Alamat</label>
                <input type="text" class="form-control default" id="" placeholder="Alamat Lengkap" name="address" value="{{ $editdriver->address }}">
               
            </div>
            <div class="form-group col-md-6">
                <label for="inputEmail3" class="col-sm-4 col-form-label text-primary">No. Telpon</label>
                <input type="text" class="form-control warning" placeholder="Nomor Hp" name="phoneNumber" value="{{ $editdriver->phoneNumber }}">
               
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail3" class="col-sm-4 col-form-label text-primary">Group</label>
                    <select name="grup" class="form-control info">
                        <option value="{{$editdriver->grup}}">{{$editdriver->grup}}</option>
                        <option value="ND">ND</option>
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="C">C</option>
                        <option value="D">D</option>
                    </select>         
            </div>
            <div class="form-group col-md-6">
                <label for="inputEmail3" class="col-sm-4 col-form-label text-primary">Direktorat</label>
                <input type="text" class="form-control success" id="" placeholder="Directorat" name="unitLv0" value="{{ $editdriver->unitLv0 }}">
              
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail3" class="col-sm-6 col-form-label text-primary">Kompartemen</label>
                <input type="text" class="form-control default" id="" placeholder="Kompartemen" name="unitLv1" value="{{ $editdriver->unitLv1 }}">
            </div>
            <div class="form-group col-md-6">
                <label for="inputEmail3" class="col-sm-6 col-form-label text-primary">Departemen</label>
                <input type="text" class="form-control primary @error('tripDescription') is-invalid @enderror" id="" placeholder="" name="unitLv2" value="{{ $editdriver->unitLv2 }}">
                @error('tgl_um') <div class="class invalid-feedback">{{ $message}}</div>@enderror
            </div>
            <div class="form-group col-md-6">
                <label for="inputEmail3" class="col-sm-6 col-form-label text-primary">Bagian</label>
                <input type="text" class="form-control danger @error('follower') is-invalid @enderror" id="" placeholder="" name="unitLv3" value="{{ $editdriver->unitLv3 }}">
                @error('tgl_um') <div class="class invalid-feedback">{{ $message}}</div>@enderror
            </div>
        </div>
        
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail3" class="col-sm-4 col-form-label text-primary">Grade</label>
                <input type="text" class="form-control warning @error('pickUpLocation') is-invalid @enderror" id="" placeholder="Klasifikasi" name="driverClass" value="{{ $editdriver->driverClass }}">
                @error('tgl_um') <div class="class invalid-feedback">{{ $message}}</div>@enderror
            </div>
                <div class="form-group col-md-6">
                <label for="inputEmail3" class="col-sm-4 col-form-label text-primary">Status</label>
                <input type="text" class="form-control info @error('tripDestination') is-invalid @enderror" id="" placeholder="Pengemudi/Kenek" name="driverDescription" value="{{ $editdriver->driverDescription }}">
                @error('nama') <div class="class invalid-feedback">{{ $message}}</div>@enderror
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail3" class="col-sm-4 col-form-label text-primary">Keterangan</label>
                <input type="text" class="form-control success @error('phoneNumber') is-invalid @enderror" id="" placeholder="Isi Aktif" name="driverStatus" value="{{ $editdriver->driverStatus }}">
            </div>
        </div>
        </div>
        </div>
        <div class="form-group col-md-4">
        <button type="submit" class="btn btn-primary ">Submit</button>
        </div>
</form>
@endsection