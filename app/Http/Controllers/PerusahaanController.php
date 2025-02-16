<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Perusahaan;

class PerusahaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){

        $perusahaan = Perusahaan::paginate(10);
        return view('perusahaan.index', compact('perusahaan'));
    }

    public function create(){
        return view('perusahaan.create');
    }

    public function store(Request $request){
        request()->validate([
            'name' => 'required',
            'alamat' => 'required',
            'kode' => 'required',            
        ]);

        Perusahaan::create([
            'name' => $request->name,
            'alamat' => $request->alamat,           
            'kode' => $request->kode            
        ]);

        return redirect()->route('perusahaan.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // Find the perusahaan by id
        $perusahaan = Perusahaan::find($id);

        // Return the edit view and pass the perusahaan
        return view('perusahaan.edit', compact('perusahaan'));
    }

    public function update(Request $request, $id){
        request()->validate([
            'name' => 'required',
            'alamat' => 'required',
            'kode' => 'required',            
        ]);

        $perusahaan = Perusahaan::find($id);
        $perusahaan->update([
            'name' => $request->name,
            'alamat' => $request->alamat,           
            'kode' => $request->kode            
        ]);

        return redirect()->route('perusahaan.index')->with('success', 'Data Perusahaan Berhasil Diubah');
    }

    public function destroy($id){
        $perusahaan = Perusahaan::find($id);
        $perusahaan->delete();
        return redirect()->route('perusahaan.index')->with('success', 'Data Perusahaan Berhasil Dihapus');
    }
}
