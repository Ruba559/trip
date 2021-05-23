@extends('layouts.app')


@section('content_head')

<style>
    .UserName{
        background-color: rgba(72, 80, 82, 0.356);
    }
    a:hover{
        text-decoration: none;
    }
    
</style>
@endsection


@section('content')

<body>

    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <div id="main-wrapper">
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i
                            class="ti-menu ti-close"></i></a>
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="index.html">
                        <!-- Logo icon -->
                      
                        Trips Aid
                    </a>
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)"
                        data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i
                            class="ti-more"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav mr-auto float-left">
                        <!-- This is  -->
                        <li class="nav-item"> <a
                                class="nav-link sidebartoggler d-none d-md-block waves-effect waves-dark"
                                href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-right">
                        <!-- ============================================================== -->
                  
        </header>
   
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- User profile -->
                <div class="user-profile position-relative" style="background-color:rgb(93, 118, 133) ; ">
                    <!-- User profile image -->
                    <div class="profile-img"> <img src="../assets/images/users/6.jpg" alt="user" class="w-100 rounded-circle" /> </div>
                    <!-- User profile text-->
                    <div class="profile-text pt-1"> 
                        <sapn class=" UserName w-100 text-white d-block position-relative"role="button" aria-haspopup="true" aria-expanded="true">Rula hamed</span>
                        
                    </div>
                </div>
                <!-- End User profile text-->
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                   
                        
                
                    <ul id="sidebarnav" class="in">
                        
                
                        
                        <ul aria-expanded="false" class="collapse first-level in">
                            <li class="sidebar-item "><a href="overlay-user tables.html" class="sidebar-link "><i class="fas fa-user"></i><span class="hide-menu"> User table </span></a></li>
                            <li class="sidebar-item active"><a href="overlay-Service managers tables.html" class="sidebar-link active"><i class="fas fa-table"></i> <span class="hide-menu"> Services managers tables </span></a></li>
                            <li class="sidebar-item"><a href="overlay-Places table.html" class="sidebar-link"><i class=" fas fa-warehouse"></i><span class="hide-menu"> Places tables </span></a></li>
                            
                        </ul>
                
    </ul>
                       
                        
            <!-- Bottom points-->
            <div class="sidebar-footer">
               
                <a href="" class="link" data-toggle="tooltip" title="Logout"><i class="mdi mdi-power"></i></a>
            </div>
            <!-- End Bottom points-->
        </aside>
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="row page-titles">
                <div class="col-md-5 col-12 align-self-center">
                    <h3 class="text-themecolor mb-0">Service managers table</h3>
                    <ol class="breadcrumb mb-0 p-0 bg-transparent">
                        <li class="breadcrumb-item"><a href="/index_admin">Home</a></li>
                        <li class="breadcrumb-item active">Service managers table</li>
                    </ol>
                </div>
          
            </div>
     
            <div class="container-fluid">
               
             
                <div class="container-fluid">
             
                    <div class="row">
                        <div class="col-12">
    
                            <!-- Column -->
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Service managers' Requests</h4>
                                    <h6 class="card-subtitle">Accept or refuse to join a new service manager</h6>
                                    <div class="table-responsive">
                                        <table id="demo-foo-row-toggler" class="table table-bordered"
                                            data-toggle-column="first">
                                            <thead>
                                                <tr>
                            
                                                    <th>First Name</th>
                                                    <th>Last Name</th>
                                                    <th data-breakpoints="xs sm">Mobile No</th>
                                                    <th data-breakpoints="xs">Email</th>
                                                    <th data-breakpoints="xs">Date of Birth</th>  
                                                    <th data-breakpoints="all" data-title="Place Name">Place Name</th>
                                                    <th data-breakpoints="all" data-title="Region">Region</th>
                                                    <th data-breakpoints="all" data-title="Address">Address</th>
                                                    <th data-breakpoints="all" data-title="Email">Email</th>
                                                    <th data-breakpoints="all" data-title="Stars">Stars</th>
                                                    <th data-breakpoints="all" data-title="PlaceType">PlaceType</th>
                                                    <th data-breakpoints="all" data-title="certificate">image</th>
                                                    <th data-breakpoints="all" data-title="IsProven">IsProven</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <!--=====Row======-->

                                                <tr data-expanded="false" class="search-items">
                                                   
                                                    @foreach ($servicemanegarsnotproven as $item)
                                        
                                    
                                                    @foreach($item->serviceManegar as $row)
                                                    
                                                    <td>
                                                        <a href="javascript:void(0)"><img
                                                                src="../assets/images/users/4.jpg" alt="user" width="40"
                                                                class="rounded-circle" />{{ $row->first_name }}</a>
                                                    </td>
                                                    
                                                    <td>{{ $row->last_name }}</td>
                                                    <td>{{ $row->phone_number }}</td>
                                                    <td>{{ $row->Email }}</td>
                                                    <td><span class="label label-danger">   1/2/1998</span> </td>

                                                    <td>{{ $row->place_name }}</td>
                                                    <td>City Center</td>
                                                    <td>Abo remana</td>
                                                    <td>ForSeason@gmail.com</td>
                                                    <td>5</td>
                                                    <td>Hotel</td>
                                                    <td><button type="button" class="btn btn-light-info" data-toggle="modal"
                                                        data-target="#bs-example-modal-lg">Show the certificate </button></td>
                                                    <td>
                                                        <button class="btn btn-dark-success" data-toggle="modal" data-target="#exampleModal">Prove</button>
                                                    </td>
                                                </tr>
                                                @endforeach
                                                </tbody>
                                        </table>
                                    </div>
                                    </div></div>
                                    </div></div>
                    
                        <div class="card">
                             
                   
                            <div class="card-body">
                                <div class="widget-content searchable-container list">
                                
                                    <div class="card card-body ">
                                        <h4 class="card-title">service Manager Account</h4>
                                        <h6 class="card-subtitle">All service Manager Account</h6>
                                                <div class="col-md-12 w-35">
                                                   
                                                    <form>
                                                        <input type="text" class="form-control product-search" id="input-search" placeholder="Search Account...">
                                                    </form>
                                                </div>
                                               
                                        </div>
                                    </div>
                                <div class="table-responsive">
                                    <table id="demo-foo-row-toggler" class="table table-bordered search-table"
                                        data-toggle-column="first">
                                        <thead>
                                            <tr>
                                                <th data-breakpoints="xs">ID</th>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th data-breakpoints="xs sm">Mobile No</th>
                                                <th data-breakpoints="xs">Email</th>
                                                <th data-breakpoints="xs">Date of Birth</th> 
                                                <th data-breakpoints="xs">Place</th>
                                                <th data-breakpoints="xs">
                                                   Delete
                                                </th> 
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!--=====Row======-->
                                            @foreach($servicemanegarsproven as $servicemanegarproven)
                                            <tr data-expanded="false" class="search-items">
                                                <td>1</td>
                                                <td>
                                                    <a href="javascript:void(0)"><img
                                                            src="../assets/images/users/4.jpg" alt="user" width="40"
                                                            class="rounded-circle" /> {{ $servicemanegarproven->first_name }} </a>
                                                </td>
                                                
                                                <td> {{ $servicemanegarproven->last_name }}</td>
                                                <td>{{ $servicemanegarproven->phone_number }}</td>
                                                <td>{{ $servicemanegarproven->Email }}</td>
                                                <td><span class="label label-danger">   1/2/1998</span> </td>
                                                <td>{{ $servicemanegarproven->Email }}</td>
                                            
                                                <td><a class="text-dark ml-2" ><i class="mdi mdi-delete font-20" data-toggle="modal" data-target="#centermodal"></i></a>
                                                </td>
                                            </tr>
                                         
                                </div>
                                </div></div>
                        </div>
                     
                    <!-- ========================= end Service manager Table=====================-->
                    <!--=======================================================================-->
    
                      <!--===========================Delete Row========================-->

                      <div class="modal fade" id="centermodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header bg-danger">
                                    <h5 class="modal-title  text-white" id="exampleModalLongTitle">Delete this Row</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p class="font-20 font-weight-bolder text-dark">Are you sure to Delete This Row ?</p>
                                    <div class="modal-footer">
                                        <button id="BookingConf" class="btn btn-light-info deleteRow" data-dismiss="modal">Cancel</button>
                                        <a href="remove_service_manegar/{{ $servicemanegarproven->id }}" id="BookingUnConf" class="btn btn-danger">Delete</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                        @endforeach
                        @endforeach
                    </tbody>
                </table>
                
                        <!--===========================EndDelete Row========================-->
    
                      <!-----================prove service Admin======================-->
    
                      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
     
        
                        <div class="modal-dialog" role="document">
    <div class="modal-content">
    <div class="modal-header">
    <h5 class="modal-title" id="exampleModalLongTitle">prove service Manager</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
    </div>
    <div class="modal-body bgColorAll">
    <form class="form-horizontal mt-3">
    <h4>Are You sure to prove this To be Service manager</h4>
    <div class="modal-footer">
    
    <button class="btn btn-danger">UnProve</button>
    <button type="submit" class="btn btn-success  done" id="done" data-dismiss="modal">prove this</button>
    </div>
    </form>
    </div>
    
    </div>
    </div>
    </div>
    
                      <!--===========================EndAprove========================-->

                      <!--====================certificate  modal===========================-->
    
                    <div class="modal fade" id="bs-example-modal-lg" tabindex="-1" role="dialog"
                                        aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg ">
                                            <div class="modal-content">
                                                
                                                <div class="modal-body p-0">
                                                    <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
                                                        <ol class="carousel-indicators">
                                                            <li data-target="#carouselExampleIndicators2" data-slide-to="0" class=""></li>
                                                            <li data-target="#carouselExampleIndicators2" data-slide-to="1" class=""></li>
                                                            <li data-target="#carouselExampleIndicators2" data-slide-to="2" class="active"></li>
                                                        </ol>
                                                        <div class="carousel-inner" role="listbox">
                                                            <div class="carousel-item">
                                                                <img class="img-fluid" src="../assets/images/big/img3.jpg" alt="First slide">
                                                            </div>
                                                            <div class="carousel-item">
                                                                <img class="img-fluid" src="../assets/images/big/img4.jpg" alt="Second slide">
                                                            </div>
                                                            <div class="carousel-item active">
                                                                <img class="img-fluid" src="../assets/images/big/img5.jpg" alt="Third slide">
                                                            </div>
                                                        </div>
                                                        <a class="carousel-control-prev" href="#carouselExampleIndicators2" role="button" data-slide="prev">
                                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                            <span class="sr-only">Previous</span>
                                                        </a>
                                                        <a class="carousel-control-next" href="#carouselExampleIndicators2" role="button" data-slide="next">
                                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                            <span class="sr-only">Next</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div><!-- /.modal-content -->
                                        </div><!-- /.modal-dialog -->
                                    </div><!-- /.modal -->
    
            </div>
            <footer class="footer">
                © 2020 Material Pro Admin by wrappixel.com
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>

 
</body>


@endsection