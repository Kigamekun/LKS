@extends('layouts.admin')


@section('content')
    




<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Dashboard</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard v1</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>150</h3>

                        <p>Order baru</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                    <a href="#" class="small-box-footer">Selengkapnya <i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3>53<sup style="font-size: 20px">%</sup></h3>

                        <p>Statistik</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                    <a href="#" class="small-box-footer">Selengkapnya <i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3>44</h3>

                        <p>User </p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                    <a href="#" class="small-box-footer">Selengkapnya <i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-danger">
                    <div class="inner">
                        <h3>65</h3>

                        <p>Pengunjung</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-pie-graph"></i>
                    </div>
                    <a href="#" class="small-box-footer">Selengkapnya <i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->



        <div class="card">
            <div class="card-header">
                <h1 class="">Tabel Produk</h1>
                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-default"
                    class="btn btn-block btn-info btn-lg">Buat Produk !</button>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Nama Produk</th>
                            <th>Kategori</th>
                            <th>Deskripsi</th>
                            <th>Harga</th>
                            <th></th>
                            <th>Action</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                       @foreach ($produk as $item)
                           
                       <tr>
                        <td>{{$item->nama_produk}}</td>
                        <td>{{$item->kategori_id}}
                        </td>
                        <td>{{$item->deskripsi}}</td>
                        <td>{{$item->harga}}</td>
                        <td></td>
                        <td><a href="{{ route('produk.edit', ['produk'=>$item->id]) }}" class="btn btn-warning">Edit</a></td>
                        <td>
                            <a href="{{ route('delete', ['id'=>$item->id]) }}" class="delete-confirm btn btn-danger">Hapus</a>
                        
                           
                        </td>
                    </tr>


                       @endforeach

                    </tbody>

                </table>
            </div>
            <!-- /.card-body -->
        </div>





    </div><!-- /.container-fluid -->
</section> 


<div class="modal fade" id="modal-default">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Buat Produk</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

          <form method="POST" enctype="multipart/form-data" id="upload">
            @csrf
            <div class="modal-body">


              <div class="form-group">
                <div class="input-group">

                  <input name="nama_produk" type="text" class="form-control" placeholder="Nama Produk"
                    aria-label="Nama Produk" aria-describedby="basic-addon1">
                </div>
              </div>

              <div class="form-group">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">Rp. </span>
                  </div>
                  <input name="harga" type="number" class="form-control" aria-label="Amount (to the nearest dollar)">

                </div>
              </div>


              <div class="form-group">
                <div class="input-group">

                  <textarea placeholder="Deskripsi" name="deskripsi" class="form-control"
                    aria-label="With textarea"></textarea>
                </div>
              </div>
              <div class="form-group">
                <label for="exampleFormControlSelect1">Select Kategori</label>
                <select name="kategori_id" class="form-control" id="exampleFormControlSelect1">
                  @foreach ($kategori as $item)
                      <option value="{{$item}}">{{$item}}</option>
                  @endforeach
                </select>
              </div>

              <input name="gambar" type="file" class="dropify" />
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
          </form>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>











@endsection