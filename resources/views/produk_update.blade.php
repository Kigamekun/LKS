@extends('layouts.admin')

@section('content')
    

<center><h1>Update</h1></center>    
<div style="width: 75%;margin: auto;">
    <form  action="{{ route('produk.update', ['produk'=>$produk->id]) }}" enctype="multipart/form-data" method="post">
        @method('PUT')
        @csrf
        <div class="form-group">
            <div class="input-group">
                
                <input value="{{$produk->nama_produk}}" name="nama_produk" type="text" class="form-control" placeholder="Nama Produk" aria-label="Nama Produk" aria-describedby="basic-addon1">
            </div>
        </div>

        <div class="form-group">
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text">Rp. </span>
            </div>
            <input   value="{{$produk->harga}}"  name="harga" type="number" min="1" class="form-control" aria-label="Amount (to the nearest dollar)">
            
          </div>
      </div>
      

      <div class="form-group">
        <div class="input-group">
          
          <textarea  placeholder="Deskripsi" name="deskripsi" class="form-control" aria-label="With textarea">{{$produk->deskripsi}} </textarea>
        </div>
    </div>
    <div class="form-group">
      <label for="exampleFormControlSelect1">Pilih Kategori</label>
      <select name="kategori_id" class="form-control" id="exampleFormControlSelect1">
        @foreach ($kategori as $item)
            @if ($item ==  $produk->kategori_id)
                <option value="{{$item}}" selected>{{$item}}</option>
            @else
                <option value="{{$item}}">{{$item}}</option>
            @endif
        @endforeach
      </select>
    </div>

    <input data-default-file="{{ url('thumb/'.$produk->gambar) }}" name="gambar" type="file" class="dropify" />
   <br>
   <center>
    <button type="submit" class="btn btn-success">Send!</button>
</center>
    </form>
</div>



@endsection