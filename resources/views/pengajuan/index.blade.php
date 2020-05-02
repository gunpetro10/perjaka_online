@extends('template_backend.home')
@section('sub-judul', 'Data Pengajuan')
@section('content')

<form action="/pengajuan/cari" method="get">
        <div class="form-group col-md-8">
            <input type="text" name="key" id="" class="form-control" placeholder="Panggil No. IdBooking">
        </div>
        <div class="form-group col-md-4">
            <button type="submit" class="btn ripple-infinite btn-raised btn-warning">Cari</button>
            <button type="reset" class="btn ripple-infinite btn-raised btn-primary" onclick="window.location.href='/pengajuan'">Reset</button>
        </div> 
</form>
            <div class="col-md-12 top-7 padding-0">
              <div class="col-md-12">
                <div class="panel">
                  <div class="panel-body">
                  <div class="table-responsive">
                    <table class="table table-striped table-bordered" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <th><div align="center">No</div></th>
                        <th><div align="center">Id Booking</div></th>
                        <th><div align="center">Pemohon</div></th>
                        <th><div align="center">N i k</div></th>
                        <th><div align="center">Directorat</div></th>
                        <th><div align="center">Kompartemen</div></th>
                        <th><div align="center">Tgl Berangkat</div></th>
                        <th><div align="center">Jam</div></th>
                        <th><div align="center">Keperluan</div></th>
                        <th><div align="center">StandBy</div></th>
                        <th><div align="center">No. Telpon</div></th>
                        <th><div align="center">Aksi</div></th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach ($maskenonline as $result => $r)
                      <tr>
                        <td><div align="center">{{ $result + $maskenonline->firstitem() }}</div></td>
                        <td><div align="center">{{ $r->bookNumber }}</td>
                        <td><div align="left">{{ $r->registerKaryawan }}</div></td>
                        <td><div align="center">{{ $r->idNumberKaryawan }}</div></td>
                        <td><div align="left">{{ $r->unitLv0 }}</div></td>
                        <td><div align="center">{{ $r->unitLv1 }}</div></td>
                        <td><div align="center">{{ $r->tripStart }}</div></td>
                        <td><div align="center">{{ $r->timeStart }}</div></td>
                        <td><div align="left">{{ $r->tripDescription }}</div></td>
                        <td><div align="left">{{ $r->pickUpLocation}}</div></td>
                        <td><div align="left">{{ $r->phoneNumber}}</div></td>
                        <td>
                            <div align="center"><a href="/pengajuan/edit/{{ $r->id }}" class="badge badge-success">Edit</a>
                            @if (auth()->user()->role == 'admin')
                            <a href="/pengajuan/setuju/{{ $r->id }}" class="badge badge-success">Setuju</a>
                            @endif
                            <a href="/pengajuan/delete/{{ $r->id }}" class="badge badge-danger">Delete</a></div>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                  {{ $maskenonline->links()}}
                  </div>
              </div>
            </div>  
          </div>
@endsection