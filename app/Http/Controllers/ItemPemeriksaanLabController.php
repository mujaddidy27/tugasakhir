<?php

namespace App\Http\Controllers;

use App\Models\ItemPemeriksaanLab;
use Illuminate\Http\Request;

class ItemPemeriksaanLabController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        return view('admin.datamaster.itempemeriksaanlab.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
    public function show(ItemPemeriksaanLab $pemeriksaan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ItemPemeriksaanLab $pemeriksaan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ItemPemeriksaanLab $pemeriksaan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ItemPemeriksaanLab $pemeriksaan)
    {
        //
    }
}