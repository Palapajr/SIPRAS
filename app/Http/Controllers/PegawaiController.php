<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    public $filename;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Pegawai::orderBy('created_at', 'desc')->get();
        return view('pegawai.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pegawai.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'npk' => 'required|unique:pegawai',
            'nama' => 'required',
            'tanggal_lahir' => 'required|date',
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
            'nohp' => 'required',
            'jabatan' => 'required',
            'tmt' => 'required|date',
            'foto' => 'nullable|file|image|max:2048',
        ]);

        if ($request->hasFile('foto')) {
            $path = $request->file('foto');
            $this->filename = date('dmYHi').'-'. $path->getClientOriginalName();
            $path->move(public_path('images'), $this->filename);
        }

        Pegawai::create([
            'npk' => $request->npk,
            'nama' => $request->nama,
            'tanggal_lahir' => $request->tanggal_lahir,
            'jenis_kelamin' => $request->jenis_kelamin,
            'nohp' => $request->nohp,
            'jabatan' => $request->jabatan,
            'tmt' => $request->tmt,
            'foto' => $this->filename,
        ]);

        return redirect()->route('index');
        // return redirect()->route('pegawai.index')->with('success', 'Pegawai berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pegawai $pegawai)
    {
        return view('pegawai.show', compact('pegawai'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
