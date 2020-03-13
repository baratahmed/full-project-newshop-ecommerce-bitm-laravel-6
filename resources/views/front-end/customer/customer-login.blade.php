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
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-5 well">
                        <h3>Register Here!</h3>
                        <br/>
                        {{Form::open([ 'method'=>'POST'])}}
                        <div class="form-group">
                            <input type="text" name="first_name" class="form-control " placeholder="First Name">
                        </div>

                        <div class="form-group">
                            <input type="text" name="last_name" class="form-control " placeholder="Last Name">
                        </div>
                        <div class="form-group">
                            <input type="email" name="email_address" class="form-control " placeholder="example@gmail.com">
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
                            <input type="submit" name="btn" class="form-control  btn btn-info" value="Register">
                        </div>
                        {{Form::close()}}
                    </div>

                    <div class="col-md-5 well " style="margin-left: 20px;">
                        <h3 class="text-center">Login Here!</h3>
                        <br>
                        <h4 class="text-center text-danger">{{Session::get('message')}}</h4>
                        <br/>
                        {{Form::open([ 'method'=>'POST'])}}
                        <div class="form-group">
                            <input type="email" name="email_address" class="form-control " placeholder="example@gmail.com">
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" class="form-control " placeholder="Password">
                        </div>

                        <div class="form-group">
                            <input type="submit" name="btn" class="form-control  btn btn-success" value="Log-in">
                        </div>
                        {{Form::close()}}
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection