@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}

                    <p>{!! Auth::user()->name !!}</p>
{{--                    <p>Email: {!! Auth::user()->email !!}</p>--}}

                    <p>You can view your <a href="{{ route('cartProducts') }}">Cart</a> here!</p>
                    <p>Still hungry?!? Go back to our <a href="{{ route('allProducts') }}">Pizza Menu</a> :)</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
