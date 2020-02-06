@extends('layouts.master')
@section('content')
<div class="register">
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="register-form">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h2>Login Form</h2>
                    <form action="">
                        <div class="form-group">
                            <label for="">Email</label>
                            <input name="email" type="email" class="form-control" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label for="">Password</label>
                            <input name="password" type="password" class="form-control" placeholder="Password">
                        </div>
                     <button type="submit" class="btn btn-primary">Register</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
