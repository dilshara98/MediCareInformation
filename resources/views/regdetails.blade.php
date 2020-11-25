<?php $page = 'regdetails';?>
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

<div class="first" style="background-image: url('https://image.freepik.com/free-photo/female-doctor-working-medicine-specialist_144627-30292.jpg');">

<div class="container">
<table class="table table-dark">
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Phone</th>
    <th>Category</th>
    @foreach ($registerdetails as $item)

    <tr>
        <td>{{$item->id}}</td>
        <td>{{$item->name}}</td>
        <td>{{$item->email}}</td>
        <td>{{$item->phone}}</td>
        <td>{{$item->occupation}}</td>
        <td>
        
        <a href="/regupdate/{{$item->id}}" class="btn btn-warning">Update</a>  
        <a href="/regdelete/{{$item->id}}" class="btn btn-danger">Delete</a> 
        </td>
    </tr>
    
    @endforeach
</table>
</div>
@endsection