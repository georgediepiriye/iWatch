@extends('master')
@section('content')
<div class="custom-product">
<div class="col-sm-10">
    
      <div class="trending-wrapper"> 
      
          <h4>My Orders</h4>
        @foreach ($products as $product )
        <div class="row searched-item cart-list-divider">
            <div class="col-sm-3">
                    <img class="trending-image" src="{{ $product->image }}">
 
            </div>
            <div class="col-sm-3">
                  <h4>Name: {{ $product->name }}</h4>
                        <div class="trending-price">
                          <h5>Price: N{{ number_format($product->price )}}</h5>
                          <h5>Category: {{ $product->category }}</h5>
                          <h5>Delivery Status: {{ $product->status }}</h5>
                          <h5>Address: {{ $product->address }}</h5>
                          <h5>Payment Status: {{ $product->payment_status }}</h5>
                          <h5>Payment Method: {{ $product->payment_method }}</h5>
                        </div>
                        
            </div>
            
        </div> 

        @endforeach
       </div>
</div>
</div>

@endsection