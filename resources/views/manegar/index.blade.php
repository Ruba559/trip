@extends('layouts.app')


@section('content_head')

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>index</title>
    <link rel="stylesheet" href="lib/bootstrap.min-SmIndex.css">
    <style>
        #main-wrapper[data-layout=horizontal] .topbar .top-navbar .navbar-header[data-logobg=skin5], #main-wrapper[data-layout=vertical] .topbar .top-navbar .navbar-header[data-logobg=skin5]{
    background-color:#2B6DAD;  }
wrapper[data-layout=horizontal] .topbar .navbar-collapse[data-navbarbg=skin5], #main-wrapper[data-layout=horizontal] .topbar[data-navbarbg=skin5], #main-wrapper[data-layout=vertical] .topbar .navbar-collapse[data-navbarbg=skin5], #main-wrapper[data-layout=vertical] .topbar[data-navbarbg=skin5]
{
    background-color:#2B6DAD;   
}

        </style>
     <link href="lib/footer.css" rel="stylesheet">
     
@endsection

@section('content')

@include('layouts.header-sm')
<body>
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
    <header class="masthead text-center text-white">
        <div class="masthead-content">
            <div class="container">
            
                  
                      
                 
             
           <h1 class="masthead-heading mb-0">{{ $places->place_name }}</h1> 
           <form action="place_info" method="POST">@csrf
              <h2 class="masthead-subheading mb-0">&nbsp;</h2><button type="submit" class="btn btn-dark btn-xl rounded-pill mt-5" role="button">Edit place information</button></div>
              <input type="hidden" name="id" value="{{ $places->id }}">
            
            </form>
            
        </div>
        
        <div class="bg-circle-1 bg-circle"></div>
        <div class="bg-circle-2 bg-circle"></div>
        <div class="bg-circle-3 bg-circle"></div>
        <div class="bg-circle-4 bg-circle"></div>
    </header>
    <section>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 order-lg-2">
                    <div class="p-5"><img class="rounded-circle img-fluid" src="./Service manager Index_files/01.jpg"></div>
                </div>
                <div class="col-lg-6 order-lg-1">
                    <div class="p-5">
                        <h2 class="display-4">Room Manager</h2>
                        <p>You can manage the existing room information and amend it or add a grandfather room..</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
          
            <div class="row align-items-center">
                <div class="col-lg-6 order-lg-1">
                    <div class="p-5"><img class="rounded-circle img-fluid" src="./Service manager Index_files/02.jpg"></div>
                </div>
                <div class="col-lg-6 order-lg-2">
                    <div class="p-5">
                        <h2 class="display-4"><strong>Manage reservations</strong></h2>
                        <p>Confirm or cancel reservations, or view the passport schedule ...</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 order-lg-2">
                    <div class="p-5"></div>
                </div>
            </div>
        </div>
    </section>
    </div>
    @include('layouts.footer')
    <script src="./Service manager Index_files/jquery-3.4.1.min.js.download"></script>
    <script src="./Service manager Index_files/bootstrap.min.js.download"></script>
    <script id="bs-live-reload" data-sseport="59181" data-lastchange="1620430500618" src="./Service manager Index_files/livereload.js.download"></script>


</body>
@endsection