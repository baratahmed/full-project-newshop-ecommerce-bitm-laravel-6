@extends('front-end.master')

@section('body')

    <div class="container">
        <div class="row">
            <div class="col-md-12 well text-center text-success">
                Dear {{ Session::get('customerName') }}. You have to give us product payment method..
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 col-md-offset-2 well">
                {{-- {{ Form::open(['route'=>'new-order', 'method'=>'POST']) }} --}}
                <form action="{{route('new-order')}}" method="post">
                    {{ csrf_field() }}
                    <table class="table table-bordered">
                        <tr>
                            <th>Cash On Delivery</th>
                            <td><input type="radio" name="payment_type" value="Cash"> Cash On Delivery</td>
                        </tr>
                        <tr>
                            <th>Stripe</th>
                            <td><input type="radio" name="payment_type" value="Stripe"> Stripe</td>
                        </tr>
                        <tr>
                            <th>SSL Commerz</th>
                            {{-- <td><input type="radio" name="payment_type" value="Bkash"> Bkash</td> --}}
                            <td><button id="sslczPayBtn"
                                token="if you have any token validation"
                                postdata=""
                                order="If you already have the transaction generated for current order"
                                endpoint="/pay-via-ajax"> Pay Now
                        </button></td>
                        </tr>
                        <tr>
                            <th></th>
                            <td><input type="submit" name="btn" value="Confirm Order"></td>
                        </tr>
                    </table>
                </form>
                {{-- {{ Form::close() }} --}}
            </div>
        </div>
    </div>

@endsection