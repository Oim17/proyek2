<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel;

class ArtikelController extends Controller
{
    public function index()
    {
        $dataArtikel = artikel::all();
        return view('artikel.index',compact('dataArtikel'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('artikel.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $result = artikel::insert([
            'idartikel' => $request->id,
            'judul' => $request->judul,
            'isi' => $request->isi,
            'fotoartikel' => $request->foto,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        if($result){
            return redirect('/artikel');
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
        $dataArtikel = artikel::all()
                    ->where('idartikel','=',$id)
                    ->first();
        return view('artikel.update',compact('dataArtikel'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $id = $request->idartikel;
        artikel::where('idartikel',$id)
                ->update([
                    'judul' => $request->judul,
                    'isi' => $request->isi,
                    'fotoartikel' => $request->foto
                ]);
        return redirect('/artikel');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        artikel::where('idartikel',$id)
                    ->delete();
        return redirect('/artikel');
    }

}
