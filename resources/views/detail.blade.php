@extends('layouts.customer')

@section('content')
    


<div class="container">

    <div class="d-flex w-100" style="height: 500px;">
        
        <div style="flex:3;">
            <img class="w-100" src="{{ url('thumb/'.$produk->gambar) }}" alt="">
        </div>




        <div class="p-3" style="flex:5;">
            <form action="{{ route('add_cart', ['id'=>$produk->id]) }}" method="post">
                @csrf
                <h4>{{$produk->nama_produk}}</h4>
                <h4 >Rp.{{$produk->harga}}</h4>
                <p>{{$produk->deskripsi}}</p>
                <input type="number" name="jumlah" placeholder="jumlah" required class="form-control" min="1" >
                    <hr>
                    <br>
                    <br>
                    <button type="submit" class="btn btn-lg btn-info"> Beli Sekarang !</button>
                    <button type="submit"  class="btn btn-lg btn-outline-warning"> <i class="fa fa-shopping-cart"> </i></button>
                </form>
                </div>
    </div>

    <hr>

    <h1 class="text-black-50">Produk Lainnya</h1>
    <br>
    <br>


     
    
    <div class="d-flex justify-content-center flex-wrap">
        @foreach ($recomen as $item)
            
    
    
    
        <div class="card" style="width: 15rem; margin:3px;">
            <div class="position-absolute m-1">
                <span class="badge bg-warning">Baru</span>
                <span class="badge bg-info">Teraris</span>
            </div>
    <img src="{{ url('thumb/'.$item->gambar) }}" class="w-100" alt="">
            <div class="card-body">
    
                <div class="card-title">
    
                       {{$item->nama_produk}}
                </div>
                <div class="card-text">
    
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Placeat, in.
                </div>
    
                <br>
                <center>
                    <button class="btn btn-success"> <i class="fa fa-cart-plus"></i> Selengkapnya</button>
                </center>
            </div>
        </div>
    
        @endforeach
    
    
    </div>
   
</div>
@endsection