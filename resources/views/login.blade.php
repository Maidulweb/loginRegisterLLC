@extends('layouts.master')

@section('content')
<div class="login body-padd">
   <div class="container">
      <div class="row">
        <div class="col-md-4 offset-md-4">
          <form action="">
            <div class="form-group">
              <label for="">Usernae or Email</label>
              <input name="" type="text" class="form-control" placeholder="Usernaem or Email">
            </div>
            <div class="form-group">
              <label for="">Password</label>
              <input name="" type="password" class="form-control" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
          </form>
        </div>
      </div>
   </div>
</div>
@endsection