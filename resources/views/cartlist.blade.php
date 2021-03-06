@extends('master')
@section('content')
<div class="custom-product">
<div class="col-sm-10">
    
      <div class="trending-wrapper"> 
      
          <h4>Products in Cart</h4>
          <a href="/order" class="btn btn-success">Order now</a><br><br>
        @foreach ($products as $product )

        <div class="row searched-item cart-list-divider">
            <div class="col-sm-3">
                    <img class="trending-image" src="{{ $product->image }}">
 
            </div>
            <div class="col-sm-3">
                  <h4>{{ $product->name }}</h4>
                        <div class="trending-price">
                          <h5>{{ $product->price }}</h5>
                          <h5>{{ $product->category }}</h5>
                        </div>
                        
            </div>
            <div class="col-sm-5">
              <a href="delete_from_cart/{{ $product->cart_id }}" class="btn btn-warning">Remove from cart</a>

            </div>
            
        </div> 
        @endforeach
       </div>
</div>
</div>

@endsection