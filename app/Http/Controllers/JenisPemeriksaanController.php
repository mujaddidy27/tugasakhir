<?php

namespace App\Http\Controllers;

use App\Models\JenisPemeriksaan;
use Illuminate\Http\Request;

class JenisPemeriksaanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = JenisPemeriksaan::all();
        return view('admin.datamaster.datajenispemeriksaan.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('admin.datamaster.datajenispemeriksaan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $data = JenisPemeriksaan::create($request->all());

        if ($data) {
            return redirect()->route('datajenispemeriksaan.create')->with('status', 'Data berhasil disimpan !');
        } else {
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(JenisPemeriksaan $jenisPemeriksaan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = JenisPemeriksaan::findOrFail($id);
        if ($data) {
            return view('admin.pasien.edit', compact('data'));
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {

        $data = JenisPemeriksaan::findOrFail($id);


        try {
            $data->update($request->all());
            # code...
            return redirect()->route('pasien.index');
        } catch (\Throwable $e) {
            # code...
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $dt = JenisPemeriksaan::findOrFail($id);
        $dt->delete();

        return redirect()->route('datajenispemeriksaan.index');
    }
}