<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rabbit;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class RabbitController extends Controller
{
    //
    function index(Request $req)
    {
        if ($req->session()->has('user')) {
            $data = Rabbit::all();
            return view('rabbit',['rabbits'=>$data]);
        }else{
            return redirect('login');
        }
        
    }

    function details($id)
    {
        $data = Rabbit::find($id);
        Session::flash('flash', 'Messege info');
        return view('detail',['rabbit'=>$data]);
    }

    function allrabbits(Request $req)
    {
        if ($req->session()->has('user')) {
            $data = Rabbit::all();

            if ($req->session()->get('user')['name'] === 'Tomasz Siemek') {
                error_log('zgadza sie');
            }else{
                error_log('brak');
            }

            return view('allrabbits',['rabbits'=>$data]);
        }else{
            return redirect('login');
        }
    }

    function search(Request $req)
    {
        $data= Rabbit::
        where('name', 'like', '%'.$req->input('query').'%')
        ->get();
        return view('search',['rabbits'=>$data]);
    }

    function creatnewrabbit(Request $req)
    {
        error_log("sda");
        $rabbit = new Rabbit;
        $rabbit->name=$req->name;
        $rabbit->born=$req->born;
        $rabbit->gender=$req->gender;
        $rabbit->photo=$req->file('photo')->get();
        error_log("zmiana");
        $rabbit->save();
        return redirect('/');
    }
}
