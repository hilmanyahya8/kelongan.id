<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Models\User;

class AdminController extends Controller
{
    public function index()
    {
        $data = User::where('level', '=', 'admin')->get();

        return view('Admin.admin', compact('data'));
    }
    public function create()
    {
        return view('Admin.admin_create');
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
          ]);
    
          $data = new User();
          $data->name = $request->name;
          $data->email = $request->email;
          $data->password = md5($request->password);
          $data->level = 'admin';
          $data->save();
    
          return redirect('/admin')->with('alert_pesan', 'berhasil menambah data');
    }
    public function edit($id)
    {
        $data = User::where('id', $id)->get();
        return view('Admin.admin_update', compact('data'));
    }
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nama' => 'required',
            'telp' => 'required',
        ]);

        $data = User::where('id', $id)->first();
            $data->nama = $request->nama;
            $data->telp = $request->telp;
            $data->save();
        
            return redirect('/admin')->with('alert_message', 'Berhasil mengubah data!');
    }
    public function destroy($id)
    {
        $data = User::where('id', $id)->first();

        if($data != null){
            $data->delete();

            return redirect('/admin')->with('alert_message', 'Berhasil menghapus data!');
        }

        return redirect('/admin')->with('alert_message', 'ID tidak ditemukan!');
    }

}
