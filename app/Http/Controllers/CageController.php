<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rabbit;
use App\Models\Cage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

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

    function createcage(Request $req) {
        $cage = new Cage;
        $cage->name = $req->name;
        $cage->eyletCage = $req->eyletcage;
        $cage->clean = $req->cleandate;
        $cage->save();
        return redirect('/cages');
    }

    function deletecage(Request $req){
        DB::table('cages')->where('id', '=', $req->id)->delete();
        return redirect('/cages');
    }
}
