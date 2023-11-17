<?php

namespace App\Http\Controllers;

use App\Models\kelas;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    public function index(Request $request)
    {
        $kelas =new kelas;
        if ($request-> get('search')){
            $kelas = $kelas->where ('nama','LIKE','%'.$request->get('search').'%');
        }
        $kelas = $kelas->get();
        return view('kelas.index', compact('kelas', 'request'));
    }

    public function create(Request $request)
    {
      return view('kelas.create');
    }

    public function store(Request $request)
    {
      $request->validate([
        'nama'=>'required',
      ]);

      Kelas::create($request->all());
      return redirect()->route('kelas.index')->with('succsess','Data kelas berhasil ditambahkan.');
    }

    public function show (kelas $kelas)
    {

    }

    public function edit(Kelas $kelas)
    {
      return view('kelas.edit',compact('kelas'));
    }

    public function update(Request $request, Kelas $kelas)
    {
      $request->validate([
        'nama'=>'required',
      ]);

      $kelas->update($request->all());
      return redirect()->route('kelas.index')->with('success','Data kelas berhasil diperbarui.');
    }

    public function destroy(Kelas $kelas)
    {
        $kelas->delete();
        return redirect()->route('kelas.index')->with('success','Data kelas berhasil dihapus.');
    }
}
