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
            <a href="/driver/create" class="btn ripple-infinite btn-raised btn-success">Driver Baru</a>
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
                        <th><div align="center">Alamat</div></th>
                        <th><div align="center">Telpon</div></th>
                        <th><div align="center">Aksi</div></th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach ($getdriver as $result => $r)
                      <tr>
                        <td><div align="center">{{ $result + $getdriver->firstitem() }}</div></td>
                        <td><div align="left">{{ $r->registerDriver }}</div></td>
                        <td><div align="center">{{ $r->idNumberDriver }}</div></td>
                        <td><div align="left">{{ $r->address }}</div></td>
                        <td><div align="center">{{ $r->phoneNumber }}</div></td>
                        <td>
                            <div align="center"><a href="/driver/edit/{{ $r->id }}" class="badge badge-success">Edit</a>
                            <a href="/pengajuan/delete/{{ $r->id }}" class="badge badge-danger">Delete</a> </div>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                  {{ $getdriver->links()}}
                  </div>
              </div>
            </div>  
          </div>
@endsection