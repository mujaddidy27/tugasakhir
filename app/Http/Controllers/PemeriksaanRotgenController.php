<?php

namespace App\Http\Controllers;

use App\Models\PemeriksaanRotgen;

use Illuminate\Http\Request;

class PemeriksaanRotgenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {


        return view('admin.pemeriksaanrotgen.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {


        return view('admin.pemeriksaanrotgen.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(PemeriksaanRotgen $pemeriksaan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PemeriksaanRotgen $pemeriksaan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PemeriksaanRotgen $pemeriksaan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PemeriksaanRotgen $pemeriksaan)
    {
        //
    }
}