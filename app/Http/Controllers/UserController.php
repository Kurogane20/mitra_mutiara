<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = User::paginate(10);
        return view('user.index', compact('users'));
    }

    public function create()
    {
        return view('user.create');
    }

    public function store(Request $request)
    {
        request()->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'role' => 'required',
            'jabatan' => 'required'
        ]);

       $user = new User;
       $user->name = $request->name;
       $user->email = $request->email;
       $user->password = bcrypt($request->password);
       $user->role = $request->role;
       $user->jabatan = $request->jabatan;
       $user->save();

        return redirect()->route('user.index')->with('success', 'Data User Berhasil Ditambahkan');
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('user.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        request()->validate([
            'name' => 'required',
            'email' => 'required',            
            'role' => 'required',
            'jabatan' => 'required'
        ]);

        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        if($request->has('password')) {
            Hash::make($request->password);
        }
        $user->role = $request->role;
        $user->jabatan = $request->jabatan;
        $user->save();
        return redirect()->route('user.index')->with('success', 'Data User Berhasil Diubah');
    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->route('user.index')->with('success', 'Data User Berhasil Dihapus');
    }
}
