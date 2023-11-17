<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
        $siswas = new Siswa;
        if ($request->get('search')) {
            $siswas = $siswas->where('nama', 'LIKE', '%' . $request->get('search') . '%')
                ->orWhere('nis', 'LIKE', '%' . $request->get('search') . '%');
        }
        $siswas = $siswas->get();
        return view('siswa.index', compact('siswas', 'request'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('siswa.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'nama' => 'required',
            'nim' => 'required',
            'nis' => 'required',
           

        ]);
        Siswa::create($request->all());
        return redirect()->route('siswa.index')->with('success', 'data berhasil ditambah');
    }

    /**
     * Display the specified resource.
     */
    public function show(Siswa $siswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Siswa $siswa)
    {
        return view('siswa.edit', compact('siswa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Siswa $siswa)
    {

        $request->validate([
            'nama' => 'required',
            'nim' => 'required',
            'nis' => 'required',

        ]);

        $siswa->update($request->all());
        return redirect()->route('siswa.index')->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Siswa $siswa)
    {
        //
        $siswa->delete();
        return redirect()->route('siswa.index')->with('delete', 'data dihapus');
    }
}
