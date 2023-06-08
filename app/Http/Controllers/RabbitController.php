<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rabbit;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\RedirectResponse;

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
        try{
        $rabbit = new Rabbit;
        $rabbit->name=$req->name;
        $rabbit->born=$req->born;
        $rabbit->gender=$req->gender;
        if ($req->hasFile('photo')) {
            $rabbit->photo = $req->file('photo')->get();
        }
        $rabbit->save();
        return redirect('/');
        } catch(Exception $req){
            return redirect('/')->with('success','Błąd dodawania');
        }
    }

    function deleterabbit($id)
    {
        DB::table('rabbits')->where('id', '=', $id)->delete();
        return redirect('/allrabbits');
    }
}
