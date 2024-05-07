<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UTSController extends Controller
{
    function index()
    {
        return view('index');
    }

    function create()
    {
        return view('create');
    }

    function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'nama' => 'required|string|max:255',
            'nim' => 'required|string|max:255',
            'jurusan' => 'required|string|max:255',
            'semester' => 'required|integer',
        ]);

        // Save the data to the database
        // ...

        // Redirect back to the index page with a success message
        session()->flash('success', 'Data mahasiswa berhasil ditambahkan');
        return redirect()->route('index');
    }
}