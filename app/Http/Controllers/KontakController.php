<?php

namespace App\Http\Controllers;

use App\Models\kontak;
use Illuminate\Http\Request;

class KontakController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('kontak.index', [
            'kontaks' => kontak::get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kontak.create');
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
    public function show(kontak $kontak)
    {
        return view('kontak.show', [
            'kontak' => $kontak->toArray()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(kontak $kontak)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, kontak $kontak)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(kontak $kontak)
    {
        //
    }
}
