<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paket;


class PaketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dataPaket = Paket::all();
        return view('paket.index',compact('dataPaket'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('paket.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $result = paket::insert([
            'kode' => $request->kode,
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'harga' => $request->harga,
            'foto_paket' => $request->foto,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        if($result){
            return redirect('/paket');
        }else{
            return $this->create();
        }
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
    public function edit($id)
    {
        $dataPaket = paket::all()
                    ->where('kode','=',$id)
                    ->first();
        return view('paket.update',compact('dataPaket'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $id = $request->kode;
        paket::where('kode',$id)
                ->update([
                    'nama' => $request->nama,
                    'deskripsi' => $request->deskripsi,
                    'harga' => $request->harga,
                    'foto_paket' => $request->foto
                ]);
        return redirect('/paket');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        paket::where('kode',$id)
                    ->delete();
        return redirect('/paket');
    }
}
