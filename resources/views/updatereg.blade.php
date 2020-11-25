<?php $page = 'regdetails';?>
@extends('layouts.app')

@section('content')

<style>
  
  .main{
    background-color: rgba(94, 137, 167, 0.774);
    width: 825px;
    height: 400px;
    padding: 0px 10px;
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
    margin-bottom: 35px;
    padding: 10px 10px 10px 10px;
  
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
    margin-left: 200px;
    margin-top: 20px;
  }

  .btn:hover{
    background-color: #264d69;
    color: white;
  }

  

</style>

  <div class="first" style="background-image: url('https://image.freepik.com/free-photo/close-up-doctor-is-showing-medical-analytics-data-medical-technology-concept_33799-5605.jpg');">
    
    
    <div class="main">
      <u><h3 style="padding-left: 8cm; padding-bottom: 1cm; padding-top: 0.5cm;">Update Registration</h3></u>
    <form action='/updateregistration' method="POST">
    @csrf
          <div class="form-group">
            <h2 class="name">Name</h2>
            <input type="text" name="name" placeholder="Enter Name" class="form-control"  value="{{$updateregdetails->name}}" required autocomplete="name">
          </div>

          <div class="form-group">
            <h2 class="name">E-mail</h2>
            <input type="email" name="email" placeholder="Enter Email" class="form-control"  value="{{$updateregdetails->email}}" required autocomplete="email">
          </div>

          <div class="form-group">
            <h2 class="name">Phone Number</h2>
            <input type="text" name="phone" placeholder="Enter Phone Number" class="form-control"  value="{{$updateregdetails->phone}}" required autocomplete="phone">
          </div>
        <input type="hidden" name="id" value="{{$updateregdetails->id}}"/>
          <a href="/regdetails" type="button" class="btn" >
            {{ __('Cancel') }}
          </a>
&nbsp;&nbsp;&nbsp;
          <button type="submit" class="btn">
                 {{ __('Update') }}
          </button>
         
          
         
        
    </form>
      
    </div>
      
    
  </div>


@endsection