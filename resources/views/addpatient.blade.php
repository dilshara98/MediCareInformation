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
    margin-left:8.75cm;
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
    margin-bottom: 30px;
    padding: 6px 10px 10px 10px;
  }

  .form-group input{
    height: 35px;
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
    margin-left: 600px;
    margin-top:-2.5cm;
  }

  .btn:hover{
    background-color: #264d69;
    color: white;
  }

</style>

  <div class="first" style="background-image: url('https://image.freepik.com/free-photo/doctor-patient_1421-64.jpg'); ">
    
    
    <div class="main">
      <u><h5 style="padding-left: 7cm; padding-bottom: 0.01cm; padding-top: 0.01cm;">Add Patient-Patient Details</h5></u>
    <form action="/svpatient" method="POST">
    @csrf
          
          <div class="form-group">
            <h2 class="name">Name</h2>
            <input type="text" name="pname" placeholder="Enter Name"  class="form-control @error('pname') is-invalid @enderror" value="{{ old('pname') }}" required autocomplete="pname">
            @error('pname')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
          </div>
         
          <div class="form-group">
            <h2 class="name">E-mail</h2>
            <input type="email" name="pemail" placeholder="Enter Email" class="form-control @error('pemail') is-invalid @enderror" value="{{ old('pemail') }}" required autocomplete="pemail">
            @error('pemail')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror          
          </div>

          <div class="form-group">
            <h2 class="name">Phone Number</h2>
            <input type="text" name="pphone" placeholder="Enter Phone Number" class="form-control @error('pphone') is-invalid @enderror" value="{{ old('pphone') }}" required autocomplete="pphone">
            @error('pphone')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
          </div>
         
          <div class="form-group">
            <h2 class="name">Address</h2>
            <input type="text" name="paddress" placeholder="Enter Address" class="form-control @error('paddress') is-invalid @enderror" value="{{ old('paddress') }}" required autocomplete="paddress">
            @error('paddress')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
          </div>
          
          
          <div class="form-group">
            <h2 class="name">Date of Bday</h2>
            <input type="date" name="pbday"  id="date" placeholder="Enter Birthday" class="form-control @error('pbday') is-invalid @enderror" value="{{ old('pbday') }}" required autocomplete="pbday">
            @error('pbday')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
          </div>

          
          <div class="form-group">
            <h2 class="name">Occupation</h2>
            <input type="text" name="poccupation" placeholder="Enter Occupation" class="form-control @error('poccupation') is-invalid @enderror"  value="{{ old('poccupation') }}" required autocomplete="poccupation">
            @error('poccupation')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
          </div>
            
            <div class="form-group">
                <h2 class="name">Blood Group</h2>
                <select name="pblood"  class="form-control @error('pblood') is-invalid @enderror"value="{{ old('pblood') }}" required autocomplete="pblood">      
                <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="O+">O+</option>
                <option value="O-">O-</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
                </select>
                @error('pblood')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        
            <div class="form-group">
              <h2 class="name">Alergy Medicine</h2>
              <input type="text" name="palmedicine" placeholder="Enter Alergy Medicines" class="form-control @error('palmedicine') is-invalid @enderror"  value="{{ old('palmedicine') }}" required autocomplete="palmedicine">
              @error('palmedicine')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
              @enderror            
            </div>

            <h2 class="name">&nbsp&nbspGender</h2>
            <h1 class="name" style="margin-left: 6.1cm; margin-top: -0.7cm;">
            <div class="form-check-inline">
              <label class="form-check-label" >
                <input type="radio" class="form-check-input" id="radio1" name="pgender" value="male" required autocomplete="pgender">Male&nbsp&nbsp&nbsp&nbsp&nbsp
              </label>
            </div>
            <div class="form-check-inline">
              <label class="form-check-label">
                <input type="radio" class="form-check-input" id="radio2" name="pgender" value="female" required autocomplete="pgender">Female
              </label>
            </div>
              @error('pgender')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
              @enderror 
            </h1>
          
            <h2 class="name">&nbsp&nbspMaritial Status</h2>
            <h1 class="name" style="margin-left: 6.1cm; margin-top: -0.7cm;">
            <div class="form-check-inline">
              <label class="form-check-label" for="radio1">
                <input type="radio" class="form-check-input" id="radio1" name="pstatus" value="married" required autocomplete="ptatus">Married
              </label>
            </div>
            <div class="form-check-inline">
              <label class="form-check-label" for="radio2">
                <input type="radio" class="form-check-input" id="radio2" name="pstatus" value="unmarried" required autocomplete="pstatus">Unmarried
              </label>
            </div>
              @error('pstatus')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
              @enderror 
            </h1>
          
            <button type="submit" class="btn">
                  {{ __('Ok') }}
            </button>
        
          
    </form>
      
    </div>
      
    
  </div>

@endsection