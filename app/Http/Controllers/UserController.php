<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $data = User::orderBy('created_at', 'DESC')->get();
        $data = User::all()->sortBy('created_at');


        return view('admin.users.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = User::all()->sortBy('created_at');


        return view('admin.users.create', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = validator($request->all(), [
            'nama' => 'required'
        ]);
        dd($request);
        $data = User::create($request->all());

        if ($data) {
            return redirect()->route('usersilab.create')->with('status', 'Data berhasil disimpan !');
        } else {
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(User $pasien)
    {
        return view('admin.pasien.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = User::findOrFail($id);
        if ($data) {
            return view('admin.pasien.edit', compact('data'));
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $data = User::findOrFail($id);


        try {
            $data->update($request->all());
            # code...
            return redirect()->route('pasien.index')->with('status', 'Data berhasil diupdate !');
        } catch (\Throwable $e) {
            # code...
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $dt = User::findOrFail($id);
        $dt->delete();

        return redirect()->route('pasien.index')->with('status', 'Data berhasil dihapus !');
    }
}