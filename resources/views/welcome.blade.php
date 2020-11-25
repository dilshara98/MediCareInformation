<?php $page = 'welcome';?>
@extends('layouts.app')

@section('content')


             <div id="demo" class="carousel slide" data-ride="carousel">

               <ul class="carousel-indicators">
                 <li data-target="#demo" data-slide-to="0" class="active"></li>
                 <li data-target="#demo" data-slide-to="1"></li>
                 <li data-target="#demo" data-slide-to="2"></li>
               </ul>
                 
               <!-- The slideshow -->
                   <div class="carousel-inner">
                         <div class="carousel-item active">
                           <img src="https://image.freepik.com/free-photo/young-doctor-supporting-his-patient_1098-2237.jpg" alt="homeimg1" width="100%" height="488"> 
                         </div>
                         <div class="carousel-item">
                           <img src="https://image.freepik.com/free-photo/senior-couple-consulting-nurse_256588-839.jpg" alt="homeimg2" width="100%" height="488">
                         </div>
                         <div class="carousel-item">
                           <img src="https://cdn.pixabay.com/photo/2017/10/05/22/35/surgeon-2821375_960_720.jpg" alt="homeimg3" width="100%" height="488">
                         </div>
                   </div>
                     <a class="carousel-control-prev" href="#demo" data-slide="prev">
                       <span class="carousel-control-prev-icon"></span>
                     </a>
                     <a class="carousel-control-next" href="#demo" data-slide="next">
                       <span class="carousel-control-next-icon"></span>
                     </a>
             </div>

@endsection