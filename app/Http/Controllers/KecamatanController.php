<?php

namespace App\Http\Controllers;

use App\Kecamatan;
use Illuminate\Http\Request;

class KecamatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kecamatan = Kecamatan::all();
        return view('auths.kecamatan.index', compact('kecamatan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('auths.kecamatan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama_kecamatan' => 'required',
        ]);

        Kecamatan::create([
            'nama_kecamatan' => $request->nama_kecamatan,
        ]);

        return redirect()->route('kecamatan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Kecamatan  $kecamatan
     * @return \Illuminate\Http\Response
     */
    public function show(Kecamatan $kecamatan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Kecamatan  $kecamatan
     * @return \Illuminate\Http\Response
     */
    public function edit(Kecamatan $kecamatan)
    {
        $kecamatan = Kecamatan::find($kecamatan->id);
        return view('auths.kecamatan.edit', compact('kecamatan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Kecamatan  $kecamatan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kecamatan $kecamatan)
    {
        $this->validate($request, [
            'nama_kecamatan' => 'required'
        ]);

        Kecamatan::where('id', $kecamatan->id)
        ->update([
            'nama_kecamatan' => $request->nama_kecamatan,
        ]);

        return redirect()->route('kecamatan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Kecamatan  $kecamatan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kecamatan $kecamatan)
    {
        Kecamatan::destroy($kecamatan->id);
        return redirect()->route('kecamatan');
    }
}
