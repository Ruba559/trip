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
                                            <a href="javascript:void(0)" class="delete-multiple  text-danger"><i class="fas fa-trash font-18 font-medium"></i> Delete Row</a>
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
            <footer class="footer">
                © 2021 Trips aid team
            </footer>
           
        </div>
      
    </div>
    
   
</body>


    @endsection