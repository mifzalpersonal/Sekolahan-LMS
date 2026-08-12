<?php

namespace App\Http\Controllers;

use App\Models\Ppdb;
use Illuminate\Http\Request;

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
        
    }

   
    public function show(Ppdb $ppdb)
    {
        //
    }

    
    public function edit(Ppdb $ppdb)
    {
        //
    }

    
    public function update(Request $request, Ppdb $ppdb)
    {
        //
    }

    
    public function destroy(Ppdb $ppdb)
    {
        //
    }
}
