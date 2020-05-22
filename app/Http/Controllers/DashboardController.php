<?php

namespace App\Http\Controllers;
use App\Maskenonline;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
   public function index()
   {
    $dashboard = Maskenonline::all();   
    return view('dashboard.index', ['dashboard' => $dashboard,]);
   }

   public function user()
   {
    $dashboard = Maskenonline::all();   
    return view('dashboard.user', ['dashboard' => $dashboard,]);
   }
}
