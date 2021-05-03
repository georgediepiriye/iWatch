@extends('master')
@section('content')
<div class="custom-product">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
      
        <!-- Wrapper for slides -->
        <div class="carousel-inner"> 
           
          @foreach ($products as $product )

          <div class="item {{ $product['id']===1?'active':'' }}">
            <a href="detail/{{$product['id'] }}">
                <img class="slidder-img" src="{{ $product['image'] }}">

            <div class="carousel-caption slidder-text">
                <h3>{{ $product['name'] }}</h3>
            </div>
                
            </a>

            
          </div> 
          @endforeach
         </div>

      
         <!-- Left and right controls -->
         <a class="left carousel-control" href="#myCarousel" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
          <span class="sr-only">Previous</span>
         </a>
         <a class="right carousel-control" href="#myCarousel" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
          <span class="sr-only">Next</span>
         </a>
      </div>
      <div class="trending-wrapper"> 
          <h3>Trending Products</h3>
        @foreach ($products as $product )

        <div class="trending-item">
            <a href="detail/{{$product['id'] }}">

          <img class="trending-image" src="{{ $product['image'] }}">
              <h4>{{ $product['name'] }}</h4>
              <div class="trending-price">
                <h5>{{ $product['price'] }}</h5>
              </div>
              
            </a>
        </div> 
        @endforeach
       </div>
</div>

@endsection