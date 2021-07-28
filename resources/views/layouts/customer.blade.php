<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doc</title>

    <link rel="stylesheet" href="{{ url('Assets_Frontend/bootstrap-5.0.2-dist/css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ url('Assets_Frontend/font-awesome/css/font-awesome.min.css') }}">
</head>
<body>
    


    <header class="mb-2 p-2 border-bottom sticky-lg-top bg-white">
            <div class="container">

                <div class="d-flex justfiy-content-center justify-content-lg-start align-items-center flex-wrap">
                    <ul class="nav justify-content-center col-12 col-lg-auto">
                                <li><a href="{{ route('home') }}" class="nav-link">
                                <i class="fa fa-home"></i> Home
                                </a></li>
                                <li><a href="{{ route('shop') }}" class="nav-link">
                                    <i class="fa fa-shopping-bag"></i> Shop
                                    </a></li>
                                    <li><a href="{{ route('cart') }}"  data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight" href="" class="nav-link">
                                        <i class="fa fa-shopping-cart"></i> Cart
                                        </a></li>
                    </ul>


                    <form action="
                    " class="col-12 col-lg-auto ms-auto me-lg-3">
                <input type="search" name="search" id="search" placeholder="search .." class="form-control">

                        

                </form>

                <div class="col-12 col-lg-auto d-flex justify-content-center mt-3 mt-lg-0">
                    

                    <ul class="nav">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->nama_lengkap }}
                                </a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                
                            </li>
                        @endguest
                    </ul>
                </div>
                </div>
            </div>

    </header>

    @if(session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
      </div>
      
      <br>

      @endif

    @yield('content')


    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header">
          <h5 id="offcanvasRightLabel">Keranjang Kamu !</h5>
          <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          
          <div class="row">
            @foreach (App\Models\Cart::where('customer_id',Auth::id())->get() as $item)
            <div class="card d-flex w-100 p-1 m-1" style="flex-direction: row; height: 100px;">
                <div style="flex:1;">
                    <img style="object-fit: cover;" src="{{ url('thumb/'.App\Models\Produk::where('id',$item->produk_id)->pluck('gambar')->first()) }}" class="w-100 h-100" alt="">
                </div>
                <div style="flex:2;">
                        <center><h6>Baju 2</h6></center>
                        <p>Price : $100</p>
                        <p>Count : 4</p>
                </div>
            </div>
    
    
          
            @endforeach
             <form action="{{ route('beli') }}" method="post">
                @csrf
                <button type="submit" class="btn btn-info"><i class="fa fa-check-circle-o"></i> Checkout</button>
            </form>
          </div>
      
        </div>
      </div>
      
      <footer class="w-100 pt-5 border-top" style="background-color: lightskyblue;">
          <div class="container">
      
              <div class="d-flex">
                  <h5 class="align-items-center m-2">
                      <b>Newsletter</b>
                  </h5>
                  <input type="email" placeholder="Email" class="form-control">
                  <button class="btn btn-warning ms-1">
                      Kirim
                  </button>
              </div>
      
              <br>
              <br>
      
              <div class="d-flex justify-content-center">
                      <ul style="list-style: none;">
                          <li><h5><i class="fa fa-address-book"></i> About</h5></li>
                          <li>Nama Toko : Kizaru</li>
                          <li>Alamat : GG buntu</li>
                          <li>No Hp : 089555555</li>
                      </ul>
                      <ul style="list-style: none;">
                          <li><h5><i class="fa fa-warning"></i> Help</h5></li>
                          <li>Nama Toko : Kizaru</li>
                          <li>Alamat : GG buntu</li>
                          <li>No Hp : 089555555</li>
                      </ul>
                      <ul style="list-style: none;">
                          <li><h5> <i class="fa fa-user-o"></i> Joined </h5></li>
                          <li>Nama Toko : Kizaru</li>
                          <li>Alamat : GG buntu</li>
                          <li>No Hp : 089555555</li>
                      </ul>
      
              </div>
          </div>
      
          <div class="col-12 align-items-center " style="background: rgb(32, 170, 216);">
                 <h3 class="my-auto"> <center>Make by <i class="fa fa-heart"></i></center></h3>
          </div>
      </footer>
      
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
          <script src="{{ url('Assets_Frontend/bootstrap-5.0.2-dist/js/bootstrap.min.js') }}"></script>
          
      </body>
      </html>
      
    