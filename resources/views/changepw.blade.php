<?php $page = 'changepw';?>
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
    padding-left: 25px;
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

<div class="first" style="background-image: url('https://image.freepik.com/free-photo/medicine-doctor-stethoscope-touching-icon-medical-network-connection_34200-294.jpg'); ">
    
  <div class="main">
    <u><h3 style="padding-left: 8cm;">Change Password</h3></u>
  <form>
        

        <div class="form-group">
          <h2 class="name">E-mail</h2>
          <input type="email" name="email" placeholder="Enter Email" class="form-control">
        </div>

        <div class="form-group">
          <h2 class="name">Current Password</h2>
          <input type="password" name="currentpassword" placeholder="Enter Current Password" class="form-control">
        </div>

        <div class="form-group">
          <h2 class="name">New Password</h2>
          <input type="password" name="newpassword" placeholder="Enter New Password" class="form-control">
        </div>

        <div class="form-group">
          <h2 class="name">Confirm Password</h2>
          <input type="password" name="newpassword" placeholder="Re Enter New Password" class="form-control">
        </div>
     
      
        <button type="submit" name="okay" class="btn"><a href="{{ url('/home') }}" style="color: white;">Ok</a></button>
  </form>
    
  </div>
    
  
        
</div>




@endsection