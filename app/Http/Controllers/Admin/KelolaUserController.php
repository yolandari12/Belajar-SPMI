<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class KelolaUserController extends Controller
{
    public function data () {
        $user = User::all();

        return view('pages.admin.kelola-user.data', [
            'user'=> $user
        ]);
    }

    public function tambah(){
        return view('pages.admin.kelola-user.tambah');
    }

    public function proses_tambah(Request $request){
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->role = $request->role;
        $user->save();



        return redirect()->route('data-user');
    }

    public function ubah($id){
        $user = User::find($id);

        return view('pages.admin.kelola-user.ubah', [
            'user' => $user
        ]);
    }

    public function proses_ubah(Request $request, $id){
        $user = User::find($id);

        if (empty($request->password)) {
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = $user->password;
            $user->role = $request->role;
            $user->save();
        }else{
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->role = $request->role;
            $user->save();
        }

        return redirect()->route('data-user');

    }

    public function proses_hapus($id){
       $user = User::find($id);

       $user->delete();

       return redirect()->route('data-user');
    }
}
