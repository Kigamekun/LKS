@extends('layouts.customer')

@section('content')




<div class="container">




    <div data-bs-ride="carousel" id="carousel" class="carousel slide">
        <div class="carousel-inner" style="border-radius: 10px;">
            <div class="carousel-item active"><img src="Assets_Frontend/header1.jpg" alt="" class="w-100 d-block"></div>

            <div class="carousel-item"><img src="Assets_Frontend/header2.jpg" alt="" class="w-100 d-block"></div>
        </div>
</div>
<br>

<div >


        <h5 class="text-black-50" style="text-align: center;">
            Saran Produk
        </h5>    
    
            <div class="d-flex justify-content-center flex-wrap p-4" style="background: linear-gradient(-135deg,#e0e6ed,#e0e6ed,#fff7fa);">
                
                
              @foreach ($recomen as $item)
              <div class="card" style="width: 15rem; margin:3px;">
                <div class="position-absolute m-1">
                    <span class="badge bg-warning">Baru</span>
                    <span class="badge bg-info">Teraris</span>
                </div>
        <img src="
        {{ url('thumb/'.$item->gambar) }}" class="w-100" alt="">
                <div class="card-body">
        
                    <div class="card-title">
        
                        {{$item->nama_produk}}
                    </div>
                  
        
                    <br>
                    <center>
                        <a href="{{ route('detail', ['id'=>$item->id]) }}" class="btn btn-success"> <i class="fa fa-cart-plus"></i> Selengkapnya</a>
                    </center>
                </div>
            </div>
              @endforeach
            </div>
    
    
    <br>
            <h5 class="text-black-50" style="text-align: center;">
                List  Produk
            </h5>    
    
            <br>
        <!-- <div class="col-12 mt-5">
            <select name="filter" id="filter" class="form-control">
                
                <option value="" selected>Filter ..</option>
                <option value="Baju">baju</option>
                <option value="Celana">celana</option>
                <option value="Hoodie">hoodie</option>
            </select>
        </div>
     -->
     
    
        <br>
        
    
    <div class="d-flex justify-content-center flex-wrap">
        @foreach ($produk as $item)



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
    {{$item->deskripsi}}
                </div>
    
                <br>
                <center>
                    <a href=" {{ route('detail', ['id'=>$item->id]) }} " class="btn btn-success"> <i class="fa fa-cart-plus"></i> Selengkapnya</a>
                </center>
            </div>
        </div>
    
    



        @endforeach
    
    
    
        
    
    
    </div>
   

</div>

</div>
<br>
<br>


@endsection
