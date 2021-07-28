@extends('layouts.admin')


@section('content')
<!doctype html>
<html lang="en">
  <head>
    <title>detail</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="Assets_Frontend/font-awesome/css/font-awesome.min.css">
    <!-- Bootstrap CSS v5.0.2 -->
  <link rel="stylesheet" href="Assets_Frontend/bootstrap-5.0.2-dist/css/bootstrap.min.css">
  </head>
  <body>

    

   <div class="container">
<center>
    <h1 class="text-black-50">
        Your Cart !
    </h1>
      </center>
   
   
      <div class="d-flex">
        <div class="row">
            
          @foreach ($produk as $item)
          <div class="card d-flex w-100 p-1 m-1" style="flex-direction: row; height: 400px;">
            <div style="flex:1;">
                <img style="object-fit: cover;" src="{{ url('thumb/'.App\Models\Produk::where('id',$item->produk_id)->pluck('gambar')->first()) }}" class="w-100 h-100" alt="">
            </div>
            <div style="flex:2;" class="p-4">
                    <center><h2 >Baju 2</h2></center>
                    <h3>Price : $100</h3>
                    <h3>QTY : 4</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ullam veritatis magnam, eaque, delectus blanditiis placeat nesciunt nostrum dolores quam aspernatur labore facere fugit quos provident beatae ipsam mollitia vitae rem.</p>
                    
                    <div class="d-flex">
                    <button class="btn  btn-info">Lihat Selengkapnya</button>
                    <button class="btn btn-outline-success "> <i class="fa fa-shopping-cart"> </i> Single Checkout </button>
                    </div>
            </div>
        </div>
          @endforeach
        </div>

       </div>
   
   <br>
   <br>
       <form action="{{ route('beli') }}" method="post">
        @csrf
        <button type="submit" class="btn btn-outline-info w-100">Checkout All</button>
    
    </form>
   <br>
   <br>
    </div>

   
@endsection