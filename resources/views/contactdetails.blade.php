<?php $page = 'condetails';?>
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

<div class="first" style="background-image: url('https://image.freepik.com/free-photo/physician-consulting-his-patient-clinic_1303-17887.jpg');">


<div class="container">
<table class="table table-light">
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Phone</th>
    <th>Message</th>
    
    @foreach ($contactdetails as $item)

    <tr>
        <td>{{$item->id}}</td>
        <td>{{$item->cname}}</td>
        <td>{{$item->cemail}}</td>
        <td>{{$item->cphone}}</td>
        <td>{{$item->cmsg}}</td>
        
        
        <td>
            @if($item->isCompleted)
            <button class="btn btn-success">Replied</button>
            @else

            <button class="btn btn-warning"> Not Replied</button>
            @endif
            </td>
            <td>
            @if(!$item->isCompleted)
            
            <a href="/markasreplied/{{$item->id}}" class="btn btn-primary">Mark as Replied</a>
            @else
            <a href="/markasnotreplied/{{$item->id}}" class="btn btn-warning">Mark as Not Replied</a>
            @endif
            &nbsp;&nbsp;&nbsp;
            <a href="/condelete/{{$item->id}}" class="btn btn-danger">Delete</a>
            
            </td>
       
    </tr>
    
    @endforeach
</table>
</div>
@endsection