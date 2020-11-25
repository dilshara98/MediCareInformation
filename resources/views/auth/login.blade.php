<?php $page = 'login';?>
@extends('layouts.app')

@section('content')
<style>

 .main-section{
    margin: 0 auto;
    margin-top: -15px;
    padding: 0;
  }   

  .modal-content{
    width: 10cm;
    background-color: #7692a7;
    opacity: 0.85;
    padding: 0 18px;
    border-radius: 10px;
    border: 2px #000;
  }
  
  .user-img img{
    height: 100px;
    width: 100px;
  }

  .user-img{
    margin-top: -40px;
    margin-bottom: 5px;
  }
  
  .form-group{
    width: 8.5cm;
    margin-bottom: 35px;

  }

  .form-group input{
    height: 42px;
    border-radius: 5px;
    border: 0;
    font-size: 18px;
    font-weight: 600;
    letter-spacing: 2px;
    padding-left: 54px;
  }

  .form-group:first-of-type:before{
    font-family: 'Font Awesome\ 5 Free';
    content: "\f1fa";
    position: absolute;
    font-size: 22px;
    left: 28px;
    padding-top: 4px;
    color: black;
  }

  .form-group::before{
    content: "\f023";
    font-family: 'Font Awesome\ 5 Free';
    position: absolute;
    font-size: 22px;
    left: 28px;
    padding-top: 4px;
    color: black;
  }

  .forgot{
    padding: 5px 0 25px;
    margin-top:-20px;
  }

  .forgot a{
    color: red;
  }

  .form-input button{
    width: 40%;
    margin: 5px 0 25px;
    border-radius: 5px;
    border-color: whitesmoke;
    border-width: 1px;
  }

  .btn{
      background-color: #33698f;
      color: white;
      font-size: 19px;
      font-weight: 600;
      border: 50px soild white;
      padding: 7px 14px;
    }

  .btn:hover{
      background-color: #264d69;
      color: white;
  }
</style>


<div class="first" style="background-image: url('https://image.freepik.com/free-photo/top-view-doctor-patient-hands-holding-red-heart-white-table_38391-541.jpg'); ">
  <div class="modal-dialog text-center">
    <div class="col-9 main-section">
      <div class="modal-content">

                <div class="user-img">
                  <img src="https://cdn.pixabay.com/photo/2020/07/01/12/58/icon-5359553_960_720.png" >
                </div>
                    <div class="col-12 form-input">
                      <h4><strong>LogIn</strong></h4>
                                <form action="{{ route('login') }}" method="POST">
                                  @csrf
                                  
                              
                                  <div class="form-group">
                                      <input id="email" type="email" placeholder="Enter Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                          @error('email')
                                              <span class="invalid-feedback" role="alert">
                                                  <strong>{{ $message }}</strong>
                                              </span>
                                          @enderror           
                                  </div>

                                  <div class="form-group">
                                          <input id="password" type="password" placeholder="Enter Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                              @error('password')
                                                  <span class="invalid-feedback" role="alert">
                                                      <strong>{{ $message }}</strong>
                                                  </span>
                                              @enderror
                                      
                                  </div>

                                          
                                              <div class="col-md-6 offset-md-4" style="margin-left:2px; margin-top:-20px; margin-bottom:10px;">
                                                  <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                      <label class="form-check-label" for="remember">
                                                          {{ __('Remember Me') }}
                                                      </label>
                                                  </div>
                                              </div>
                                
                                  
                                    <button type="submit" class="btn btn-primary">
                                      {{ __('LogIn') }}
                                    </button>
                                </form>
                  
                            @if (Route::has('password.request'))
                            <div class="forgot">
                                <a href="{{ route('password.request') }}" >
                                <u>
                                {{ __('Forgot Your Password?') }}
                                </u>
                                </a>
                            </div>
                            @endif
                  </div>
      </div>
    </div>
  </div>
</div>

@endsection


