<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Template;

class TemplateController extends Controller
{
    public function index(){
        $templates = Template::all();
        return view('template.index', compact('templates'));
    }

    public function create(){
        return view('template.create');
    }

    public function store(Request $request){
        request()->validate([
            'name' => 'required',
            'content' => 'required',
        ]);

        Template::create([
            'name' => $request->name,
            'content' => $request->content,
        ]);

        return redirect()->route('template.index');
    }

    public function edit($id){
        $template = Template::find($id);
        return view('template.edit', compact('template'));
    }

    public function update(Request $request, $id){
        request()->validate([
            'name' => 'required',
            'content' => 'required',
        ]);

        $template = Template::find($id);
        $template->update([
            'name' => $request->name,
            'content' => $request->content,
        ]);

        return redirect()->route('template.index')->with('success', 'Data Template Berhasil Diubah');
    }

    public function destroy($id){
        $template = Template::find($id);
        $template->delete();
        return redirect()->route('template.index')->with('success', 'Data Template Berhasil Dihapus');
    }
}
