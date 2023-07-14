<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use Illuminate\Http\Request;

class PasienController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Pasien::orderBy('created_at', 'DESC')->get();

        return view('admin.pasien.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pasien.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = validator($request->all(), [
            'nama' => 'required'
        ]);

        $data = Pasien::create($request->all());

        if ($data) {
            return redirect()->route('pasien.edit');
        } else {
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Pasien $pasien)
    {
        return view('admin.pasien.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = Pasien::findOrFail($id);
        if ($data) {
            return view('admin.pasien.edit', compact('data'));
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $data = Pasien::findOrFail($id);

        
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
        $dt = Pasien::findOrFail($id);
        $dt->delete();
        
        return redirect()->route('pasien.index');
    }
}
