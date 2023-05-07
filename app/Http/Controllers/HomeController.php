<?php

namespace App\Http\Controllers;

use App\pendaftaran;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = pendaftaran::all();
        return view('home', compact('data'));
    }

    public function edit($id)
    {
        $ubah = pendaftaran::findorfail($id);
        return view('home.edit',compact('ubah'));        
    }

    public function update(Request $request, $id)
    {
        $ubah = pendaftaran::findorfail($id);
        $ubah->nama = $request->nama;
        $ubah->nik = $request->nik;
        $ubah->no = $request->no;
        $ubah->save();
        // $ubah->update($request->all());
        return redirect()->route('home');
    }
    
    public function delete($id)
    {
        $ubah = pendaftaran::findorfail($id);
        $ubah->delete();
        return redirect()->route('home');
    }

}
