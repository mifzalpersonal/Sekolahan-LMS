<?php

namespace App\Http\Controllers;

use App\Models\Ppdb;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class PpdbController extends Controller
{
    
    public function index()
    {
        $ppdbs = Ppdb::all();
        return view('admin.ppdbdir.ppdb', compact('ppdbs'));
    }

   
    public function create()
    {
        return view ('admin.ppdbdir.ppdb-create');
    }

   
    public function store(Request $request)
    {
        $request->validate([
            'nisn' => 'required|numeric|digits:20|exists:accepted_students,nisn|unique:ppdbs,nisn', 
            'nik' => 'required|numeric|digits:20', 
            'nama' => 'required|string|max:255', 
            'kelamin' => 'required|in:L,P',
            'tanggal_lahir' => 'required|date',
            'tempat_lahir' => 'required|string|max:255',
            'alamat' => 'required|string',
            'nomor_hp_siswa' => 'required|numeric|digits:20',

            // pemisah

            'nama_ortu' => 'required|numeric|digits:20',
            'nomor_hp_ortu'=> 'required|string|max:255',

            //pemisah lagi

            'asal_sekolah' => 'required|string|max:255',
            'jurusan' => 'required|string|max:255',
            'status' => 'required|in:terverifikasi, belumverif',
        ]);

        $validated['nama'] = Str::title(mb_strtolower($request->nama));
        $validated['asal_sekolah'] = Str::title(mb_strtolower($request->asal_sekolah));
        $validated['tempat_lahir'] = Str::title(mb_strtolower($request->tempat_lahir));
        $validated['nama_ortu'] = Str::title(mb_strtolower($request->nama_ortu));
    }

   
    public function show(Ppdb $ppdb)
    {
        //
    }

    
    public function edit(Ppdb $ppdb)
    {
        return view('admin.ppdbdir.ppdb-edit.blade.php');
    }

    
    public function update(Request $request, $id)
    {
        
    }

    
    public function destroy(Ppdb $ppdb)
    {
        //
    }
}
