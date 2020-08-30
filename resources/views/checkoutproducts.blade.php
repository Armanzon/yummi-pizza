@extends('layouts.index')

@section('center')
    <section id="cart_items">
        <div class="container">
            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="{{ route('allProducts') }}">Home</a></li>
                    <li><a href="{{ route('cartProducts') }}">Cart</a></li>
                    <li class="active">Checkout</li>
                </ol>
            </div>

            @if(Auth::check())

                <div class="shopper-informations">
                    <div class="row">
                        <div class="col-sm-12 clearfix">
                            <div class="bill-to">
                                <p> Deliver/Bill To</p>
                                <div class="form-one">
                                    <form action="createNewOrder/" method="post">
                                        @csrf
                                        <input type="text" name="email" placeholder="Email*" required>
                                        <input type="text" name="first_name" placeholder="First Name *" required>
                                        <input type="text" name="last_name" placeholder="Last Name *"  required>
                                        <input type="text" name="address" placeholder="Address *" required>
                                        <input type="text" name="zip" placeholder="Zip / Postal Code *" required>
                                        <input type="text" name="phone" placeholder="Phone *" required>
                                        <button class="btn btn-default check_out" type="submit" name="submit">Proceed To Payment</button>
                                    </form>
                                </div>
                                <div class="form-two">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </section>

    <section id="do_action">
        <div class="container">
            <div class="heading">
                <h3>Want to order more pizza?</h3>
                <p>Back to the => <span><a href="{{ route('allProducts') }}">PIZZA MENU</a></span></p>
                <h3>Check your order?</h3>
                <p>Back to the => <span><a href="{{ route('cartProducts') }}">CART</a></span></p>
            </div>
        </div>

            @else

                <div class="alert alert-danger" role="alert">
                    <strong>Please!</strong> <a href="{{route('login') }}">Log in</a> in order to create an order
                </div>

            @endif

        </div>
    </section>

@endsection
