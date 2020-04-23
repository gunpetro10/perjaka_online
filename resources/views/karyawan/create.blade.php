@extends('template_backend.home')
@section('sub-judul', 'Form Karyawan Baru')
@section('content')
<form method="post" action="/karyawan/store">
{{ csrf_field() }}
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail3" class="col-sm-4 col-form-label text-primary">Nama</label>
                <input type="text" class="form-control danger" id="" placeholder="Nama Person Baru" name="registerKaryawan" required>
                
            </div>
            <div class="form-group col-md-6">
                <label for="inputEmail3" class="col-sm-4 col-form-label text-primary">N i k</label>
                <input type="text" class="form-control success" id="" name="idNumberKaryawan" placeholder="Nomor Induk Karyawan" required>
            </div>
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

        <div class="form-group col-md-6">
                <label for="inputEmail3" class="col-sm-6 col-form-label text-primary">Email</label>
                <input type="email" class="form-control warning @error('follower') is-invalid @enderror" id="" placeholder="Email" name="email">
                @error('tgl_um') <div class="class invalid-feedback">{{ $message}}</div>@enderror
            </div>
        </div>

        <div class="form-group col-md-1">
        <button type="submit" class="btn ripple btn-3d btn-danger">Submit</button>
        </div>
</form>
@endsection