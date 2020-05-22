<div class="col-md-12 top-7 padding-0">
    <div class="col-md-12">
      <div class="panel">
        <div class="panel-body">
        <div class="responsive-table">
          <table class="table table-striped table-bordered" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>No</th>
              <th>Id Booking</th>
              <th>Pemohon</th>
              <th>Bagian</th>
              <th>Tgl Berangkat</th>
              <th>Tgl Close</th>
              <th>Keperluan</th>
              <th>StandBy</th>
              <th>Driver</th>
              <th>Nopol</th>
            </tr>
          </thead>
          <tbody>
          @foreach ($aktifitas as $result => $r)
            <tr>
              <td>{{ $r->bookNumber }}</td>
              <td>{{ $r->registerKaryawan }}</td>
              <td>{{ $r->unitLv3 }}</td>
              <td>{{ $r->tripStart }}</td>
              <td>{{ $r->tgl_close }}</td>
              <td>{{ $r->tripDescription }}</td>
              <td>{{ $r->pickUpLocation}}</td>
              <td>{{ $r->registerDriver}}</td>
              <td>{{ $r->registerNumber0}}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
        
        </div>
    </div>
  </div>  
</div>