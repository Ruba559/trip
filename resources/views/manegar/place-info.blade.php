@extends('layouts.app')


@section('content_head')
<style>
    .HrefBooking{
        color:slategrey;
        text-decoration: none;
    }
    a:hover{
        text-decoration: none;
    }
    .Plcae-name{
        text-shadow: 0.1em 0.1em 0.1em #bbb;
    }
    .place-photo
    {
     white-space: nowrap;
 position: relative;
 overflow-x: auto;
 overflow-y: hidden;
 -webkit-overflow-scrolling: touch;
    }
      /*-----------scrollbar style----------*/
 ::-webkit-scrollbar {
width: 0.5em;
height: 0.4em;

}

/* Track */
::-webkit-scrollbar-track {
background: #dce3f8;
box-shadow: inset 0 0 5px gray;
}

/* Handle */
::-webkit-scrollbar-thumb {
background: rgb(112, 124, 138); 
border-radius: 1em;
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
background: rgb(75, 79, 105);
}



</style>
@endsection


@section('content')

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
  
            <div class="row page-titles">
                <div class="col-md-5 col-12 align-self-center">
                    <h3 class="text-themecolor mb-0">Place info</h3>
                    <ol class="breadcrumb mb-0 p-0 bg-transparent">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Place info</li>
                    </ol>
                </div>
            
            </div>
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <div class="card">
                    <div class="card-body">
                        
                        @foreach ($places as $item)
                        <h1 class="card-title text-info  mb-5 Plcae-name">{{ $item['place_name']}}</h1> 
                        <h6 class="card-subtitle"> To update Place information</h6>
                    </div>
                    <hr class="mt-0">
                    <form class="form-horizontal r-separator" action="/edit_place_info" method="POST">
                        @csrf
                        <div class="card-body">
                            <h4 class="ml-5">place information</h4>
                            <hr>
                        
                            <div class="form-group row align-items-center mb-0">
                                
                                <label for="inputEmail3" class="col-md-3 text-right control-label col-form-label"><i class="icon-location-pin text-info"></i> Addriss</label>
                                <div class="col-md-9 border-left pb-2 pt-2">
                                    <input type="text" class="form-control" id="inputEmail3" placeholder="{{ $item['address'] }}" name="address">
                                </div>
                            </div>
                          
                            <div class="form-group row align-items-center mb-0">
                                <label for="inputEmail3" class="col-md-3 text-right control-label col-form-label"><i class=" mdi mdi-email-outline text-info"></i> Email</label>
                                <div class="col-md-9 border-left pb-2 pt-2">
                                    <input type="email" class="form-control" id="inputEmail3" placeholder="{{ $item['Email'] }}" name="Email">
                                </div>
                            </div>
                            <div class="form-group row align-items-center mb-0">
                                <label for="inputEmail3" class="col-md-3 text-right control-label col-form-label"><i class=" fas fa-star text-info"></i> Stars</label>
                                <div class="col-md-9 border-left pb-2 pt-2">
                                   <div id="default-star-rating" style="cursor: pointer;"></div> 
                                </div>
                            </div>
                            <div class="form-group row align-items-center mb-0">
                                <label for="inputEmail3" class="col-md-3 text-right control-label col-form-label"><i class="fas fa-arrows-alt-h text-info"></i> X</label>
                                <div class="col-md-9 border-left pb-2 pt-2">
                                    <input type="Number" class="form-control" id="inputEmail3" placeholder="{{ $item['latitude'] }}" name="latitude">
                                </div>
                            </div>
                            
                            <div class="form-group row align-items-center mb-0">
                                <label for="inputEmail3" class="col-md-3 text-right control-label col-form-label"><i class="fas fa-arrows-alt-v text-info"></i> Y</label>
                                <div class="col-md-9 border-left pb-2 pt-2">
                                    <input type="number" class="form-control" id="inputEmail3" placeholder="{{ $item['longitude'] }}" name="longitude">
                                </div>
                            </div>
                            <div class="form-group row align-items-center mb-0">
                                <label for="inputEmail3" class="col-md-3 text-right control-label col-form-label"><i class=" fas fa-location-arrow text-info"></i> Region</label>
                                <div class="col-md-9 border-left pb-2 pt-2">
                                    <input list="Region" class="form-control" placeholder="" name="region_name" >
                                    <datalist id="Region">
                                        <option value="mazza" class="col-12 col-md-2   d-inline border-success"></option>
                                   </datalist>
                                </div>
                            </div>
                            <div class="form-group row align-items-center mb-0 place-photo">
                                <label for="inputEmail3" class="col-md-3 text-right control-label col-form-label">Photos</label>
                                <div class="col-md-9 border-left pb-2 pt-2 place-photo">
                                    <a href="../My Assets/images/hh.jpg" class="image-popup-no-margins"><img src="../My Assets/images/hh.jpg" width="100" height="100"></a>
                                    <a href="../assets/images/background/تنزيل (2).jpg" class="image-popup-no-margins"><img src="../assets/images/background/تنزيل (2).jpg" width="100" height="100"></a> 
                                
                                    <label for="inputPhoto" class="btn btn-info ml-2"><i class="mdi mdi-plus font-16 mr-1"></i>Add photo</label>
                                    <input type="file" class="d-none"   accept="image/*" id="inputPhoto">
                                </div>
                            </div>
                            <div class="card-body bg-light">
                                <div class="form-group mb-0 text-right">
                                    <button type="submit" class="btn btn-info waves-effect waves-light ">Save</button>
                                    <a href="/index_manegar" class="btn btn-dark waves-effect waves-light">Cancel</a>
                                </div>
                            </div>
                        </div>
 
                    </form> 
                    @endforeach
                   
                            <!--------------------------Services------------------>
                            <div class="card-body">
                            <div class="mt-5">
                            <h4 class="ml-5">Services</h4>
                        </div>
                            <hr>
                            <div class="widget-content searchable-container list">
                                <div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <form>
                                                <input type="text" class="form-control product-search" id="input-search" placeholder="Search room...">
                                            </form>
                                        </div>
                                        <div class="col-md-8 text-right d-flex justify-content-md-end justify-content-center mt-3 mt-md-0">
                                                <a href="#"  class="btn btn-info" data-toggle="modal" data-target="#AddService"><i class="mdi mdi-plus font-16 mr-1"></i> Add Room</a>
                                        </div>
                                </div>
                                </div>
                             
                                <div class="mt-5">
                                    <div class="table-responsive">
                                        <table class="table table-striped search-table v-middle">
                                            <thead class="header-item">
                                              
                                                <th class="text-dark font-weight-bold">RoomID</th>
                                                <th class="text-dark font-weight-bold">Service name</th>
                                                <th class="text-dark font-weight-bold">Price</th>
                                              
                                                <th class="text-center">
                                                    <div class="action-btn">
                                                        <sapn class="delete-multiple  text-danger"></a><i class="fas fa-trash font-20 font-medium"></i> Delete Service</span>
                                                    </div>
                                                </th>
                                            </thead>
                                           
                                            <tbody>
                                                <!-- row -->
                                                @foreach ($services as $service)
                                                <tr class="search-items">
                                                   
                                                  
                                                    <td>
                                                        <span>{{ $service->id }}</span>
                                                    </td>
                                                    <td>
                                                        <span>{{ $service->service_name }}</span>
                                                    </td>
                                                    <td>
                                                        <span>{{ $service->price }}</span>
                                                    </td>
                                                   
                                                    <td class="text-center">
                                                        <div class="action-btn">
                                                            <a href="javascript:void(0)" class="text-info" data-toggle="modal" data-target="#EditRow"><i class="mdi mdi-account-edit font-20"></i></a>
                                                            <a href="" class="text-dark ml-2" data-toggle="modal" data-target="#centermodal"><i class="mdi mdi-delete font-20"></i></a>
                                                        </div>
                                                      
                                                    </td>
                                                </tr>
                                                <!-- /.row -->
                                               
                                           
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                        </div>
                    </div>
                </div>
            </div>
         
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
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
                                <a href="/remove_To_service/{{$service->id}}" id="BookingUnConf" class="btn btn-danger"  >Delete</a>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
              
              
                <!--===========================EndDelete Row========================-->

                <!--===========================Edit Row========================-->

             <div class="modal fade" id="EditRow" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header bg-info">
                            <form action="edit_service_info" method="POST">
                                @csrf

                               
                        
                            <h5 class="modal-title  text-white" id="exampleModalLongTitle">Edit this Row</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="card-body">
                             
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group row">
                                            <label for="cono12" class="col-sm-3 text-right control-label col-form-label">Service name</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="GuestNo" placeholder="{{ $service->service_name }}" name="service_name">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group row">
                                            <label class="col-sm-3 text-right control-label col-form-label">Price</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="Price" placeholder="{{ $service->price }}" name="price">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                               
                            </div>
                            <div class="modal-footer">
                                <button id="BookingConf" class="btn btn-light-info deleteRow" data-dismiss="modal">Cancel</button>
                                <button type="submit" id="BookingUnConf" class="btn btn-success"  >Update</button>
                            </div>
                        </div>
                    </div> 
                </form>
                </div>
                </div>
                @endforeach 
            </tbody>
                        
        </table>
                <!--===========================EndEdit Row========================-->

                
                <!--===========================Add Row========================-->

             <div class="modal fade" id="AddService" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header bg-info">
                            <h5 class="modal-title  text-white" id="exampleModalLongTitle">Add Service</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="card-body">
                             
                                <div class="row">
                                    <div class="col-sm-12">
                                        <form action="add_service_info" method="POST">
                                            @csrf
                                        <div class="form-group row">
                                            
                                            <label for="cono12" class="col-sm-3 text-right control-label col-form-label">Service name</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="GuestNo" placeholder="" name="service_name">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group row">
                                            <label class="col-sm-3 text-right control-label col-form-label">Price</label>
                                            <div class="col-sm-9">
                                                <input type="number" class="form-control" id="Price" placeholder="" name="price">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            
                            <div class="modal-footer">
                                <button id="BookingConf" class="btn btn-light-info deleteRow" data-dismiss="modal">Cancel</button>
                                <button type="submit" id="BookingUnConf" class="btn btn-success" >Add</button>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
                </div>
              
               
                <!--===========================EndAdd Row========================-->



 
    <!-- ============================================================== -->
    <!-- All Jquery -->
  
    <footer class="footer text-center">
        @Trips aid team
    </footer>
    
    
</body>

@endsection
