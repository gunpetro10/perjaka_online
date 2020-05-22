@extends('template_backend.home')
@section('sub-judul', 'Laporan')
@section('content')

<form action="/laporan/laporan" method="get" enctype="multipart/form-data">
  <div class="form-row">
    <div class="form-group col-md-3">
      
        <input type="date" name="awal" id="" class="form-control" placeholder="Tanggal Awal">
        <div class="valid-feedback">
         Tanggal Awal
        </div>
    </div>
    <div class="form-group col-md-3">
     
      <input type="date" name="akhir" id="" class="form-control" placeholder="Tanggal Akhir">
      <div class="valid-feedback">
        Tanggal Akhir
      </div>
    </div>
    <div class="form-group col-md-4">
        <button type="submit" class="btn btn-primary">Cari</button>
        <button type="reset" class="btn btn-primary" onclick="window.location.href='/laporan/tampil'">Reset</button>
    </div> 
  </div>
</form>
            <div class="col-md-12 top-7 padding-0">
              <div class="col-md-12">
                <div class="panel">
                  <div class="panel-body">
                  <div class="responsive-table">
                    <table class="table table-striped table-bordered" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <th><div align="center">No</div></th>
                        <th><div align="center">Id Booking</div></th>
                        <th><div align="center">Pemohon</div></th>
                        <th><div align="center">Bagian</div></th>
                        <th><div align="center">Tgl Berangkat</div></th>
                        <th><div align="center">Tgl Close</div></th>
                        <th><div align="center">Keperluan</div></th>
                        <th><div align="center">StandBy</div></th>
                        <th><div align="center">Driver</div></th>
                        <th><div align="center">Nopol</div></th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach ($aktifitas as $result => $r)
                      <tr>
                        <td><div align="center">{{ $result + $aktifitas->firstitem() }}</div></td>
                        <td><div align="center">{{ $r->bookNumber }}</td>
                        <td><div align="left">{{ $r->registerKaryawan }}</div></td>
                        <td><div align="left">{{ $r->unitLv3 }}</div></td>
                        <td><div align="center">{{ $r->tripStart }}</div></td>
                        <td><div align="center">{{ $r->tgl_close }}</div></td>
                        <td><div align="left">{{ $r->tripDescription }}</div></td>
                        <td><div align="left">{{ $r->pickUpLocation}}</div></td>
                        <td><div align="left">{{ $r->registerDriver}}</div></td>
                        <td><div align="center">{{ $r->registerNumber0}}</div></td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                  {{ $aktifitas->links()}}
                  </div>
              </div>
            </div>  
          </div>
          <div class="form-group col-md-4">
            @if (auth()->user()->role == 'admin')
              @if (isset($awal) && isset($akhir))
              <a href="/laporan/preview/{{$awal}}/{{$akhir}}" class="btn ripple-infinite btn-raised btn-info target="_BLANK">Print</a>
              @endif
            @endif
          </div> 
@endsection