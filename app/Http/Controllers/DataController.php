<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Data;

class DataController extends Controller
{
    public function view(){
        return view('home');
    }

    public function index(){
        return view('store');
    }

    public function store (Request $request){
        $validation = $request->validate([
            'name' => 'required|string|regex:/^[a-zA-Z\s]+$/|min:5|max:30',
            'age' => 'required|numeric|min:1|max:100',
            'occupation' => 'required|alpha|min:1|max:20',
            'nationality' => 'required|alpha|min:1|max:15',
        ]);

        Data::create($validation);
        return redirect('/home');
    }

    public function show(){
        $datas = Data::all();

        return view('home', compact('datas'));
    }

    public function edit($id){
        $data = Data::findOrFail($id);

        return view('update', compact('data'));
    }

    public function update(Request $request, $id){

        $validasi = $request->validate([
            'name' => 'required|string|regex:/^[a-zA-Z\s]+$/|min:5|max:30',
            'age' => 'required|numeric|min:1|max:100',
            'occupation' => 'required|alpha|min:1|max:20',
            'nationality' => 'required|alpha|min:1|max:15',
        ]);


        Data::findOrFail($id)->update($validasi);
        return redirect('home');
    }

    public function delete($id){
        Data::destroy($id);

        return redirect('home');
    }
}
