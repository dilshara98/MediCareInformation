<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
        <meta charset="utf-8">
        
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>MediCareInformation</title>

        <!-- Fonts -->
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>


        <!-- Styles -->
<style>
            


.navbar-custom{
    background: linear-gradient(rgba(0,0,0, .1), rgba(0,0,0, .3));
}

    
.navbar-custom .navbar-brand{
    color: whitesmoke;
   
}

.menu-item{
  float: left;
  display: block;
  color: #F2F7F7;
  text-align: top right;
  padding: 0.0001px 30px;
  text-decoration: none;
  font-size: 20px;
  font-family: Arial;
}
.menu-item:hover{
  background-color: none;
  color: black;
}

.nav-active{
    color:wheat;
    
}
.first{
    background-repeat: no-repeat; 
    background-size: cover; 
    height:488px; 
    width:100%; 
    background-position:absolute; 
    padding-top: 1cm;
}
</style>
</head>

    <body>
        <header style="background-color: #094263; ">
            <nav class="navbar navbar-expand-md navbar-custom">
                        
                <img src="https://image.freepik.com/free-photo/top-view-world-heart-day-concept-with-stethoscope_23-2148631026.jpg" class="rounded-circle" alt="logo" width="175" height="125" style="margin-left:50px;">  
                <br><a class="navbar-brand" style="font-size:45px;font-family: 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;font-style:normal;  padding:10px 10px; color: khaki; margin-bottom: 0.001cm; ">MediCare
                <br><h1 style="font-size:30px;font-family: 'Calibri', 'Trebuchet MS', sans-serif;font-style:normal;  color: rgb(245, 233, 165); padding:0  ">INFORMATION</h1> </a>
                    <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarMenu" aria-controls="navbarNavDropdown" aria-expanded="false">
                            <span class="navbar-toggler-icon">
                            <i class="fa fa-navicon" style="color:white; font-size:28px;"></i>
                            </span>
                    </button>

                    <div class="collapse navbar-collapse font-weight-bold" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav mr-auto">

                        </ul>
                            
                            <!-- Right Side Of Navbar -->
                            <ul class="navbar-nav ml-auto" style="padding-right:40px ;">
                                <!-- Authentication Links -->
                                @guest
                                <li class="nav-item">
                                    <a class="nav-link m-2 menu-item <?php if($page=='welcome'){ echo "nav-active"; }?>" href="/">Home</a>
                                    </li>
                           
                                    <li class="nav-item">
                                    <a class="nav-link m-2 menu-item <?php if($page=='register'){ echo "nav-active"; }?>"  href="{{ route('register') }}">Register Now</a>
                                    </li>
                               
                                    <li class="nav-item">
                                    <a class="nav-link m-2 menu-item <?php if($page=='login'){ echo "nav-active"; }?>" href="{{ route('login') }}">LogIn</a>
                                    </li>
                                    
                                    <li class="nav-item">
                                    <a class="nav-link m-2 menu-item <?php if($page=='contact'){ echo "nav-active"; }?>" href="/contact">Contact Us</a>
                                    </li>
                                @else
                                    @auth

                                    @if(Auth::user()->occupation=='doctor')

                                        <li class="nav-item" >
                                        <a class="nav-link m-2 menu-item  <?php if($page=='welcome'){ echo "nav-active"; }?>" href="/">Home</a>
                                        </li>

                                        
                                        <li class="nav-item dropdown">
                                        <a class="nav-link m-2 menu-item dropdown-toggle <?php if($page=='patientdetails'){ echo "nav-active"; }?>" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Patient Details
                                        </a>
                                        <div class="dropdown-menu " style="background-color: rgba(157, 191, 236, 0.781); padding:60px; border-radius: 0.1cm; border-color: none; ">
                                    
                                            <a class="dropdown-item" href="{{ url('/addpatient') }}">Add Patient</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="{{ url('/viewpatient') }}">View Patient</a>
                                            
                                        </div>
                                        </li>

                                        <li class="nav-item dropdown">
                                        <a class="nav-link m-2 menu-item dropdown-toggle <?php if($page=='pharmacistdetails'){ echo "nav-active"; }?>" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Pharmacist Details
                                        </a>
                                        <div class="dropdown-menu " style="background-color: rgba(157, 191, 236, 0.781); padding:60px; border-radius: 0.1cm; border-color: none; ">
                                    
                                            <a class="dropdown-item" href="{{ url('/addpharma') }}">Add Pharmacist</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="{{ url('/viewpharma') }}">View Pharmacist</a>
                                        </div>
                                        </li>

                                        <li class="nav-item">
                                        <a class="nav-link m-2 menu-item <?php if($page=='contact'){ echo "nav-active"; }?>" href="/contact">Contact Us</a>
                                        </li>
                                        
                                        <li class="nav-item">
                                        <a class="nav-link m-2 menu-item <?php if($page=='changepw'){ echo "nav-active"; }?>" href="{{ url('/changepw') }}">Change Password</a>
                                        </li>

                                        <li class="nav-item">
                                                
                                                    <a class="nav-link" href="{{ route('logout') }}"
                                                    onclick="event.preventDefault();
                                                                    document.getElementById('logout-form').submit();" style="margin-top:-45px;color:red;margin-right:-1.4cm;">
                                                        {{ __('Logout') }}
                                                    </a>

                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                        @csrf
                                                    </form>
                                                
                                        </li>

                                    @elseif(Auth::user()->occupation=='pharmacist')
                                        <li class="nav-item">
                                        <a class="nav-link m-2 menu-item <?php if($page=='home'){ echo "nav-active"; }?>" href="/home">Home</a>
                                        </li>

                                        <li class="nav-item">
                                        <a class="nav-link m-2 menu-item <?php if($page=='appoinments'){ echo "nav-active"; }?>" href="{{ url('/appoinments') }}">Appointments</a>
                                        </li>

                                        <li class="nav-item">
                                        <a class="nav-link m-2 menu-item <?php if($page=='prescription'){ echo "nav-active"; }?>" href="{{ url('/prescriptions') }}">Prescriptions</a>
                                        </li>

                                        <li class="nav-item">
                                        <a class="nav-link m-2 menu-item <?php if($page=='contact'){ echo "nav-active"; }?>" href="/contact">Contact Us</a>
                                        </li>
                                        
                                        <li class="nav-item">
                                        <a class="nav-link m-2 menu-item <?php if($page=='changepw'){ echo "nav-active"; }?>" href="{{ url('/changepw') }}">Change Password</a>
                                        </li> 

                                        <li class="nav-item">
                                            
                                                    <a class="nav-link" href="{{ route('logout') }}"
                                                    onclick="event.preventDefault();
                                                                    document.getElementById('logout-form').submit();" style="margin-top:-45px;color:red;margin-right:-1.4cm;">
                                                        {{ __('Logout') }}
                                                    </a>

                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                        @csrf
                                                    </form>
                                                
                                        </li>


                                    @else
                                        <li class="nav-item">
                                        <a class="nav-link m-2 menu-item <?php if($page=='home'){ echo "nav-active"; }?>" href="/home">Home</a>
                                        </li>

                                        <li class="nav-item">
                                        <a class="nav-link m-2 menu-item <?php if($page=='regdetails'){ echo "nav-active"; }?>" href="{{ url('/regdetails') }}">Register Details</a>
                                        </li>

                                        <li class="nav-item">
                                        <a class="nav-link m-2 menu-item <?php if($page=='condetails'){ echo "nav-active"; }?>" href="{{ url('/condetails') }}">Contact Messages</a>
                                        </li>
                                        
                                        <li class="nav-item">
                                        <a class="nav-link m-2 menu-item <?php if($page=='changepw'){ echo "nav-active"; }?>" href="{{ url('/changepw') }}">Change Password</a>
                                        </li>

                                        <li class="nav-item">
                                                
                                                    <a class="nav-link" href="{{ route('logout') }}"
                                                    onclick="event.preventDefault();
                                                                    document.getElementById('logout-form').submit();" style="margin-top:-45px;color:red;margin-right:-1.4cm;">
                                                        {{ __('Logout') }}
                                                    </a>

                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                        @csrf
                                                    </form>
                                                
                                        </li>
                                        
                                    @endif
                                        
                                    @endauth
                                @endguest
                            </ul>
                    
                    </div>
            </nav>
        </header>
                <main>
                    @yield('content')
                </main>  
    </body>
</html>
