@extends('layouts.index')

@section('center')
    <header>
    <div class="header-bottom">
        <div class="container">
            <div class="row">
                <div class="col-sm-9">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="mainmenu pull-left">
                        <ul class="nav navbar-nav collapse navbar-collapse">
                            <li><a href="{{ route('allProducts') }}" class="active">Home</a></li>
                            <li><a href="{{ route('cartProducts') }}">Cart</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="search_box pull-right">
                        <form action="/search" method="get">
                        <input type="text" name="searchText" placeholder="Search"/>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </header>

    <div class="container">
        @include('alert')
    </div>

    <section id="slider">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#slider-carousel" data-slide-to="1"></li>
                            <li data-target="#slider-carousel" data-slide-to="2"></li>
                        </ol>

                        <div class="carousel-inner">
                            <div class="item active">
                                <div class="col-sm-11">
                                    <img src="{{ asset('images/home/pizza-slider1.jpg') }}" class="girl img-responsive" alt="" />
                                </div>
                            </div>
                            <div class="item">
                                <div class="col-sm-11">
                                    <img src="{{ asset('images/home/pizza-slider2.jpg') }}" class="girl img-responsive" alt="" />
                                </div>
                            </div>

                            <div class="item">
                                <div class="col-sm-11">
                                    <img src="{{ asset('images/home/pizza-slider3.jpg') }}" class="girl img-responsive" alt="" />
                                </div>
                            </div>

                        </div>

                        <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                            <i class="fa fa-angle-left"></i>
                        </a>
                        <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="features_items">
                        <h2 class="title text-center">PIZZA MENU</h2>

                        @foreach ($products as $product)
                            <div class="col-sm-3">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="{{ Storage::disk('local')->url('product_images/'.$product->image) }}" alt="" />
                                            <h2>$ {{ $product->price }}</h2>
                                            <p>{{ $product->name }}</p>
                                            <a href="{{ route('AddToCartProduct', ['id'=>$product->id]) }}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Order Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


