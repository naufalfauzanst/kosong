<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }

    public function show_postingan()
    {
        return view('admin.postingan');
    }

    public function show_arsip()
    {
        return view('admin.arsip');
    }

    public function show_sepeda()
    {
        return view('admin.sepeda');
    }

    public function show_motor()
    {
        return view('admin.motor');
    }

    public function show_mobil()
    {
        return view('admin.mobil');
    }

    public function show_kapal()
    {
        return view('admin.kapal');
    }

    public function show_pesawat()
    {
        return view('admin.pesawat');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
