<?php $page = 'pharmacistdetails';?>
@extends('layouts.app')

@section('content')


<style>
    .table{
        width:25cm;
        margin-left:2cm;
        border-collapse: collapse;
        border-width: 1cm;
    }
</style>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <div class="container" style="padding-left:20cm;">
        <form class="form-inline" action="/searchpharma" >
        <input class="form-control mr-sm-2" type="text" placeholder="Search" >
        <button class="btn btn-success" type="submit">Search</button>
        </form>
    </div>     
</nav>
<div class="first" style="background-image: url('https://image.freepik.com/free-photo/hands-holding-paper-family-cutout-with-stethoscope_63176-1186.jpg');height:434px; ">


    
    <div class="container">  
<table class="table table-light">
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Phone</th>
    
    
    @foreach ($pharmacistdetails as $item)

    <tr>
        <td>{{$item->id}}</td>
        <td>{{$item->phname}}</td>
        <td>{{$item->phemail}}</td>
        <td>{{$item->phphone}}</td>
        
        <td>
        
  
    <a href="/updatepharma/{{$item->id}}" class="btn btn-warning"> Update</a>
    &nbsp;&nbsp;&nbsp;
    <a href="/deletepharma/{{$item->id}}" class="btn btn-danger">Delete</a> 
        </td>
    </tr>
    
    @endforeach
</table>
</div>
</div>
@endsection