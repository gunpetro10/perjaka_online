@extends('template_backend.home')
@section('sub-judul', 'Data Driver')
@section('content')

<form action="/driver/cari" method="get">
        <div class="form-group col-md-7">
            <input type="text" name="key" id="" class="form-control" placeholder="Panggil Nama">
        </div>
        <div class="form-group col-md-4">
            <button type="submit" class="btn ripple-infinite btn-raised btn-warning">Cari</button>
            <button type="reset" class="btn ripple-infinite btn-raised btn-primary" onclick="window.location.href='/driver'">Reset</button>
            <a href="/karyawan/create" class="btn ripple-infinite btn-raised btn-success">Person Baru</a>
        </div> 
</form>
            <div class="col-md-12 top-7 padding-0">
              <div class="col-md-10">
                <div class="panel">
                  <div class="panel-body">
                  <div class="responsive-table">
                    <table class="table table-striped table-bordered" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <th><div align="center">No</div></th>
                        <th><div align="center">Nama</div></th>
                        <th><div align="center">N i k</div></th>
                        <th><div align="center">Direktorat</div></th>
                        <th><div align="center">Kompartemen</div></th>
                        <th><div align="center">Departemen</div></th>
                        <th><div align="center">Bagian</div></th>
                        <th><div align="center">Aksi</div></th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach ($karyawan as $result => $r)
                      <tr>
                        <td><div align="center">{{ $result + $karyawan->firstitem() }}</div></td>
                        <td><div align="left">{{ $r->registerKaryawan }}</div></td>
                        <td><div align="center">{{ $r->idNumberKaryawan }}</div></td>
                        <td><div align="left">{{ $r->unitLv0 }}</div></td>
                        <td><div align="center">{{ $r->unitLv1 }}</div></td>
                        <td><div align="center">{{ $r->unitLv2 }}</div></td>
                        <td><div align="center">{{ $r->unitLv3 }}</div></td>
                        <td>
                            <div align="center"><a href="#" class="badge badge-success">Edit</a>
                            <a href="/karyawan/delete/{{ $r->idNumberKaryawan }}" class="badge badge-danger">Delete</a> </div>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                  {{ $karyawan->links()}}
                  </div>
              </div>
            </div>  
          </div>
@endsection