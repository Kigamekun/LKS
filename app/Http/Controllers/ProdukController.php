<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\Kategori;
class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produk = Produk::all();
        $recomen = Produk::all()->random(4);
        
        $kategori = Kategori::all();
        $solve = [];
        foreach ($kategori as $key => $value) {
            $solve[] = $value->id;
        }

        return view('produk',['produk'=>$produk,'kategori'=>$solve,'recomen'=>$recomen]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $thumb = $request->gambar;
        $thumbname = time().'-'.$thumb->getClientOriginalName();
        $thumb->move(public_path().'/thumb'.'/',$thumbname);

        Produk::create([
            'nama_produk'=>$request->nama_produk,
            'harga'=>$request->harga,
            'kategori_id'=>$request->kategori_id,
            'deskripsi'=>$request->deskripsi,
            'gambar'=>$thumbname,
        ]);

        return response()->json(['status'=>'Success'], 200);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kategori = Kategori::all();
        $solve = [];
        foreach ($kategori as $key => $value) {
            $solve[] = $value->id;
        }

        $produk = Produk::where('id',$id)->first();
        return view('produk_update',['produk'=>$produk,'kategori'=>$solve]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
   

        if (is_null($request->gambar)) {
            Produk::where('id',$id)->update([
       
                'nama_produk'=>$request->nama_produk,
                'harga'=>$request->harga,
                'kategori_id'=>$request->kategori_id,
                'deskripsi'=>$request->deskripsi,
                     
        ]);
        } else {
            



            $thumb = $request->gambar;
            $thumbname = time().'-'.$thumb->getClientOriginalName();
            $thumb->move(public_path().'/thumb'.'/',$thumbname);
    
            Produk::where('id',$id)->update([
       
                'nama_produk'=>$request->nama_produk,
                'harga'=>$request->harga,
                'kategori_id'=>$request->kategori_id,
                'deskripsi'=>$request->deskripsi,
                'gambar'=>$thumbname
                     
        ]);
        }

        return redirect()->back()->with(['status'=>'has been updated']);
        

      
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Produk::where('id',$id)->delete();
        return redirect()->back()->with(['status'=>'successfully deleted']);
    }
}
