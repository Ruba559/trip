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

     <link href="lib/footer.css" rel="stylesheet">

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
                <a class="nav-link" href="#"><span class="hide-menu">Places Table</span></a>
              </li>
              <li class="nav-item  p-3">
                <a class="nav-link" href="/service_table">Service Managers Table</a>
              </li>
             
              <div class="dropdown-menu mailbox dropdown-menu-right scale-up" aria-labelledby="2">
                
              </div>
    
            </ul>
          
          </div>
     
          </ul>
          <a class="nav-link" href="#"><i class="fas fa-sign-out-alt text-white" data-toggle="tooltip" data-placement="bottom" title=" Log out"></i></a> 
        </div>
    
      </nav>
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
                        <li class="breadcrumb-item"><a href="/index_admin">Home</a></li>
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
									
                                    <th class="text-dark font-weight-bold"><i class="icon-user"></i> Name</th>
                                    <th class="text-dark font-weight-bold"><i class=" mdi mdi-email-outline"></i> Email</th>
                                    <th class="text-dark font-weight-bold"><i class=" fas fa-star"></i> Stars</th>
                                    <th class="text-dark font-weight-bold"><i class="icon-location-pin"></i>Address</th>
									<th class="text-dark font-weight-bold"><i class=" fas fa-location-arrow"></i> Region</th>
                
									<th class="text-dark font-weight-bold"><i class=" fas fa-warehouse"></i> Place type</th>
									<th class="text-center">
                                        <div class="action-btn">
                                            <a href="javascript:void(0)" class="text-danger"><i class="fas fa-trash font-18 font-medium"></i> Delete</a>
                                        </div>
                                    </th>
                                   
                                </thead>
                                <tbody>
                                    <!-- row -->
                                    @foreach ($places as $item)
                                        
                                    
                                    @foreach($item->place as $row)
                                    
                        
                                    <tr class="search-items">
                                    
                                        <td>
                                            
											 <span class="user-name mb-0">{{ $row['place_name']}}</span>
                                           
                                            
                                        </td>
									     <td>
											 <span class="usr-email-addr mb-0" data-email="">{{ $row['Email'] }}</span>
                                            
                                        </td>
										
                                        <td>
                                            <span >{{ $row['stars'] }} </span>
                                        </td>
                                        <td>
                                            <span>{{ $row['address'] }}</span>
                                        </td>
                                      
                                        </td>
                                        <td>
                                            <span>{{ $item->region_name }}</span>
                                        </td>
        
                                        <td>
                                            <span>{{ $row['place_type'] }}</span>
                                    </td>
                                        <td class="text-center">
                                            <div class="action-btn">
                                                <a class="text-dark ml-2" ><i class="mdi mdi-delete font-20" data-toggle="modal" data-target="#centermodal"></i></a>
                                            </div>
                                        </td>
									</tr>
                                    <!-- /.row -->
								
                        </div>
                    </div>
                </div>
            </div>
           

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
                                <a href="remove_To_place/{{ $row['id'] }}" id="BookingUnConf" class="btn btn-danger">Delete</a>
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