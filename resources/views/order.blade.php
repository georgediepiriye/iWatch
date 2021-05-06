@extends('master')
@section('content')
<div class="custom-product">
<div class="col-sm-10">
    <table class="table" >
<tbody>
  <tr>
    <td>Amount</td>
    <td>N{{number_format( $total) }}</td>
   
  <tr>
  <tr>
    <td>Tax</td>
    <td>N0</td>
  
  </tr>
  <tr>
    <td>Delivery</td>
    <td>N1,000</td>
   
  </tr>
  <tr>
    <td><label>Total</label></td>
    <td><label>N{{number_format($total+1000 ) }}</label></td>
   
  </tr>
</tbody>
</table>
    <div>
        <form action="/action_page.php">
            <div class="form-group">
                
            <textarea type="email" class="form-control" placeholder="Enter your address"></textarea>

            </div>
           
            <div class="form-group">
              <label>Payment Method:</label><br><br>
              <input type="radio" name="payment"><span> online payment</span><br><br>
              <input type="radio" name="payment"><span> pay on Delivery</span><br><br>
            </div>
            <button type="submit" class="btn btn-default">Order</button>
          </form>
          
    </div>

</div>
</div>
@endsection