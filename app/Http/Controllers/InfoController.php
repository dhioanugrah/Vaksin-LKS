<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pendaftaran;
use Illuminate\Support\Facades\Http;

class InfoController extends Controller
{
    public function index(){
      
        return view('home.index');
    }   

    public function create(){
        return view('home.form');
    }

    public function store(Request $request){
        $validate = $request->validate([
            'nama'  => 'required|min:4',
            'nik'   => 'required|min:16',
            'no'   => 'required|min:11'
        ]);
        $form = new pendaftaran;
        $form->nama = $request->nama;
        $form->nik = $request->nik;
        $form->no = $request->no;
        $form->save();
        return redirect()->route('index');
    }
}
