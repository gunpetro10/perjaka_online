@extends('template_backend.home')
@section('sub-judul', 'Data Kendaraan')
@section('content')

@if(auth()->user()->role == 'admin')
<form action="/kendaraan/carikend" method="get">
        <div class="form-group col-md-8">
            <input type="text" name="key" id="" class="form-control" placeholder="Panggil Nopol">
        </div>
        <div class="form-group col-md-4">
            <button type="submit" class="btn ripple-infinite btn-raised btn-warning">Cari</button>
            <button type="reset" class="btn ripple-infinite btn-raised btn-primary" onclick="window.location.href='/kendaraan'">Reset</button>
            <a href="/kendaraan/create" class="btn ripple-infinite btn-raised btn-success">Kendaraan Baru</a>
        </div> 
</form>
            <div class="col-md-12 top-7 padding-0">
              <div class="col-md-11">
                <div class="panel">
                  <div class="panel-body">
                  <div class="responsive-table">
                      
                    <table class="table table-striped table-bordered" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <th><div align="center">No</div></th>
                        <th><div align="center">Nopol</div></th>
                        <th><div align="center">Merk_kend</div></th>
                        <th><div align="center">Jenis</div></th>
                        <th><div align="center">No. Mesin</div></th>
                        <th><div align="center">No.Rangka</div></th>
                        <th><div align="center">Tahun</div></th>
                        <th><div align="center">Keterangan</div></th>
                        <th><div align="center">Aksi</div></th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach ($getkend as $result => $r)
                      <tr>
                        <td><div align="center">{{ $result + $getkend->firstitem() }}</div></td>
                        <td><div align="center">{{ $r->registerNumber0 }}</td>
                        <td><div align="left">{{ $r->vehicleBrand }}</div></td>
                        <td><div align="center">{{ $r->vehicleCategory }}</div></td>
                        <td><div align="left">{{ $r->engineNumber }}</div></td>
                        <td><div align="left">{{ $r->chassisNumber }}</div></td>
                        <td><div align="center">{{ $r->vehicleYear }}</div></td>
                        <td><div align="center">{{ $r->vehicleStatus }}</div></td>
                        <td>
                            <div align="center"><a href="/kendaraan/edit/{{ $r->id }}" class="badge badge-success">Edit</a>
                              <a href="/getkend/delete/{{ $r->id }}" class="badge badge-danger">Delete</a> </div></td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                  {{ $getkend->links()}}
                  </div>
              </div>
            </div>  
          </div>
@endif
@endsection

    
    