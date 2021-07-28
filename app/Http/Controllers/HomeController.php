<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\Transaksi;
use App\Models\Transaksi_detail;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
  
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $recomen = Produk::all()->random(4);
        
        $produk = Produk::all();
        return view('home',['produk'=>$produk,'recomen'=>$recomen]);
    }

    public function detail($id)
    {
        $produk = Produk::where('id',$id)->first();

        $recomen = Produk::all()->random(4);
        return view('detail',['produk'=>$produk,'recomen'=>$recomen]);
    }
    public function beli(Request $request)
    {
        $cart = Cart::where('customer_id',Auth::id())->get();
        
       foreach ($cart as $key => $value) {
           
        $s = 'INV/';
        $solve = $s. join('',explode('-',Carbon::now()->toDateString()));
        $transaksi = Transaksi::create([
            'customer_id'=>Auth::id(),
            'tanggal'=>Carbon::now(),
            'kode_transaksi'=>$solve
        ]);

        Transaksi_detail::create([
            'produk_id'=>$value->produk_id,
            'jumlah'=>$value->produk_id,
            'transaksi_id'=>$transaksi->id,
        ]);

        
        
    }
    $cart = Cart::where('customer_id',Auth::id())->delete();


    return redirect()->route('summary',['id'=>$solve]);

    }

    public function add_cart(Request $request , $id)
    {
        Cart::create([
            'produk_id'=>$id,
            'customer_id'=>Auth::id(),
            'jumlah'=>$request->jumlah
        ]);

        return redirect()->back()->with(['status'=>'added to cart']);
    }

    public function summary($id)
    {
        return view('summary',['id'=>$id]);
    }

    public function cart()
    {
       $cart = Cart::where('customer_id',Auth::id())->get();
        return view('cart',['produk'=>$cart]);
    }

    public function shop()
    {

        $transaksi = Transaksi::where('customer_id',Auth::id())->get();
        return view('shop',['transaksi'=>$transaksi]);
    }
}
