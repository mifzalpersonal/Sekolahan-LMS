<?php

namespace App\Http\Controllers;

use App\Models\Ppdb;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;


class PpdbController extends Controller
{

    public function index()
    {
        $ppdb = Ppdb::all();
        return view('admin.ppdbdir.ppdb', compact('ppdb'));
    }


    public function create()
    {
        return view ('admin.ppdbdir.ppdb-create');
    }


    public function store(Request $request)
    {
       $validate = $request->validate([
            'nisn' => ['required|numeric|digits:20|exists:accepted_students,nisn|unique:ppdbs,nisn'],
            'nik' => 'required|numeric|digits:20',
            'nama' => 'required|string|max:255',
            'kelamin' => 'required|in:L,P',
            'tanggal_lahir' => 'required|date',
            'tempat_lahir' => 'required|string|max:255',
            'alamat' => 'required|string',
            'nomor_hp_siswa' => 'required|numeric|digits:20',

            // pemisah

            'nama_ortu' => 'required|string|max:255',
            'nomor_hp_ortu'=> 'required|numeric|digits:20',

            //pemisah lagi

            'asal_sekolah' => 'required|string|max:255',
            'jurusan' => 'required|string|max:255',
            'status' => 'required|in:terverifikasi, belumverif',
        ]);

        $validated['nama'] = Str::title(mb_strtolower($request->nama));
        $validated['asal_sekolah'] = Str::title(mb_strtolower($request->asal_sekolah));
        $validated['tempat_lahir'] = Str::title(mb_strtolower($request->tempat_lahir));
        $validated['nama_ortu'] = Str::title(mb_strtolower($request->nama_ortu));

        Ppdb::create($validated);

        return redirect()->route(ppdb-admin.index);
    }


    public function show(Ppdb $ppdb)
    {
        //
    }


    public function edit(Ppdb $ppdb)
    {
        $id = Ppdb::findOrFail();
        return view('admin.ppdbdir.ppdb-edit');
    }


    public function update(Request $request, $id)
    {
        $ppdb = Ppdb::findOrFail($id);

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

            'nama_ortu' => 'required|string|max:255',
            'nomor_hp_ortu'=> 'required|numeric|digits:20',

            //pemisah lagi

            'asal_sekolah' => 'required|string|max:255',
            'jurusan' => 'required|string|max:255',
            'status' => 'required|in:terverifikasi, belumverif',

        ]);

        $ppdb->nisn = $request->nisn;
        $ppdb->nik = $request->nik;
        $ppdb->nama = $request->nama;
        $ppdb->kelamin = $request->kelamin;
        $ppdb->tanggal_lahir = $request->tanggal_lahir;
        $ppdb->tempat_lahir = $tempat_lahir->tempat_lahir;
        $ppdb->alamat = $request->alamat;
        $ppdb->nomor_hp_siswa = $request->nomor_hp_siswa;
        $ppdb->nama_ortu = $request->nama_ortu;
        $ppdb->nomor_hp_ortu = $request->nomor_hp_ortu;
        $ppdb->asal_sekolah = $request->asal_sekolah;
        $ppdb->jurusan = $request->jurusan;
        $ppdb->status = $request->status;
        $pddb->save();

        return redirect()->route('ppdb-admin.index');
    }


    public function destroy(Request $request, $id)
    {
        $ppdb = Ppdb::findOrFail($id);
        $ppdb->delete();

        return redirect()->route("ppdb-admin.index");
    }
}
