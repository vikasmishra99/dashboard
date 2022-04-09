<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response as Res;
use Illuminate\Support\Facades\Response;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //

    public function sign_in(){return view('live.authentication.sign');}

    public function forgot_password(){return view('live.authentication.forgot_password');}

    public function sign_up(){return view('live.authentication.signup');}

    public function terms_of_service(){return view('live.legal.terms-of-service');}

    public function dashboard(){return view('live.index');}

}
