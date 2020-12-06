<?php $page = 'patientdetails';?>
@extends('layouts.app')

@section('content')

<style>
  .main{
    background-color:  rgba(109, 149, 185, 0.76);
    width: 825px;
    height: 455px;
    padding: 0px 10px;
    margin-top: -26px;
    margin-left:8cm;
    border-radius: 0.2cm;
  }


  .name{
    margin-left: 45px;
    padding: 0 2px;
    width: 250px;
    color: white;
    font-size: 15px;
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
    margin-bottom: 25px;
    padding: 6px 10px ;
  }

  .form-group input{
    height: 30px;
    border-radius: 5px;
    border: 0;
    font-size: 15px;
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

</style>

  <div class="first" style="background-image: url('https://image.freepik.com/free-photo/doctor-patient_1421-64.jpg'); ">
    
    
    <div class="main">
      <u><h5 style="padding-left: 6.5cm; padding-bottom: 0.01cm; padding-top: 0.01cm;">View Patient Details</h5></u>
    <form action="/updatepatient" method="POST">
    @csrf

            <div class="form-group">
                <h2 class="name">Name</h2>
                <input type="text" name="pname" placeholder="Enter Name" class="form-control"  value="{{$item->pname}}" required autocomplete="pname">
              </div>

              <div class="form-group">
                <h2 class="name">E-mail</h2>
                <input type="email" name="pemail" placeholder="Enter Email" class="form-control"  value="{{$item->pemail}}" required autocomplete="pemail">
              </div>

              <div class="form-group">
                <h2 class="name">Phone Number</h2>
                <input type="text" name="pphone" placeholder="Enter Phone Number" class="form-control"  value="{{$item->pphone}}" required autocomplete="pphone">
              </div>

              <div class="form-group">
                <h2 class="name">Address</h2>
                <input type="text" name="paddress" placeholder="Enter Phone Number" class="form-control"  value="{{$item->paddress}}" required autocomplete="paddresse">
              </div>

              <div class="form-group">
                <h2 class="name">Date of Birth</h2>
                <input type="text" name="pbday" placeholder="Enter Phone Number" class="form-control"  value="{{$item->pbday}}" required autocomplete="pbday">
              </div>

              <div class="form-group">
                <h2 class="name">Occupation</h2>
                <input type="text" name="poccupation" placeholder="Enter Phone Number" class="form-control"  value="{{$item->poccupation}}" required autocomplete="poccupation">
              </div>

              <div class="form-group">
                <h2 class="name">Blood Group</h2>
                <input type="text" name="pblood" placeholder="Enter Blood Group" class="form-control"  value="{{$item->pblood}}" required autocomplete="pblood">
              </div>

              <div class="form-group">
                <h2 class="name">Algery Medicine</h2>
                <input type="text" name="palmedicine" placeholder="Enter Phone Number" class="form-control"  value="{{$item->palmedicine}}" required autocomplete="palmedicine">
              </div>

              <div class="form-group">
                <h2 class="name">Gender</h2>
                <input type="text" name="pgender" placeholder="Enter Phone Number" class="form-control"  value="{{$item->pgender}}" required autocomplete="pgender">
              </div>

              <div class="form-group">
                <h2 class="name">Maritial Status</h2>
                <input type="text" name="pstatus" placeholder="Enter Phone Number" class="form-control"  value="{{$item->pstatus}}" required autocomplete="pstatus">
              </div>

              <input type="hidden" name="id" value="{{$item->id}}"/>
              
              <a href="/viewpatients" type="button" class="btn btn-light" style="margin-left:6cm">
                {{ __('Cancel') }}
              </a>
    
              <button type="submit" class="btn btn-warning" style="margin-left:9cm; ">
                     {{ __('Update') }}
              </button>
             
              
                      
        </form>
          
        </div>
          
        
      </div>
    
    
    @endsection             