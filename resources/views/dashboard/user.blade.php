@extends('template_backend.home')

@section('content')

<div class="form-group col-md-4">
  @if (auth()->user()->role == 'admin')
  <a href="/pengajuan" class="btn ripple-infinite btn-raised btn-info">Pengajuan</a>
  <a href="/pengajuan/tampilsetuju" class="btn ripple-infinite btn-raised btn-warning">Disetujui</a>
  <a href="/pengajuan/tampilclose" class="btn ripple-infinite btn-raised btn-success">Selesai</a>
  @endif
</div> 
<div class="col-md-12" style="padding:20px;">
                    <div class="col-md-12 padding-0">
                        <div class="col-md-12 padding-0">
                            <div class="col-md-12 padding-0">
                                <div class="col-md-3">
                                    <div class="panel box-v1">
                                      <div class="panel-heading bg-white border-none">
                                        <div class="col-md-6 col-sm-6 col-xs-6 text-left padding-0">
                                          <h4 class="text-left">Pengajuan</h4>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-6 text-right">
                                           <h4>
                                           <span class="icon-user icons icon text-right"></span>
                                           </h4>
                                        </div>
                                      </div>
                                      <div class="panel-body text-center">
                                        <h1>{{$dashboard->where('reqStatus','=','diajukan')->where('ket','=','UM')->count()}}</h1>
                                        <p>Pengajuan Baru</p>
                                        <hr/>
                                      </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="panel box-v1">
                                      <div class="panel-heading bg-white border-none">
                                        <div class="col-md-6 col-sm-6 col-xs-6 text-left padding-0">
                                          <h4 class="text-left">Disetujui</h4>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-6 text-right">
                                           <h4>
                                           <span class="fa fa-car icons icon text-right"></span>
                                           </h4>
                                        </div>
                                      </div>
                                      <div class="panel-body text-center">
                                        <h1>{{$dashboard->where('reqStatus','Disetujui')->count()}}</h1>
                                        <p>Yang Disetujui</p>
                                        <hr/>
                                      </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                  <div class="panel box-v1">
                                    <div class="panel-heading bg-white border-none">
                                      <div class="col-md-6 col-sm-6 col-xs-6 text-left padding-0">
                                        <h4 class="text-left">Selesai</h4>
                                      </div>
                                      <div class="col-md-6 col-sm-6 col-xs-6 text-right">
                                         <h4>
                                         <span class="icon-basket-loaded icons icon text-right"></span>
                                         </h4>
                                      </div>
                                    </div>
                                    <div class="panel-body text-center">
                                      <h1>{{$dashboard->where('reqStatus','Close')->count()}}</h1>
                                      <p>Sudah Terlayani</p>
                                      <hr/>
                                    </div>
                                  </div>
                              </div>
                              <div class="col-md-3">
                                <div class="panel box-v1">
                                  <div class="panel-heading bg-white border-none">
                                    <div class="col-md-6 col-sm-6 col-xs-6 text-left padding-0">
                                      <h4 class="text-left">Total</h4>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-6 text-right">
                                       <h4>
                                       <span class="icon-basket-loaded icons icon text-right"></span>
                                       </h4>
                                    </div>
                                  </div>
                                  <div class="panel-body text-center">
                                    <h1>{{$dashboard->where('reqStatus')->count()}}</h1>
                                    <p>Total Permintaan</p>
                                    <hr/>
                                  </div>
                                </div>
                            </div>
                            </div>           
                        </div>
                    </div>
                </div> 
            </div>
        </div>
@endsection