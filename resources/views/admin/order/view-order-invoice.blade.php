@extends('admin.master')
@section('admin-body')
<style>
  #invoice{
    padding: 30px;
}

.invoice {
    position: relative;
    background-color: #FFF;
    min-height: 680px;
    padding: 15px
}

.invoice header {
    padding: 10px 0;
    margin-bottom: 20px;
    border-bottom: 1px solid #3989c6
}

.invoice .company-details {
    text-align: right
}

.invoice .company-details .name {
    margin-top: 0;
    margin-bottom: 0
}

.invoice .contacts {
    margin-bottom: 20px
}

.invoice .invoice-to {
    text-align: left
}

.invoice .invoice-to .to {
    margin-top: 0;
    margin-bottom: 0
}

.invoice .invoice-details {
    text-align: right
}

.invoice .invoice-details .invoice-id {
    margin-top: 0;
    color: #3989c6
}

.invoice main {
    padding-bottom: 50px
}

.invoice main .thanks {
    margin-top: -100px;
    font-size: 2em;
    margin-bottom: 50px
}

.invoice main .notices {
    padding-left: 6px;
    border-left: 6px solid #3989c6
}

.invoice main .notices .notice {
    font-size: 1.2em
}

.invoice table {
    width: 100%;
    border-collapse: collapse;
    border-spacing: 0;
    margin-bottom: 20px
}

.invoice table td,.invoice table th {
    padding: 15px;
    background: #eee;
    border-bottom: 1px solid #fff
}

.invoice table th {
    white-space: nowrap;
    font-weight: 400;
    font-size: 16px
}

.invoice table td h3 {
    margin: 0;
    font-weight: 400;
    color: #3989c6;
    font-size: 1.2em
}

.invoice table .qty,.invoice table .total,.invoice table .unit {
    text-align: right;
    font-size: 1.2em
}

.invoice table .no {
    color: #fff;
    font-size: 1.6em;
    background: #3989c6
}

.invoice table .unit {
    background: #ddd
}

.invoice table .total {
    background: #3989c6;
    color: #fff
}

.invoice table tbody tr:last-child td {
    border: none
}

.invoice table tfoot td {
    background: 0 0;
    border-bottom: none;
    white-space: nowrap;
    text-align: right;
    padding: 10px 20px;
    font-size: 1.2em;
    border-top: 1px solid #aaa
}

.invoice table tfoot tr:first-child td {
    border-top: none
}

.invoice table tfoot tr:last-child td {
    color: #3989c6;
    font-size: 1.4em;
    border-top: 1px solid #3989c6
}

.invoice table tfoot tr td:first-child {
    border: none
}

.invoice footer {
    width: 100%;
    text-align: center;
    color: #777;
    border-top: 1px solid #aaa;
    padding: 8px 0
}

@media print {
    .invoice {
        font-size: 11px!important;
        overflow: hidden!important
    }

    .invoice footer {
        position: absolute;
        bottom: 10px;
        page-break-after: always
    }

    .invoice>div:last-child {
        page-break-before: always
    }
}
</style>
<div id="invoice">

    <div class="toolbar hidden-print">
        <div class="text-right">
            <button id="printInvoice" class="btn btn-info"><i class="fa fa-print"></i> Print</button>
            <button class="btn btn-info"><i class="fa fa-file-pdf-o"></i> Export as PDF</button>
        </div>
        <hr>
    </div>
    <div class="invoice overflow-auto">
        <div style="min-width: 600px">
            <header>
                <div class="row">
                    <div class="col">
                        <a target="_blank" href="https://lobianijs.com">
                            <img src="http://lobianijs.com/lobiadmin/version/1.0/ajax/img/logo/lobiadmin-logo-text-64.png" data-holder-rendered="true" />
                            </a>
                    </div>
                    <div class="col company-details">
                        <h2 class="name">
                            <a target="_blank" href="https://lobianijs.com">
                            No-Brand
                            </a>
                        </h2>
                        <div>1 No Police Gate,Dampara,WASA,CTG</div>
                        <div>(+88)01706351202</div>
                        <div>wizardwireshark1023@gmail.com</div>
                    </div>
                </div>
            </header>
            <main>
                <div class="row contacts">
                    <div class="col invoice-to">
                      <h3>Shipping Info</h3>                    
                        <h2 class="to">{{$shipping->full_name}}</h2>
                        <div class="text-gray-light">{{$shipping->phone_number}}</div>
                        <div class="address">{{$shipping->address}}</div>
                        <div class="email"><a href="mailto:{{$shipping->email_address}}">{{$shipping->email_address}}</a></div>
                    </div>
                    {{-- <div class="col invoice-details">
                        <h1 class="invoice-id">INVOICE 3-2-1</h1>
                        <div class="date">Date of Invoice: 01/10/2018</div>
                        <div class="date">Due Date: 30/10/2018</div>
                    </div> --}}
                    <div class="col invoice-details">
                      <h3>Billing Info</h3>                    
                        <h2 class="to">{{$customer->first_name.' '.$customer->last_name}}</h2>
                        <div class="text-gray-light">{{$customer->phone_number}}</div>
                        <div class="address">{{$customer->address}}</div>
                        <div class="email"><a href="mailto:{{$customer->email_address}}">{{$customer->email_address}}</a></div>
                    </div>
                </div>
                <table border="0" cellspacing="0" cellpadding="0">
                    <thead>
                        <tr>
                            <th>Sl No</th>
                            <th class="text-left">Item</th>
                            <th class="text-left">Description</th>
                            <th class="text-right">Rate</th>
                            <th class="text-right">Quantity</th>
                            <th class="text-right">TOTAL PRICE</th>
                        </tr>
                    </thead>
                    <tbody>
                 @php($i=1)
                 @php($sum=0)
                 @foreach($orderDetails as $orderDetail)
                        <tr>
                            <td class="font-weight-bold">{{$i++}}</td>
                            <td class="no">{{$orderDetail->product_name}}</td>
                            <td class="text-left"><h3>
                              Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 150
                            </td>
                            <td class="unit">TK. {{$orderDetail->product_price}}</td>
                            <td class="qty">{{$orderDetail->product_quantity}}</td>
                            <td class="total">TK. {{$total = $orderDetail->product_price*$orderDetail->product_quantity}}</td>
                        </tr>
                        @php($sum+=$total)
                        @endforeach
                    </tbody>                    
                </table>
                <table  style="width: 300px;float:right">
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
                <div class="h2 text-success pt-4">Thank you!</div>
                {{-- <div class="notices">
                    <div>NOTICE:</div>
                    <div class="notice">A finance charge of 1.5% will be made on unpaid balances after 30 days.</div>
                </div> --}}
            </main>
{{--             <footer>
                Invoice was created on a computer and is valid without the signature and seal.
            </footer> --}}
        </div>
        <!--DO NOT DELETE THIS div. IT is responsible for showing footer always at the bottom-->
        <div></div>
    </div>
</div>
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
@endsection