<?php $page = 'contact';?>
@extends('layouts.app')

@section('content')
<style>

   .main{
    background-color: rgba(92, 98, 104, 0.616);
    width: 825px;
    height: 400px;
    padding: 10px 10px;
    margin: auto;
    border-radius: 0.2cm;
  }


  .name{
    margin-left: 45px;
    padding: 0 2px;
    width: 250px;
    color: white;
    font-size: 18px;
    font-weight: 700;
  }

  
  .form-control{
    position: relative;
    left: 225px;
    top: -37px;
    line-height: 30px;
    width: 480px;
    border-radius: 6px;
    font-size: 16px;
    color: #555;
  }
  
  .form-group{
    margin-right: 10cm;
    height: 5px;
    margin-bottom: 40px;
    padding: 20px 10px 10px 10px;
  
  }

  .form-group input{
    height: 42px;
    border-radius: 5px;
    border: 0;
    font-size: 18px;
    font-weight: 600;
    letter-spacing: 2px;
    padding-left: 25x;
  }

  .form-group::before{
    font-family: 'Font Awesome\ 5 Free';
    position: absolute;
    font-size: 22px;
    left: 28px;
    padding-top: 4px;
    color: black;
  }

  
  .btn{
    background-color: #33698f;
    color: white;
    font-size: 19px;
    font-weight: 600;
    border-radius: 5px;
    border-color: whitesmoke;
    border-width: 1px;
    padding: 7px 30px ;
    margin-left: 350px;
  }

  .btn:hover{
    background-color: #264d69;
    color: white;
  }

</style>

<div class="first" style="background-image: url('https://image.freepik.com/free-photo/contact-us-concept-business-woman-hand-pointing-icon-email-customer-service-call-center_2034-1944.jpg');">
          
          
        <div class="main">
            <u><h3 style="padding-left: 8.5cm; padding-top: 0.2cm; padding-bottom:0.05cm;">Contact Us</h3></u>
            <form action="/svcontact" method="POST">
            @csrf
            
                        <div class="form-group">
                            <label for="cname" class="name">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="cname" type="text"  placeholder="Enter Name"  class="form-control @error('cname') is-invalid @enderror" name="cname" value="{{ old('cname') }}" required autocomplete="cname" autofocus>

                                @error('cname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group ">
                            <label for="cemail" class="name">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="cemail" type="email" placeholder="Enter Email" class="form-control @error('cemail') is-invalid @enderror" name="cemail" value="{{ old('cemail') }}" required autocomplete="cemail">

                                @error('cemail')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="cphone" class="name">{{ __('Phone Number') }}</label>

                            <div class="col-md-6">
                                <input id="cphone" type="text"  placeholder="Enter Phone Number"  class="form-control @error('cphone') is-invalid @enderror" name="cphone" value="{{ old('cphone') }}" required autocomplete="cphone">

                                @error('cphone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="cmsg" class="name">{{ __('Message') }}</label>

                            <div class="col-md-6">
                                <input id="cmsg" type="text"  placeholder="Enter Message"  class="form-control @error('cmsg') is-invalid @enderror" name="cmsg" value="{{ old('cmsg') }}" required autocomplete="cmsg">

                                @error('cmsg')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                         
                                <button type="submit" class="btn">
                                    {{ __('Ok') }}
                                </button>
            </form>  
        </div>
</div>
@endsection