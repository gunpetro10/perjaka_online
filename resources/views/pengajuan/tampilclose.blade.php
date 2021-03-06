@extends('template_backend.home')
@section('sub-judul', 'Data Close')
@section('content')

<form action="/pengajuan/cariclose" method="get">
        <div class="form-group col-md-8">
            <input type="text" name="key" id="" class="form-control" placeholder="Panggil No. IdBooking">
        </div>
        <div class="form-group col-md-4">
            <button type="submit" class="btn btn-primary">Cari</button>
            <button type="reset" class="btn btn-primary" onclick="window.location.href='/pengajuan/tampilclose'">Reset</button>
            <a href="/dashboard" class="btn ripple-infinite btn-raised btn-success">Dashboard</a>
        </div> 
</form>
            <div class="col-md-12 top-7 padding-0">
              <div class="col-md-12">
                <div class="panel">
                  <div class="panel-body">
                  <div class="table-reponsive">
                    <table class="table table-striped table-bordered" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <th><div align="center">No</div></th>
                        <th><div align="center">Id Booking</div></th>
                        <th><div align="center">Pemohon</div></th>
                        <th><div align="center">Bagian</div></th>
                        <th><div align="center">Tgl Berangkat</div></th>
                        <th><div align="center">Jam</div></th>
                        <th><div align="center">Tgl Datang</div></th>
                        <th><div align="center">Keperluan</div></th>
                        <th><div align="center">StandBy</div></th>
                        <th><div align="center">Driver</div></th>
                        <th><div align="center">Nopol</div></th>
                        <th><div align="center">Odo Berangkat</div></th>
                        <th><div align="center">Odo Datang</div></th>
                        <th><div align="center">Aksi</div></th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach ($getsetuju as $result => $r)
                      <tr>
                        <td><div align="center">{{ $result + $getsetuju->firstitem() }}</div></td>
                        <td><div align="center">{{ $r->bookNumber }}</td>
                        <td><div align="left">{{ $r->registerKaryawan }}</div></td>
                        <td><div align="left">{{ $r->unitLv3 }}</div></td>
                        <td><div align="center">{{ $r->tripStart }}</div></td>
                        <td><div align="center">{{ $r->timeStart }}</div></td>
                        <td><div align="center">{{ $r->tgl_close }}</div></td>
                        <td><div align="left">{{ $r->tripDescription }}</div></td>
                        <td><div align="left">{{ $r->pickUpLocation}}</div></td>
                        <td><div align="left">{{ $r->registerDriver}}</div></td>
                        <td><div align="center">{{ $r->registerNumber0}}</div></td>
                        <td><div align="center">{{ $r->oddoStart}}</div></td>
                        <td><div align="center">{{ $r->oddoEnd}}</div></td>
                        <td>
                            <div align="center"><a href="/pengajuan/rubahoddo/{{ $r->id }}" class="badge badge-success">Edit</a>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                  {{ $getsetuju->links()}}
                  </div>
              </div>
            </div>  
          </div>
          <div class="form-group col-md-4">
            <a href="/pengajuan" class="btn ripple-infinite btn-raised btn-info">Pengajuan</a>
            <a href="/pengajuan/tampilsetuju" class="btn ripple-infinite btn-raised btn-warning">Disetujui</a>
            <a href="/pengajuan/tampilclose" class="btn ripple-infinite btn-raised btn-success">Selesai</a>
          </div> 
@endsection