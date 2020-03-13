@extends('admin.master')
@section('admin-body')
    <div class="row">
        <div class="col-md-11 mx-auto">
            <div class="card text-center">
                <div class="card-header">
                    <h4 class="text-center text-success">Manage Order Info</h4>
                </div>
                <div class="card-body">
                    {{-- <h3 class="text-center text-success" id="message">{{Session::get('message')}}</h3> --}}
                        <table class="table table-bordered">
                            <tr class="bg-warning">
                                <th>SL NO</th>
                                <th>Customer Name</th>
                                <th>Order Total</th>
                                <th>Order Date</th>
                                <th>Order Status</th>
                                <th>Payment Type</th>
                                <th>Payment Status</th>
                                <th>Action</th>
                            </tr>
                            @php($i=1)
                            @foreach($orders as $order)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$order->first_name.' '.$order->last_name}}</td>
                                <td>{{$order->order_total}}</td>
                                <td>{{$order->created_at}}</td>
                                <td>{{$order->order_status}}</td>
                                <td>{{$order->payment_type}}</td>
                                <td>{{$order->payment_status}}</td>
                                <td>    
<a href="{{route('view-order-detail',['id'=>$order->id])}}" class="btn btn-info btn-sm mt-1" title="View Order Details">
    <i class="fas fa-search-plus"></i>
</a>
<a href="{{route('view-order-invoice',['id'=>$order->id])}}" class="btn btn-warning btn-sm mt-1" title="View Order Invoice">
    <i class="fas fa-search-minus"></i>
</a>
<a href="{{route('download-order-invoice',['id'=>$order->id])}}" class="btn btn-primary btn-sm mt-1" title="Download Order Invoice">
    <i class="fas fa-download"></i>
</a>                           
<a href="{{route('edit-category',['id'=>$order->id])}}" class="btn btn-success btn-sm mt-1" title="Edit Order">
    <i class="far fa-edit"></i>
</a>
<a href="{{route('delete-category',['id'=>$order->id])}}" class="btn btn-danger btn-sm mt-1" title="Delete Order">
    <i class="fas fa-trash"></i>
</a>
                                </td>                            
                            </tr>
                            @endforeach
                        </table>
                </div>
            </div>
        </div>
    </div>
@endsection