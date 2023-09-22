<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $name = 'Tigor Imam Hamdani';
        $kampus = 'Politeknik Negeri Malang';
        $jurusan = 'Teknologi Informasi';
        $prodi = 'Sistem Informasi Bisnis';

        $data ['name'] = $name;
        $data ['kampus'] = $kampus;
        $data ['jurusan'] = $jurusan;
        $data ['prodi'] = $prodi;

        return view('home/index', $data);
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
