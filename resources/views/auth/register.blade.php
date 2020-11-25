<?php $page = 'register';?>
@extends('layouts.app')

@section('content')

<style>
 .main{
    background-color: rgba(68, 95, 119, 0.658);
    width: 825px;
    height: 450px;
    padding: 10px 10px;
    margin: auto;
    margin-top:-8px ;
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
    margin-bottom: 35px;
    padding: 6px 10px 10px 10px;
  
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
    margin-top: -8px;
  }

  .btn:hover{
    background-color: #264d69;
    color: white;
  }

</style>

<div class="first" style="background-image: url('https://image.freepik.com/free-photo/close-up-doctor-is-showing-medical-analytics-data-medical-technology-concept_33799-5605.jpg');">
        <div class="main">
            <u><h3 style="padding-left: 8.5cm; padding-top: 0.5cm; padding-bottom:0.5cm;">Register Now</h3></u>
            <form action="{{ route('register') }}" method="POST">
             @csrf
            
                        <div class="form-group">
                            <label for="name" class="name">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text"  placeholder="Enter Name"  class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group ">
                            <label for="email" class="name">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" placeholder="Enter Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="phone" class="name">{{ __('Phone Number') }}</label>

                            <div class="col-md-6">
                                <input id="phone" type="text"  placeholder="Enter Phone Number"  class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone">

                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="password" class="name">{{ __('Create Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" placeholder="Create Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group ">
                            <label for="password-confirm" class="name">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" placeholder="Confirm Password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>            
            

                    

                        <div class="name ">
                        <br>
                              <input id="occupation" type="radio" name="occupation" value="admin" required autocomplete="occupation" >
                                <label for="admin" >{{ __('Admin') }}</label>                             
                              <input id="occupation"  type="radio" name="occupation" value="doctor" required autocomplete="occupation" >
                                <label for="doctor" >{{ __('Doctor') }}</label>
                              <input id="occupation" type="radio" name="occupation" value="pharmacist"required autocomplete="occupation" >
                                <label for="pharmacist" >{{ __('Pharma') }}</label>
                                @error('occupation')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>  
                        
                         
                                <button type="submit" class="btn">
                                    {{ __('Register') }}
                                </button>
                            
                
            </form>
          
            
        </div>    
</div>

@endsection
            
                    

                        
               

                
                
                