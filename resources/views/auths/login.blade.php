
<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="description" content="Miminium Admin Template v.1">
  <meta name="author" content="Isna Nur Azis">
  <meta name="keyword" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Miminium</title>

  <!-- start: Css -->
  <link rel="stylesheet" type="text/css" href="asset/css/bootstrap.min.css">

  <!-- plugins -->
  <link rel="stylesheet" type="text/css" href="asset/css/plugins/font-awesome.min.css"/>
  <link rel="stylesheet" type="text/css" href="asset/css/plugins/simple-line-icons.css"/>
  <link rel="stylesheet" type="text/css" href="asset/css/plugins/animate.min.css"/>
  <link rel="stylesheet" type="text/css" href="asset/css/plugins/icheck/skins/flat/aero.css"/>
  <link href="asset/css/style.css" rel="stylesheet">
  <!-- end: Css -->

  <link rel="shortcut icon" href="asset/img/logomi.png">
  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
    
</head>

    <body id="mimin" class="dashboard form-signin-wrapper">

      <div class="container">

        <form class="form-signin" action="postlogin" method="POST">
            {{csrf_field()}}
          <div class="panel periodic-login">
              <span class="atomic-number">28</span>
              <div class="panel-body text-center">
                  <h1 class="atomic-symbol">WG</h1>
                  <p class="atomic-mass">Dep. Yanum</p>
                  <p class="element-name">Transport</p>

                  <i class="icons icon-arrow-down"></i>
                  <div class="form-group form-animate-text" style="margin-top:40px !important;">
                    <input name="email" type="email" class="form-text" required>
                    <span class="bar"></span>
                    <label>Email</label>
                  </div>
                  <div class="form-group form-animate-text" style="margin-top:40px !important;">
                    <input name="password" type="password" class="form-text" required>
                    <span class="bar"></span>
                    <label>Password</label>
                  </div>
                  <label class="pull-left">
                  <input type="checkbox" class="icheck pull-left" name="checkbox1"/> Remember me
                  </label>
                  <input type="submit" class="btn col-md-12"/>
              </div>
              <div class="text-center" style="padding:1px;">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                      Regristrasi
                    </button>
                </div> 
         </div>
        </form>
      </div>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Form Regristrasi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <form method="post" action="/login/store">
              {{csrf_field()}}
                <div class="modal-body">
                  <div class="form-group">
                    <label for="formGroupExampleInput2">Nama</label>
                    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Nama Person Baru" name="registerKaryawan" required>
                  </div>
                  <div class="form-group">
                    <label for="formGroupExampleInput">N I K</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" name="idNumberKaryawan" placeholder="Nomor Induk Karyawan" required>
                  </div>
                  <div class="form-group">
                    <label for="formGroupExampleInput">Email</label>
                    <input type="email" class="form-control" id="formGroupExampleInput" name="email" placeholder="Email" required>
                  </div>
                  <div class="form-group">
                    <label for="formGroupExampleInput2">Deroktirat</label>
                    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Directorat" name="unitLv0" required>
                  </div>
                  <div class="form-group">
                    <label for="formGroupExampleInput">Kompartemen</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Kompartemen" name="unitLv1" required>
                  </div>
                  <div class="form-group">
                    <label for="formGroupExampleInput2">Departemen</label>
                    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Departemen" name="unitLv2" required>
                  </div>
                  <div class="form-group">
                    <label for="formGroupExampleInput2">Bagian</label>
                    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Bagian" name="unitLv3" required>
                  </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
              </form>
                </div>
            </div>
          </div>
        </div>
      <!-- end: Content -->
      <!-- start: Javascript -->
      <script src="asset/js/jquery.min.js"></script>
      <script src="asset/js/jquery.ui.min.js"></script>
      <script src="asset/js/bootstrap.min.js"></script>

      <script src="asset/js/plugins/moment.min.js"></script>
      <script src="asset/js/plugins/icheck.min.js"></script>

      <!-- custom -->
      <script src="asset/js/main.js"></script>
      <script type="text/javascript">
       $(document).ready(function(){
         $('input').iCheck({
          checkboxClass: 'icheckbox_flat-aero',
          radioClass: 'iradio_flat-aero'
        });
       });
     </script>
     <!-- end: Javascript -->
   </body>
   </html>