@extends('layouts.master')
@section('content')
@if(session()->has('message'))
                      <div class="alert alert-{{session('type')}}">
                         {{session('message')}}
                      </div>
                    @endif
@endsection