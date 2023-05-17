<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rabbit;
use App\Models\Cage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CageController extends Controller
{
    function index(Request $req) {
        if ($req->session()->has('user')) {
            $data = Cage::all();
            return view('cages',['cages'=>$data]);
        }else{
            return redirect('login');
        }
    }
}