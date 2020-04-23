@extends('template_backend.home')
@section('sub-judul', 'Story Pemakaian Kendaraan')
@section('content')

<form action="/laporan/nopol" method="get">
        <div class="form-group col-md-8">
            <input type="text" name="key" id="" class="form-control" placeholder="Panggil Nopol">
        </div>
        <div class="form-group col-md-4">
            <button type="submit" class="btn btn-primary">Cari</button>
            <button type="reset" class="btn btn-primary" onclick="window.location.href='/laporan/nopol'">Reset</button>
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
                        <th><div align="center">Nopol</div></th>
                        <th><div align="center">No</div></th>
                        <th><div align="center">Id Booking</div></th>
                        <th><div align="center">Tgl. Entry</div></th>
                        <th><div align="center">Pemohon</div></th>
                        <th><div align="center">Bagian</div></th>
                        <th><div align="center">Tgl Berangkat</div></th>
                        <th><div align="center">Tgl Close</div></th>
                        <th><div align="center">Keperluan</div></th>
                        <th><div align="center">Kategory</div></th>
                        <th><div align="center">Driver</div></th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach ($aktifitas as $result => $r)
                      <tr>
                        <td><div align="center">{{ $result + $aktifitas->firstitem() }}</div></td>
                        <td><div align="center">{{ $r->registerNumber0}}</div></td>
                        <td><div align="center">{{ $r->bookNumber }}</td>
                        <td><div align="center">{{ $r->requestDate }}</td>
                        <td><div align="left">{{ $r->registerKaryawan }}</div></td>
                        <td><div align="left">{{ $r->unitLv3 }}</div></td>
                        <td><div align="center">{{ $r->tripStart }}</div></td>
                        <td><div align="center">{{ $r->tgl_close }}</div></td>
                        <td><div align="left">{{ $r->tripDescription }}</div></td>
                        <td><div align="left">{{ $r->tripType0}}</div></td>
                        <td><div align="left">{{ $r->registerDriver}}</div></td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                  {{ $aktifitas->links()}}
                  </div>
              </div>
            </div>  
          </div>
@endsection