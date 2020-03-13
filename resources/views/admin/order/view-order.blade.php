@extends('admin.master')
@section('admin-body')
<div class="row">
        <div class="col-md-11 mx-auto">
            <div class="card text-center">
                <div class="card-header">
                    <h3 class="text-center text-success">Order Details Info For This Order</h3>
                </div>
                <div class="card-body">
                    <h3 class="text-center text-success" id="message"></h3>
                        <table class="table table-bordered">
                            <tr>
                                <th>Order No</th>
                                <td>{{$order->id}}</td>
                            </tr>
                            <tr>
                                <th>Order total</th>
                                <td>{{$order->order_total}}</td>
                            </tr>
                            <tr>
                                <th>Order Status</th>
                                <td>{{$order->order_status}}</td>
                            </tr>
                            <tr>
                                <th>Order Date</th>
                                <td>{{$order->created_at}}</td>
                            </tr>
                        </table>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-11 mx-auto">
            <div class="card text-center">
                <div class="card-header">
                    <h3 class="text-center text-success">Customer Info For This Order</h3>
                </div>
                <div class="card-body">
                    <h3 class="text-center text-success" id="message"></h3>
                        <table class="table table-bordered">
                            <tr>
                                <th>Customer Name</th>
                                <td>{{$customer->first_name.' '.$customer->last_name}}</td>
                            </tr>
                            <tr>
                                <th>Phone Number</th>
                                <td>{{$customer->phone_number}}</td>
                            </tr>
                            <tr>
                                <th>Email Address</th>
                                <td>{{$customer->email_address}}</td>
                            </tr>
                            <tr>
                                <th>Address</th>
                                <td>{{$customer->address}}</td>
                            </tr>
                        </table>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-11 mx-auto">
            <div class="card text-center">
                <div class="card-header">
                    <h3 class="text-center text-success">Shipping Info For This Order</h3>
                </div>
                <div class="card-body">
                    <h3 class="text-center text-success" id="message"></h3>
                        <table class="table table-bordered">
                            <tr>
                                <th>Full Name</th>
                                <td>{{$shipping->full_name}}</td>
                            </tr>
                            <tr>
                                <th>Phone Number</th>
                                <td>{{$shipping->phone_number}}</td>
                            </tr>
                            <tr>
                                <th>Email Address</th>
                                <td>{{$shipping->email_address}}</td>
                            </tr>
                            <tr>
                                <th>Address</th>
                                <td>{{$shipping->address}}</td>
                            </tr>
                        </table>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-11 mx-auto">
            <div class="card text-center">
                <div class="card-header">
                    <h3 class="text-center text-success">Payment Info For This Order</h3>
                </div>
                <div class="card-body">
                    <h3 class="text-center text-success" id="message"></h3>
                        <table class="table table-bordered">
                            <tr>
                                <th>Payment Type</th>
                                <td>{{$payment->payment_type}}</td>
                            </tr>
                            <tr>
                                <th>Payment Status</th>
                                <td>{{$payment->payment_status}}</td>
                            </tr>
                        </table>
                </div>
            </div>
        </div>
    </div>
        <div class="row">
        <div class="col-md-11 mx-auto">
            <div class="card text-center">
                <div class="card-header">
                    <h4 class="text-center text-success">Product Info For This Order</h4>
                </div>
                <div class="card-body">
                    <h3 class="text-center text-success" id="message">{{Session::get('message')}}</h3>
                        <table class="table table-bordered">
                            <tr class="bg-warning">
                                <th>SL NO</th>
                                <th>Product ID</th>
                                <th>Product Name</th>
                                <th>Product Price</th>
                                <th>Product Quantity</th>
                                <th>Total Price</th>
                            </tr>
                            @php($i=1)
                 @foreach($orderDetails as $orderDetail)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$orderDetail->product_id}}</td>
                                <td>{{$orderDetail->product_name}}</td>
                                <td>{{$orderDetail->product_price}}</td>
                                <td>{{$orderDetail->product_quantity}}</td>
                                <td>{{$orderDetail->product_price*$orderDetail->product_quantity}}</td>
                            </tr>
                @endforeach
                        </table>
                </div>
            </div>
        </div>
    </div>
@endsection