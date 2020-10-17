<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function statistik()
    {
        $kecamatan = \App\Kecamatan::all();
        $rth = \App\Rth::all();
        foreach($rth as $rth){
            $kj[$rth->kelurahan->kecamatan->id][$rth->jenis][] = $rth->kelurahan_id;
        }

        foreach($kecamatan as $kecamatan){
            $kec[$kecamatan->id] = $kecamatan->nama_kecamatan;
        }

    	return view('statistik', compact('kecamatan', 'kj', 'kec'));
    }

    public function maps()
    {
        $arrx = array();
        $arrz = array();

        $rth = \App\Rth::all();
        $jenis = array(
            1 => 'Taman',
            2 => 'Lapangan',
            3 => 'Makam',
        );

        foreach($rth as $rth){
            $arrx[] = array(
                "
                    <strong>Nama Lokasi</strong>: ".$rth->nama_lokasi."<br />
                    <strong>Jenis SPOT</strong>: ".$rth->jenis_spot->nama_jenis."<br />
                    <strong>Keterangan</strong>: ".$rth->keterangan."<br />
                    <strong>Gambar</strong>: <br /><img src='uploads/".$rth->gambar."' class='small-img' />
                ",
                $rth->lintang,
                $rth->bujur
            );

            $arrz[] = "new google.maps.LatLng(".$rth->lintang.", ".$rth->bujur.")";
        }

    	return view('maps', compact('arrx','arrz'));
    }

    public function kecmaps(Request $request)
    {
        $arrx = array();
        $arrz = array();

        $jenis = array(
            1 => 'Taman',
            2 => 'Lapangan',
            3 => 'Makam',
        );

        $kelurahan = \App\Kelurahan::where('kecamatan_id', $request->kecid)->get();
        foreach($kelurahan as $kel){
            $maps[] = $kel->id;
        }

        for($i=0; $i<count($maps); $i++){
            $rth = \App\Rth::where('kelurahan_id', $maps[$i])->get();
            foreach($rth as $rth){
                $arrx[] = array(
                    "
                        <strong>Nama Lokasi</strong>: ".$rth->nama_lokasi."<br />
                        <strong>Jenis SPOT</strong>: ".$rth->jenis_spot->nama_jenis."<br />
                        <strong>Keterangan</strong>: ".$rth->keterangan."<br />
                        <strong>Gambar</strong>: <br /><img src='/uploads/".$rth->gambar."' class='small-img' />
                    ",
                    $rth->lintang,
                    $rth->bujur
                );
                $arrz[] = "new google.maps.LatLng(".$rth->lintang.", ".$rth->bujur.")";
            }
        }

        return view('maps', compact('arrx','arrz'));
    }

    public function jenismaps(Request $request)
    {
        $arrx = array();
        $arrz = array();

        $jenis = array(
            1 => 'Taman',
            2 => 'Lapangan',
            3 => 'Makam',
        );

        $rth = \App\Rth::where('jenis', $request->jenis)->get();
        foreach($rth as $rth){
            $arrx[] = array(
                "
                    <strong>Nama Lokasi</strong>: ".$rth->nama_lokasi."<br />
                    <strong>Jenis SPOT</strong>: ".$rth->jenis_spot->nama_jenis."<br />
                    <strong>Keterangan</strong>: ".$rth->keterangan."<br />
                    <strong>Gambar</strong>: <br /><img src='/uploads/".$rth->gambar."' class='small-img' />
                ",
                $rth->lintang,
                $rth->bujur
            );
            $arrz[] = "new google.maps.LatLng(".$rth->lintang.", ".$rth->bujur.")";
        }

        return view('maps', compact('arrx','arrz'));
    }

    public function postcari(Request $request)
    {
        return redirect('maps/'.$request->cari.'/cari');
    }

    public function carimaps(Request $request)
    {
        $arrx = array();
        $arrz = array();
        $jenis = array(
            1 => 'Taman',
            2 => 'Lapangan',
            3 => 'Makam',
        );

        $rth = \App\Rth::where('nama_lokasi', 'like', '%'.$request->cari.'%')->get();
        foreach($rth as $rth){
            $arrx[] = array(
                "
                    <strong>Nama Lokasi</strong>: ".$rth->nama_lokasi."<br />
                    <strong>Jenis SPOT</strong>: ".$rth->jenis_spot->nama_jenis."<br />
                    <strong>Keterangan</strong>: ".$rth->keterangan."<br />
                    <strong>Gambar</strong>: <br /><img src='/uploads/".$rth->gambar."' class='small-img' />
                ",
                $rth->lintang,
                $rth->bujur
            );
            $arrz[] = "new google.maps.LatLng(".$rth->lintang.", ".$rth->bujur.")";
        }

        return view('maps', compact('arrx','arrz'));
    }
}
