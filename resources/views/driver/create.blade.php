@extends('template_backend.home')
@section('sub-judul', 'Form Driver Baru')
@section('content')
<form method="post" action="/driver/store">
{{ csrf_field() }}
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail3" class="col-sm-4 col-form-label text-primary">Nama Driver</label>
                <input type="text" class="form-control danger" id="" placeholder="Isi Driver Baru" name="registerDriver" required>
                
            </div>
            <div class="form-group col-md-6">
                <label for="inputEmail3" class="col-sm-4 col-form-label text-primary">N i k</label>
                <input type="text" class="form-control success" id="" name="idNumberDriver" required>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail3" class="col-sm-4 col-form-label text-primary">Alamat</label>
                <input type="text" class="form-control default" id="" placeholder="Alamat Lengkap" name="address">
               
            </div>
            <div class="form-group col-md-6">
                <label for="inputEmail3" class="col-sm-4 col-form-label text-primary">No. Telpon</label>
                <input type="text" class="form-control warning" placeholder="Nomor Hp" name="phoneNumber">
               
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail3" class="col-sm-4 col-form-label text-primary">Group</label>
                    <select name="grup" class="form-control info">
                        <option value="">Pilih Group</option>
                        <option value="ND">ND</option>
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="C">C</option>
                        <option value="D">D</option>
                    </select>         
            </div>
            <div class="form-group col-md-6">
                <label for="inputEmail3" class="col-sm-4 col-form-label text-primary">Direktorat</label>
                <input type="text" class="form-control success" id="" placeholder="Directorat" name="unitLv0">
              
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail3" class="col-sm-6 col-form-label text-primary">Kompartemen</label>
                <input type="text" class="form-control default" id="" placeholder="Kompartemen" name="unitLv1">
            </div>
            <div class="form-group col-md-6">
                <label for="inputEmail3" class="col-sm-6 col-form-label text-primary">Departemen</label>
                <input type="text" class="form-control danger @error('tripDescription') is-invalid @enderror" id="" placeholder="Departemen" name="unitLv2">
                @error('tgl_um') <div class="class invalid-feedback">{{ $message}}</div>@enderror
            </div>
            <div class="form-group col-md-6">
                <label for="inputEmail3" class="col-sm-6 col-form-label text-primary">Bagian</label>
                <input type="text" class="form-control warning @error('follower') is-invalid @enderror" id="" placeholder="Bagian" name="unitLv3">
                @error('tgl_um') <div class="class invalid-feedback">{{ $message}}</div>@enderror
            </div>
        </div>
        
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail3" class="col-sm-4 col-form-label text-primary">Grade</label>
                <input type="text" class="form-control success @error('pickUpLocation') is-invalid @enderror" id="" placeholder="Klasifikasi" name="driverClass">
                @error('tgl_um') <div class="class invalid-feedback">{{ $message}}</div>@enderror
            </div>
                <div class="form-group col-md-6">
                <label for="inputEmail3" class="col-sm-4 col-form-label text-primary">Status</label>
                <input type="text" class="form-control default @error('tripDestination') is-invalid @enderror" id="" placeholder="Pengemudi/Kenek" name="driverDescription">
                @error('nama') <div class="class invalid-feedback">{{ $message}}</div>@enderror
            </div>
        </div>
        </div>
        </div>
        <div class="form-group col-md-1">
        <button type="submit" class="btn ripple btn-3d btn-danger">Submit</button>
        </div>
</form>
@endsection