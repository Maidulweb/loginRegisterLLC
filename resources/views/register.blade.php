@extends('layouts.master')

@section('content')
<div class="register body-padd">
   <div class="container">
      <div class="row">
        <div class="col-md-4 offset-md-4">
          <form action="">
            <div class="form-group">
              <label for="">First Name</label>
              <input name="" type="text" class="form-control" placeholder="First Name">
            </div>
            <div class="form-group">
              <label for="">Last Name</label>
              <input name="" type="text" class="form-control" placeholder="Last Name">
            </div>
            <div class="form-group">
              <label for="">Username</label>
              <input name="" type="text" class="form-control" placeholder="Username">
            </div>
            <div class="form-group">
              <label for="">Email</label>
              <input name="" type="text" class="form-control" placeholder="Email">
            </div>
            <div class="form-group">
              <label for="">Password</label>
              <input name="" type="text" class="form-control" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-primary">Register</button>
          </form>
        </div>
      </div>
   </div>
</div>
@endsection