@extends('layouts.customer')


@section('content')
  <div class="container">

      
<table class="table">
    <thead>
      <tr>
        <th scope="col">transaksi id </th>
      
      </tr>
    </thead>
    <tbody>
      @foreach ($transaksi as $item)
          
      <tr>
        <th scope="row">{{$item->kode_transaksi}}</th>
      
      </tr>
      @endforeach
    </tbody>
  </table>

  </div>
@endsection