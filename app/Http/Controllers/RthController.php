<?php

namespace App\Http\Controllers;

use App\Rth;
use App\Kelurahan;
use Illuminate\Http\Request;

class RthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rth = Rth::orderBy('id', 'DESC')->get();
        $jenis = array(
            1 => 'Taman',
            2 => 'Lapangan',
            3 => 'Makam',
        );

        return view('auths.rth.index', compact('rth','jenis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $arrx = array();
        $arrz = array();
        $jenis = array(
            1 => 'Taman',
            2 => 'Lapangan',
            3 => 'Makam',
        );

        $rth = Rth::all();
        $kelurahan = Kelurahan::all();
        foreach($rth as $rth){
            $arrx[] = array($rth->nama_lokasi, $rth->lintang, $rth->bujur);
            $arrz[] = "new google.maps.LatLng(".$rth->lintang.", ".$rth->bujur.")";
        }

        return view('auths.rth.create', compact('jenis','kelurahan','arrx', 'arrz'));
    }

    /**
     * View
    **/
    public function view(Request $request)
    {
        $arrx = array();
        $arrz = array();
        $jenis = array(
            1 => 'Taman',
            2 => 'Lapangan',
            3 => 'Makam',
        );

        $rth = Rth::find($request->id);
        $kelurahan = Kelurahan::all();
        //foreach($rth as $rth){
            $arrx[] = array($rth->nama_lokasi, $rth->lintang, $rth->bujur);
            $arrz[] = "new google.maps.LatLng(".$rth->lintang.", ".$rth->bujur.")";
       // }

        return view('auths.rth.view', compact('rth','arrx','arrz','kelurahan','jenis'));
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
            'jenis_spot_id' => 'required',
            'nama_lokasi' => 'required',
            'gambar' => 'required',
            'keterangan' => 'required',
            'lintang' => 'required',
            'bujur' => 'required',
        ]);

        $image = time().'.'.$request->gambar->getClientOriginalExtension();
        $request->gambar->move(public_path('uploads'), $image);

        Rth::create([
            'jenis_spot_id' => $request->jenis_spot_id,
            'nama_lokasi' => $request->nama_lokasi,
            'gambar' => $image,
            'keterangan' => $request->keterangan,
            'lintang' => $request->lintang,
            'bujur' => $request->bujur,
        ]);

        return redirect()->route('rth');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Rth  $rth
     * @return \Illuminate\Http\Response
     */
    public function show(Rth $rth)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Rth  $rth
     * @return \Illuminate\Http\Response
     */
    public function edit(Rth $rth)
    {

        $arrx = array();
        $arrz = array();
        $jenis = array(
            1 => 'Taman',
            2 => 'Lapangan',
            3 => 'Makam',
        );

        $rth = Rth::find($rth->id);
        $kelurahan = Kelurahan::all();
        //foreach($rth as $rth){
            $arrx[] = array($rth->nama_lokasi, $rth->lintang, $rth->bujur);
            $arrz[] = "new google.maps.LatLng(".$rth->lintang.", ".$rth->bujur.")";
       // }

        return view('auths.rth.edit', compact('rth','arrx','arrz','kelurahan','jenis'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Rth  $rth
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rth $rth)
    {
        $this->validate($request, [
            'jenis_spot_id' => 'required',
            'nama_lokasi' => 'required',
            'keterangan' => 'required',
            'lintang' => 'required',
            'bujur' => 'required',
        ]);

        

        if(empty($request->gambar)){
            Rth::where('id', $rth->id)
            ->update([
                'jenis_spot_id' => $request->jenis_spot_id,
                'nama_lokasi' => $request->nama_lokasi,
                'keterangan' => $request->keterangan,
                'lintang' => $request->lintang,
                'bujur' => $request->bujur,
            ]);
        }else{
            $image = time().'.'.$request->gambar->getClientOriginalExtension();
            $request->gambar->move(public_path('uploads'), $image);

            Rth::where('id', $rth->id)
            ->update([
                'jenis_spot_id' => $request->jenis_spot_id,
                'nama_lokasi' => $request->nama_lokasi,
                'gambar' => $image,
                'keterangan' => $request->keterangan,
                'lintang' => $request->lintang,
                'bujur' => $request->bujur,
            ]);
        }

        return redirect()->route('rth');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Rth  $rth
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rth $rth)
    {
        Rth::destroy($rth->id);
        return redirect()->route('rth');
    }
}
