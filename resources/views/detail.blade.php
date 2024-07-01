@extends('master')
@section('content')
    <div class="container mb-5 mt-5">
        <div class="row">
            <div class="col-sm-6">
                <div>
                    <img src="{{ $product['gallery'] }}" alt="" class="detail-img">
                </div>
            </div>
            <div class="col-sm-6">
                <div>
                    <a href="/">Go Back</a>
                    <h2>Name: {{ $product['name'] }}</h2>
                    <h3>Price: {{ $product['price'] }}</h3>
                    <h4>Category: {{ $product['category'] }}</h4>
                    <p>Description: {{ $product['description'] }}</p>
                    <br>
                    <button class="btn btn-success">Add to Cart</button>
                    <br><br>
                    <button class="btn btn-primary">Buy Now</button>
                </div>
            </div>
        </div>
    </div>
@endsection
