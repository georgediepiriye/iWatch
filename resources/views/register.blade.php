@extends('master')
@section('content')

<div class="container custom-login">
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
            <h4>Registration Form</h4>
            <form action="/register" method="post">
                @csrf
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="name" class="form-control"  placeholder="Enter email">
                  </div>
                <div class="form-group">
                  <label>Email address</label>
                  <input type="email" name="email" class="form-control"  placeholder="Enter email">
                </div>
                <div class="form-group">
                  <label>Password</label>
                  <input type="password" name="password" class="form-control"  placeholder="Password">
                </div>
                <div class="form-group">
                    <label> Retype Password</label>
                    <input type="password" name="retype_password" class="form-control" placeholder="Retype Password">
                  </div>
                <button type="submit" name="submit" class="btn btn-primary">Register</button>
              </form>
             
        </div>

    </div>

</div>
    
@endsection