<?php

namespace App\Http\Controllers;

use App\Models\Mitra;
use Illuminate\Http\Request;

class MitraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Mitra::all();
        return view('admin.datamaster.datamitra.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.datamaster.datamitra.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = validator($request->all(), [
            'nama' => 'required'
        ]);

        $data = Mitra::create($request->all());

        if ($data) {
            return redirect()->route('datamitra.create')->with('status', 'Data berhasil disimpan !');
        } else {
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Mitra $mitra)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = Mitra::findOrFail($id);
        if ($data) {
            return view('admin.datamaster.datamitra.edit', compact('data'));
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $data = Mitra::findOrFail($id);


        try {
            $data->update($request->all());
            # code...
            return redirect()->route('datamitra.index')->with('status', 'Data berhasil diupdate !');
        } catch (\Throwable $e) {
            # code...
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mitra $mitra)
    {
        //
    }
}