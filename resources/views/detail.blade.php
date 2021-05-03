@extends('master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <img class="detail-img" src="{{ $product['image'] }}" alt="">
        </div>
        <div class="col-sm-6">
            <a href="/">Go back</a>
            <h3>{{ $product['name'] }}</h2>
            <h4>Price: {{ $product['price'] }}</h4>
            <h5>Category: {{ $product['category'] }}</h5><br><br>
            <form action="/add_to_cart" method="post">
                @csrf
                <input type="hidden" name="product_id" value="{{ $product['id'] }}">
                <button class="btn btn-primary" name="add_to_cart">Add to Cart</button><br><br>
            </form>
            
            <button class="btn btn-success">Buy Now</button><br><br>

        </div>
    </div>
</div>
@endsection    