<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class home_controller extends Controller
{
    public function index(){
    return view ('home');   
    }
    public function tampil_data(){
    return view('tampil');
    }
    public function simpan(Request $request){
    $data=[
        "email" => $request -> email, 
        "password" => $request -> password
    ];
    return view('tampil',["data"=>$data]);
    }
    public function get_user($nama, $jurusan){
    $data=[
        "nama" => $nama,
        "jurusan" => $jurusan
    ];
    return view('user',["data"=>$data]);
    }

}
