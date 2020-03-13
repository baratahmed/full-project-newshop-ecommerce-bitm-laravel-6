@extends('front-end.master')
@section('body')
    <!--banner-->
    <div class="banner1">
        <div class="container">
            <h3><a href="index.html">Home</a> / <span>Checkout</span></h3>
        </div>
    </div>
<!--banner-->
    <div class="content">
        <div class="single-wl3">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 well">
                        <h3 class="text-center text-success">You have to login to complete your valuable order. If you are not registered then please register first.</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-5 well">
                        <h3>Register if you are not Registered before!</h3>
                        <br/>
                        {{-- {{Form::open(['route'=>'customer-sign-up', 'method'=>'POST']) --}}
                        <form action="{{route('customer-sign-up')}}" method="post">
                            {{ csrf_field() }}
                        <div class="form-group">
                            <input type="text" name="first_name" class="form-control " placeholder="First Name">
                        </div>

                        <div class="form-group">
                            <input type="text" name="last_name" class="form-control " placeholder="Last Name">
                        </div>
                        <div class="form-group">
                            <input type="email" name="email_address" id="email_address" class="form-control " placeholder="example@gmail.com">
                            <span id="res"></span>
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" class="form-control " placeholder="Password">
                        </div>
                        <div class="form-group">
                            <input type="text" name="phone_number" class="form-control " placeholder="Phone Number">
                        </div>
                        <div class="form-group">
                            <textarea name="address" placeholder="Address" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="btn" class="form-control btn btn-info" id="resBtn" value="Register">
                        </div>
                    </form>
                        {{-- {{Form::close()}} --}}
                    </div>

                    <div class="col-md-5 well " style="margin-left: 20px;">
                        <h3 class="text-center">Already Registerd? Login Here!</h3>
                        <br>
                        <h4 class="text-center text-danger">{{Session::get('message')}}</h4>
                        <br/>
                        {{-- {{Form::open([ 'route'=>'customer-login','method'=>'POST'])}} --}}
                        <form action="{{route('customer-login')}}" method="post">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <input type="email" name="email_address" class="form-control " placeholder="example@gmail.com">
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" class="form-control " placeholder="Password">
                            </div>

                            <div class="form-group">
                                <input type="submit" name="btn" class="form-control  btn btn-success" value="Log-in">
                            </div>
                        </form>
                        {{-- {{Form::close()}} --}}
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script>
        var email_address = document.getElementById('email_address');
        email_address.onblur = function(){
            var xmlHttp = new XMLHttpRequest();
            var email = document.getElementById('email_address').value;
            var serverPage = 'http://127.0.0.1:8000//ajax-email-check/'+email;
            xmlHttp.open("GET",serverPage);
            xmlHttp.onreadystatechange = function(){
                //alert(xmlHttp.readyState);
                if (xmlHttp.readyState==4 && xmlHttp.status==200) {
                    document.getElementById('res').innerHTML = xmlHttp.responseText;
                    if (xmlHttp.responseText == 'Already Exists!!!') {
                        document.getElementById('resBtn').disabled = true;
                    } else {
                        document.getElementById('resBtn').disabled = false;
                    }
                }
            }
            xmlHttp.send(null);
        }
    </script>
@endsection