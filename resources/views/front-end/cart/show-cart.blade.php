@extends('front-end.master')
@section('body')
    <!--banner-->
    <div class="banner1">
        <div class="container">
            <h3><a href="index.html">Home</a> / <span>Cart Content</span></h3>
        </div>
    </div>
<!--banner-->
    <div class="content">
        <div class="single-wl3">
            <div class="container">
                <div class="row">
                    <div class="col-md-11 col-md-offset-1">
                        <h3 class="text-center text-success">My Shopping Cart</h3><br>
                        <table class="table table-bordered table-hover">
                            <tr class="bg-danger text-center">
                                <th>SL. No.</th>
                                <th>Name</th>
                                <th>Image</th>
                                <th>Price TK. </th>
                                <th>Quantity</th>
                                <th>Total Price TK. </th>
                                <th>Action</th>
                            </tr>
                            @php($sum = 0)
                            @php($i = 1)
                            @foreach($cartProducts as $cartProduct)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$cartProduct->name}}</td>
                                <td><img src="{{asset($cartProduct->options->image)}}" alt="" height="80px" width="80px"></td>
                                <td>{{$cartProduct->price}}</td>
                                <td>
                                    {{-- {{Form::open(['route'=>'update-cart','method'=>'POST'])}} --}}
                                    <form action="{{route('update-cart')}}" method="POST">
                                        {{ csrf_field() }}
                                    <input type="number" name="qty" value="{{$cartProduct->qty}}">
                                    <input type="hidden" name="rowId" value="{{$cartProduct->rowId}}">
                                    <input type="submit" name="btn" value="Update">
                                    <form>
                                    {{-- {{Form::close()}} --}}
                                </td>
                                <td>{{$totalPrice = $cartProduct->price * $cartProduct->qty}}</td>
                                <td>
                                    <a href="{{route('delete-cart-item',['rowId'=>$cartProduct->rowId])}}" class="btn btn-danger">
                                        <i class="far fa-trash-alt"></i>
                                    </a>
                                </td>
                                @php($sum = $sum + $totalPrice)
                                @endforeach
                            </tr>
                            </table>
                            <hr>
                            <table class="table table-bordered table-hover">
                                <tr>
                                    <th>Item Total (TK.) </th>
                                    <td>{{$sum}}</td>
                                </tr>
                                <tr>
                                    <th>Vat Total (TK.) </th>
                                    <td>{{$vat = 0}}</td>
                                </tr>
                                <tr>
                                    <th>Grand Total (TK.) </th>
                                    <td>{{$orderTotal = $sum+$vat}}</td>
                                {{Session::put('orderTotal',$orderTotal)}}
                                </tr>
                            </table>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-11 col-md-offset-1">
                        @if(Session::get('customerId') && Session::get('shippingId'))
                        <a href="{{route('checkout-payment')}}" class="btn btn-warning pull-right">Checkout</a>
                        @elseif(Session::get('customerId'))
                        <a href="{{route('checkout-shipping')}}" class="btn btn-warning pull-right">Checkout</a>
                        @else
                        <a href="{{route('checkout')}}" class="btn btn-warning pull-right">Checkout</a>
                        @endif
                        <a href="" class="btn btn-warning">Continue Shopping</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection