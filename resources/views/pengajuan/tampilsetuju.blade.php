@extends('template_backend.home')
@section('sub-judul', 'Persetujuan')
@section('content')

<form action="/pengajuan/cari1" method="get">
        <div class="form-group col-md-8">
            <input type="text" name="key" id="" class="form-control" placeholder="Panggil No. IdBooking">
        </div>
        <div class="form-group col-md-4">
            <button type="submit" class="btn ripple-infinite btn-raised btn-warning">Cari</button>
            <button type="reset" class="btn ripple-infinite btn-raised btn-primary" onclick="window.location.href='/pengajuan/tampilsetuju'">Reset</button>
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
                        <th><div align="center">Bagian</div></th>
                        <th><div align="center">Tgl Berangkat</div></th>
                        <th><div align="center">Jam</div></th>
                        <th><div align="center">Keperluan</div></th>
                        <th><div align="center">StandBy</div></th>
                        <th><div align="center">Driver</div></th>
                        <th><div align="center">Nopol</div></th>
                        <th><div align="center">Aksi</div></th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach ($getsetuju as $result => $r)
                      <tr>
                        <td><div align="center">{{ $result + $getsetuju->firstitem() }}</div></td>
                        <td><div align="center">{{ $r->bookNumber }}</td>
                        <td><div align="left">{{ $r->registerKaryawan }}</div></td>
                        <td><div align="left">{{ $r->unitLv2 }}</div></td>
                        <td><div align="center">{{ $r->tripStart }}</div></td>
                        <td><div align="center">{{ $r->timeStart }}</div></td>
                        <td><div align="left">{{ $r->tripDescription }}</div></td>
                        <td><div align="left">{{ $r->pickUpLocation}}</div></td>
                        <td><div align="left">{{ $r->registerDriver}}</div></td>
                        <td><div align="center">{{ $r->registerNumber0}}</div></td>
                        <td>
                            <div align="center"><a href="/pengajuan/rubahkend/{{ $r->id }}" class="badge badge-success">Edit</a>
                            <a href="/pengajuan/preview/{{ $r->id }}" class="badge badge-warning" target="_BLANK">Print</a>
                            <a href="/pengajuan/close/{{ $r->id }}" class="badge badge-success">Close</a>
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
@endsection