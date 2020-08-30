@extends('layouts.index')

@section('center')
<section id="cart_items">
    <div class="container">
        <div class="breadcrumbs">
            <ol class="breadcrumb">
                <li><a href="{{ route('allProducts') }}">Home</a></li>
                <li class="active">
                    @if(Auth::check())
                    {{ $userData->name }}'s
                    @endif
                    Pizza Order
                </li>
            </ol>
        </div>

        <div class="table-responsive cart_info">
            <table class="table table-condensed">
                <thead>
                <tr class="cart_menu">
                    <td class="image">Pizza</td>
                    <td class="description"></td>
                    <td class="price">Price</td>
                    <td class="quantity">Quantity</td>
                    <td class="total">Total</td>
                    <td></td>
                </tr>
                </thead>
                <tbody>

                @foreach($cartItems->items as $item)
                <tr>
                    <td class="cart_product">
                        <a href=""><img class="pizza-image" src="{{ Storage::disk('local')->url('product_images/'.$item['data'] ['image']) }}" alt=""></a>
                    </td>
                    <td class="cart_description">
                        <h4><a href="">{{ $item['data'] ['name'] }}</a></h4>
                        <p>{{ $item['data'] ['description'] }}</p>
                    </td>
                    <td class="cart_price">
                        <p>$ {{ $item['data'] ['price'] }}</p>
                    </td>
                    <td class="cart_quantity">
                        <div class="cart_quantity_button">
                            <a class="cart_quantity_down" href="{{ route('DecreaseSingleProduct', ['id' => $item['data'] ['id']]) }}"> - </a>
                            <input class="cart_quantity_input" type="text" name="quantity" value="{{ $item['quantity'] }}" autocomplete="off" size="2">
                            <a class="cart_quantity_up" href="{{ route('IncreaseSingleProduct', ['id' => $item['data'] ['id']]) }}"> + </a>
                        </div>
                    </td>
                    <td class="cart_total">
                        <p class="cart_total_price">$ {{ $item['totalSinglePrice'] }}</p>
                    </td>
                    <td class="cart_delete">
                        <a class="cart_quantity_delete" href="{{ route('DeleteItemFromCart', ['id' => $item['data'] ['id']]) }}"><i class="fa fa-times"></i></a>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>

<section id="do_action">
    <div class="container">
        <div class="heading">
            <h3>Want to order more pizza?</h3>
            <p>Back to the => <span><a href="{{ route('allProducts') }}">PIZZA MENU</a></span></p>
        </div>
        <div class="row">
            <div class="col-sm-6">
            </div>
            @if($cartItems->totalQuantity > 0)
            <div class="col-sm-6">
                <div class="total_area">
                    <ul>
                        <li>No. of Pizza's<span>{{ $cartItems->totalQuantity }}</span></li>
                        <li>Delivery Cost<span>Free</span></li>
                        <li>Total Cost<span>$ {{ $cartItems->totalPrice }}</span></li>
                    </ul>
                    <a class="btn btn-default check_out" href="{{ route('checkoutProducts') }}">Check Out</a>
                </div>
            </div>
            @endif
        </div>
    </div>
</section>
@endsection
