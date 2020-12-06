<?php $page = 'patientdetails';?>
@extends('layouts.app')

@section('content')


<style>
  .table{
      width:30cm;
      margin-left:0.5cm;
      border-collapse: collapse;
      border-width: 1cm;
  }

  .name{
    font-size: 15px;
    font-weight: 700;
  }

  .form-group{
    height: 5px;
    margin-bottom: 40px;
  }

  
  .form-group input{
    font-size: 18px;
    font-weight: 600;
    letter-spacing: 2px;
    padding-left: 25px;
  }

  .form-control{
    position: relative;
    left: 175px;
    line-height: 20px;
    width: 300px;
    border-radius: 6px;
    font-size: 16px;
    color: #555;
  }  
  
    
</style>

<div class="first" style="background-image: url('https://image.freepik.com/free-photo/hands-holding-paper-family-cutout-with-stethoscope_63176-1186.jpg');9 ">


<div class="container">
<table class="table table-light">
    <th>Reg No</th>
    <th>Name</th>
    <th>Age</th>
    <th>Gender</th>
    <th>Phone</th>
    @foreach ($patientdetails as $item)

    <tr>
        <td>{{$item->id}}</td>
        <td>{{$item->pname}}</td>
        <td>{{$item->pbday}}</td>
        <td>{{$item->pgender}}</td>
        <td>{{$item->pphone}}</td>
        
        <td>
        
          
        <a href="/viewpatient/{{$item->id}}" class="btn btn-success">View Patient</a> 
        <a href="/viewmedi/{{$item->id}}" class="btn btn-success">View Medications</a> 
        <a href="/newmedi/{{$item->id}}" class="btn btn-primary">New Medication</a> 
        <a href="/deletepatient/{{ $item->id}}" class="btn btn-danger">Delete</a> 
        </td>
    </tr>
    
    @endforeach
</table>
</div>

@endsection