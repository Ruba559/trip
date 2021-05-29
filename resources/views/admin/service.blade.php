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
<link href="lib/footer.css" rel="stylesheet">

<style>

    .container {
      max-width: 960px;
    }
    .navbar-survival101 {
      background-color:#2B6DAD;
    }
    /* .navbar-survival101 .navbar-brand {
      margin-right: 2.15rem;
      padding: 3px 0 0 0;
      line-height: 36px;
    } */
    
    .navbar-survival101 .navbar-brand img {
      vertical-align: baseline;
    }
    
    .navbar-expand-lg .navbar-nav .nav-link {
      color: #fff;
    }
    .navbar-expand-lg .navbar-nav .nav-link:hover {
      color: #fff;
    }
    .search-box {
      position: relative;
      height: 34px;
    }
    .search-box input {
      border: 0;
      border-radius: 3px !important;
      padding-right: 28px;
      font-size: 15px;
    }
    
    .search-box .input-group-btn {
      position: absolute;
      right: 0;
      top: 0;
      z-index: 999;
    }
    
    .search-box .input-group-btn button {
      background-color: transparent;
      border: 0;
      padding: 4px 8px;
      color: rgba(0,0,0,.4);
      font-size: 20px;
    }
    
    .search-box .input-group-btn button:hover,
    .search-box .input-group-btn button:active,
    .search-box .input-group-btn button:focus {
      color: rgba(0,0,0,.4);
    }
    
    @media (min-width: 992px) {
      .navbar-expand-lg .navbar-nav .nav-link {
        padding-right: .7rem;
        padding-left: .7rem;
      }
      
      .search-box {
        width: 300px !important;
      }
    }
    
    .caroulsel {
      width: 100%;
      overflow: hidden;
      padding: 5px 0 5px 5px;
    }
    
    .caroulsel-wrap {
      white-space: nowrap;
      font-size: 0;
    }
    
    .caroulsel-wrap a {
      display: inline-block;
      width: 134px;
      height: 92px;
      background-color: silver;
      border: #ccc 1px solid;
      margin-right: 5px;
    }

   .nav-item:hover{
     background-color: #377bbe;
    box-shadow: 0em 0em 0.4em #4c98e4;
    transition: 0.3s
   }
    
    
    </style>
@endsection


@section('content')

<body>
    <nav class="navbar navbar-expand-lg navbar-dark navbar-survival101 fixed-top p-0">
        <div class="container">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <a class="navbar-brand ml-5" href="#">
            <img src="" width="50" alt="T R I P S A I D">
          </a>
         
      
          <div class="collapse navbar-collapse" id="navbarColor02">
            <ul class="navbar-nav  ">
              <li class="nav-item p-3">
                <a class="nav-link" href="/user_table">Users Table</a>
              </li>
              <li class="nav-item  p-3">
                <a class="nav-link" href="/place_table"><span class="hide-menu">Places Table</span></a>
              </li>
              <li class="nav-item  p-3">
                <a class="nav-link" href="#">Service Managers Table</a>
              </li>
             
              <div class="dropdown-menu mailbox dropdown-menu-right scale-up" aria-labelledby="2">
                
              </div>
    
            </ul>
          
          </div>
     
          </ul>
          <a class="nav-link" href="#"><i class="fas fa-sign-out-alt text-white" data-toggle="tooltip" data-placement="bottom" title=" Log out"></i></a> 
        </div>
    
      </nav>
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <div id="main-wrapper">
 
   
        
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
                                                    <th data-breakpoints="xs" >Certificate</th>
                                                    <th data-breakpoints="xs">IsProven</th>  
                                                    <th data-breakpoints="xs">Delete</th>  
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <!--=====Row======-->

                                                <tr data-expanded="false" class="search-items">
                                                   
                                                    @foreach ($servicemanegarsnotproven as $item)
                    
                                                    
                                                    <td>
                                                        <a href="javascript:void(0)"><img
                                                                src="../assets/images/users/4.jpg" alt="user" width="40"
                                                                class="rounded-circle" />{{ $item->first_name }}</a>
                                                    </td>
                                                    
                                                    <td>{{ $item->last_name }}</td>
                                                    <td>{{ $item->phone_number }}</td>
                                                    <td>{{ $item->Email }}</td>
                                                    <td><span class="label label-danger">   1/2/1998</span> </td>
                                                    <td><button type="button" class="btn btn-light-info" data-toggle="modal"
                                                        data-target="#bs-example-modal-lg">Show the certificate </button></td>
                                                    <td>
                                                        <a href="add_proven/{{ $item->id }}" class="btn btn-dark-success"  data-target="#exampleModal">Prove</a>
                                                    </td>

                                                    <td>
                                                        <a href="remove_service_manegar/{{ $item->id }}" id="BookingUnConf" class="btn btn-danger">Delete</a>
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
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th data-breakpoints="xs sm">Mobile No</th>
                                                <th data-breakpoints="xs">Email</th>
                                                <th data-breakpoints="xs">Date of Birth</th> 
                                                <th data-breakpoints="xs">Delete
                                                </th> 
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!--=====Row======-->
                                            @foreach($servicemanegarsproven as $servicemanegarproven)
                                            <tr data-expanded="false" class="search-items">
                                            
                                                <td>
                                                    <a href="javascript:void(0)"><img
                                                            src="../assets/images/users/4.jpg" alt="user" width="40"
                                                            class="rounded-circle" /> {{ $servicemanegarproven->first_name }} </a>
                                                </td>
                                                
                                                <td> {{ $servicemanegarproven->last_name }}</td>
                                                <td>{{ $servicemanegarproven->phone_number }}</td>
                                                <td>{{ $servicemanegarproven->Email }}</td>
                                                <td><span class="label label-danger">   1/2/1998</span> </td>
                                            
                                            
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
                                                   <img src="images/aaa.jpg">
                                                </div>
                                            </div><!-- /.modal-content -->
                                        </div><!-- /.modal-dialog -->
                                    </div><!-- /.modal -->
    
            </div>
           
        </div>
    </div>

    <footer class="site-footer">
  
        <div class="container">
          <div class="row">
            <div class="col-md-8 col-sm-6 col-xs-12">
              <p class="copyright-text">@ Trip's Aid team 2021
              </p>
            </div>
    
          </div>
        </div>
    </footer>
</body>


@endsection