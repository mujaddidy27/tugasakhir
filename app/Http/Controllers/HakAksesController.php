<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Pasien;
// use App\Models\User;
// use App\Models\User;
use Illuminate\Support\Facades\Auth;

class HakAksesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Pasien::count();
        if (Auth::id()) {
            $hak_akses = Auth()->user()->hak_akses;
            if ($hak_akses == 'admin') {
                return view('admin.home.index', compact('data'));
            } else  if ($hak_akses == 'analis') {
                return view('analis.home.index');
            }
        }
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
    public function show(string $id)
    {
        //
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