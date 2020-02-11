@extends('layouts.master')
@section('content')
<div class="register">
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="register-form">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @if(session()->has('message'))
                      <div class="alert alert-{{session('type')}}">
                         {{session('message')}}
                      </div>
                    @endif
                    <h2>Registration Form</h2>
                    <form action="{{route('register')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="">First Name</label>
                            <input name="name" type="text" class="form-control" value="{{old('name')}}" placeholder="First Name">
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input name="email" type="email" class="form-control" value="{{old('email')}}" placeholder="Email">
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
