<!DOCTYPE html>
<html>
<head>
	<title>Invoice Copy</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">	
</head>
<body>
	<div class="row">
		<div class="col-sm-4 d-block border">
			<h3>Shipping Info</h3>                    
			<h2 class="to">{{$shipping->full_name}}</h2>
			<div class="text-gray-light">{{$shipping->phone_number}}</div>
			<div class="address">{{$shipping->address}}</div>
			<div class="email"><a href="mailto:{{$shipping->email_address}}">{{$shipping->email_address}}</a></div>
		</div>
		<div class="col-sm-4 d-block float-right border">
			<h3>Billing Info</h3>                    
        <h2 class="to">{{$customer->first_name.' '.$customer->last_name}}</h2>
        <div class="text-gray-light">{{$customer->phone_number}}</div>
        <div class="address">{{$customer->address}}</div>
        <div class="email"><a href="mailto:{{$customer->email_address}}">{{$customer->email_address}}</a></div>
		</div>
	</div>

	<h3 class="text-center mt-3 border">Product Info</h3>
		<table class="table table-bordered">
		    <thead>
		        <tr>
		            <th>Sl No</th>
		            <th>Item</th>
		            <th>Rate</th>
		            <th>Quantity</th>
		            <th>TOTAL PRICE</th>
		        </tr>
		    </thead>
		    <tbody>
		 @php($i=1)
		 @php($sum=0)
		 @foreach($orderDetails as $orderDetail)
		        <tr>
		            <td class="font-weight-bold">{{$i++}}</td>
		            <td>{{$orderDetail->product_name}}</td>
		            <td>TK. {{$orderDetail->product_price}}</td>
		            <td>{{$orderDetail->product_quantity}}</td>
		            <td>TK. {{$total = $orderDetail->product_price*$orderDetail->product_quantity}}</td>
		        </tr>
		        @php($sum+=$total)
		        @endforeach
		    </tbody>                    
		</table>

		<table  class="table table-bordered" style="width: 300px;float:right">
			<tr>
			<th class="bg-warning"><h5>Invoice ID</h5></th>
			<td class="font-weight-bold">#000{{$order->id}}</td>
			</tr>
			<tr>
			<th class="bg-warning"><h5>Date</h5></th>
			<td class="font-weight-bold">{{$order->created_at}}</td>
			</tr>
			<tr>
			<th class="bg-warning"><h5>Grand Total</h5></th>
			<td class="font-weight-bold">TK. {{$sum}}</td>
			</tr>

		</table>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script>
$('#printInvoice').click(function(){
    Popup($('.invoice')[0].outerHTML);
    function Popup(data) 
    {
        window.print();
        return true;
    }
});
</script>
</body>
</html>