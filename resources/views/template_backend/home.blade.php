<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
  <meta name="csrf-token" content="{{ csrf_token() }}">
	<meta name="description" content="Miminium Admin Template v.1">
	<meta name="keyword" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Miminium</title>
    <!-- start: Css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('asset/css/bootstrap.min.css')}}">
      <!-- plugins -->
      <link rel="stylesheet" type="text/css" href="{{ asset('asset/css/plugins/font-awesome.min.css')}}"/>
      <link rel="stylesheet" type="text/css" href="{{ asset('asset/css/plugins/simple-line-icons.css')}}"/>
      <link rel="stylesheet" type="text/css" href="{{ asset('asset/css/plugins/animate.min.css')}}"/>
      <link rel="stylesheet" type="text/css" href="{{ asset('asset/css/plugins/fullcalendar.min.css')}}"/>
	    <link href="{{ asset('asset/css/style.css')}}" rel="stylesheet">
      <link rel="stylesheet" href="{{asset('jqueryui/jquery-ui.min.css')}}">
	<!-- end: Css -->

	<link rel="shortcut icon" href="{{ asset('asset/img/logomi.png')}}">
  </head>

 <body id="mimin" class="dashboard">
      <!-- start: Header -->
        <nav class="navbar navbar-default header navbar-fixed-top">
          <div class="col-md-12 nav-wrapper">
            <div class="navbar-header" style="width:100%;">
              <div class="opener-left-menu is-open">
                <span class="top"></span>
                <span class="middle"></span>
                <span class="bottom"></span>
              </div>
                <a href="index.html" class="navbar-brand"> 
                 <b>Perjaka</b>
                </a>

              <ul class="nav navbar-nav search-nav">
                <li>
                   <div class="search">
                    <span class="fa fa-search icon-search" style="font-size:23px;"></span>
                    <div class="form-group form-animate-text">
                      <input type="text" class="form-text" required>
                      <span class="bar"></span>
                      <label class="label-search">Type anywhere to <b>Search</b> </label>
                    </div>
                  </div>
                </li>
              </ul>

              <ul class="nav navbar-nav navbar-right user-nav">
                <li class="user-name"><span>{{auth()->user()->name}}</span></li>
                  <li class="dropdown avatar-dropdown">
                   <img src="{{ asset('asset/img/avatar.jpg')}}" class="img-circle avatar" alt="user name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"/>
                   <ul class="dropdown-menu user-dropdown">
                     <li><a href="/logout"><span class="icons icon-logout"></span> Log Out</a></li>
                     <li role="separator" class="divider"></li>
                     <li class="more">
                      <ul>
                        <li><a href=""><span class="fa fa-cogs"></span></a></li>
                        <li><a href=""><span class="fa fa-lock"></span></a></li>
                        <li><a href=""><span class="fa fa-power-off "></span></a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li ><span >&nbsp;&nbsp;&nbsp;</span></li>
              </ul>
            </div>
          </div>
        </nav>
      <!-- end: Header -->
@include('template_backend.sidebar')

<!-- start: content -->
<div id="content">
  <div class="panel">
      <div class="panel-body">
          <div class="col-md-6 col-sm-12">
            <h3 class="animated fadeInLeft">@yield('sub-judul')</h3>
        </div>
        <div class="col-md-6 col-sm-12">                  
        </div>
      </div>                    
  </div>

  <div class="col-md-12" style="padding:0px;">
      <section class="section">
        <div class="section-body">
        @yield('content')
        </div>
      </section>
  </div>
<!-- end: content -->

<!-- Main Content -->
<!-- <div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>@yield('sub-judul')</h1>
    </div>
    @yield('content')
    <div class="section-body">
    </div>
  </section>
</div> -->
@include('template_backend.mobile')
@include('template_backend.footer')