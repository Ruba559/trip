@extends('layouts.app')


@section('content_head')
<link href="../../dist/css/style.min.css" rel="stylesheet">
    <link href="../My Assets/css/bootstrap.min.css" rel="stylesheet">
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
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header">
           
                    <a class="navbar-brand" href="index.html">
                        <!-- Logo icon -->
                      
                        Trips Aid
                    </a>
             
                    <!-- ============================================================== -->
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)"
                        data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i
                            class="ti-more"></i></a>
                </div>
              
                <div class="navbar-collapse collapse" id="navbarSupportedContent">
         
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
 
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- User profile -->
                <div class="user-profile position-relative" style="background-color:rgb(93, 118, 133) ; ">
                    <!-- User profile image -->
                    <div class="profile-img"> <img src="../assets/images/users/6.jpg" alt="user" class="w-100 rounded-circle" /> </div>
                    <!-- User profile text-->
                    <div class="profile-text pt-1"> 
                        <sapn class=" UserName w-100 text-white d-block position-relative"role="button" aria-haspopup="true" aria-expanded="true">Markarn Doe</span>
                        
                    </div>
                </div>
                <!-- End User profile text-->
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                   
                        
                
                    <ul id="sidebarnav" class="in">
                        
                
                        
                        <ul aria-expanded="false" class="collapse first-level in">
                            <li class="sidebar-item "><a href="overlay-user tables.html" class="sidebar-link "><i class="fas fa-user"></i><span class="hide-menu"> User table </span></a></li>
                            <li class="sidebar-item"><a href="overlay-Service managers tables.html" class="sidebar-link"><i class="fas fa-table"></i><span class="hide-menu"> Services managers tables </span></a></li>
                            <li class="sidebar-item active"><a href="overlay-Places table.html" class="sidebar-link active"><i class=" fas fa-warehouse"></i><span class="hide-menu">Places tables </span></a></li>
                            
                        </ul>
                   
        
        <!-- End Bottom points-->
    </ul>
                       
                        
            <!-- Bottom points-->
            <div class="sidebar-footer">
               
                <a href="" class="link" data-toggle="tooltip" title="Logout"><i class="mdi mdi-power"></i></a>
            </div>
            <!-- End Bottom points-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="row page-titles">
                <div class="col-md-5 col-12 align-self-center">
                    <h3 class="text-themecolor mb-0">Places table</h3>
                    <ol class="breadcrumb mb-0 p-0 bg-transparent">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Places table</li>
                    </ol>
                </div>
          
            </div>
        
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
               
                <div class="widget-content searchable-container list">
					
                    <div class="card card-body ">
                        
                                <div class="col-md-12 w-100">
                                    <form>
                                        <input type="text" class="form-control product-search" id="input-search" placeholder="Search Account...">
                                    </form>
                                </div>
                               
                        </div>
                    </div>
                   
                 
					
                    <div class="card card-body">
                        <div class="table-responsive">
                            <table class="table table-striped search-table v-middle">
                                <thead class="header-item">
									<th class="text-dark font-weight-bold"></th>
                                    <th class="text-dark font-weight-bold"><i class="icon-user"></i> Name</th>
                                    <th class="text-dark font-weight-bold"><i class=" mdi mdi-email-outline"></i> Email</th>
                                    <th class="text-dark font-weight-bold"><i class=" fas fa-star"></i> Stars</th>
                                    <th class="text-dark font-weight-bold"><i class="icon-location-pin"></i>Address</th>
									<th class="text-dark font-weight-bold"><i class=" fas fa-location-arrow"></i> Region</th>
                
									<th class="text-dark font-weight-bold"><i class=" fas fa-warehouse"></i> Place type</th>
									<th class="text-center">
                                        <div class="action-btn">
                                            <a href="javascript:void(0)" class="delete-multiple  text-danger"><i class="fas fa-trash font-18 font-medium"></i> Delete Row</a>
                                        </div>
                                    </th>
                                   
                                </thead>
                                <tbody>
                                    <!-- row -->
                                    @foreach($places as $place)
                                    <tr class="search-items">
                                    
										<td>
										  <img src="../assets/images/background/تنزيل.jpg" alt="avatar" width="35"  data-toggle="modal"
                                          data-target="#bs-example-modal-lg">
										</td>
                                        <td>
											 <span class="user-name mb-0">{{ $place->place_name }}</span>
                                            
                                        </td>
									     <td>
											 <span class="usr-email-addr mb-0" data-email="">{{ $place->Email }}</span>
                                            
                                        </td>
										
                                        <td>
                                            <span >{{ $place->stars }} </span>
                                        </td>
                                        <td>
                                            <span>{{ $place->address }}</span>
                                        </td>
                                      
                                        </td>
                                        <td>
                                            <span>{{ $regoin->region_name }}</span>
                                        </td>
        
                                        <td>
                                            <span > <select id="LockedAccont" data-placeholder="Select a state..." class="  bg-transparent select2-with-icons form-control select2-hidden-accessible" id="select2-with-icons" style="width: 100%; height:36px;" data-select2-id="select2-with-icons" tabindex="-1" aria-hidden="true" onChange="BorderColor()">
                                   
                                                <option value="green" > Hotel</option>
                                                <option value="blue"  data-select2-id="47"> House</option>
                                         
                                        </select></span>
                                    </td>
                                        <td class="text-center">
                                            <div class="action-btn">
                                                <a class="text-dark ml-2" ><i class="mdi mdi-delete font-20" data-toggle="modal" data-target="#centermodal"></i></a>
                                            </div>
                                        </td>
									</tr>
                                    <!-- /.row -->
									
                                </tbody>
                          
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->



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
                                <a href="remove_To_place/{{$place->id}}" id="BookingUnConf" class="btn btn-danger"  data-dismiss="modal">Delete</a>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                @endforeach
            </table>
                <!--===========================EndDelete Row========================-->




                  <!--=================== place photo  modal===========================-->

                  <div class="modal fade" id="bs-example-modal-lg" tabindex="-1" role="dialog"
                  aria-labelledby="myLargeModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-lg ">
                      <div class="modal-content">
                          
                          <div class="modal-body p-0">
                             <img src="images/تنزيل.jpg" width="100%">
                          </div>
                      </div><!-- /.modal-content -->
                  </div><!-- /.modal-dialog -->
              </div><!-- /.modal -->
            <footer class="footer">
                © 2021 Trips aid team
            </footer>
           
        </div>
      
    </div>
    
   
</body>


    @endsection