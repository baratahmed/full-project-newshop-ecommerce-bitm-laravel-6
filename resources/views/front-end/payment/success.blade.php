@extends('front-end.master')
@section('body')
<!--banner-->
    <div class="text-center m-0 p-0">
        <br><br>
        <h3 class="text-success mb-4">Payment Successful</h3>
        <br>
        <a href="{{route('/')}}" class="btn btn-primary mb-4">Go Home</a>
        <br>
        <img src="{{asset('img/payment_successful.gif')}}" alt="">
        <br>
    </div>
@endsection