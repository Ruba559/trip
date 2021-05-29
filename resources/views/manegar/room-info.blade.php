@extends('layouts.app')


@section('content_head')


<link href="lib/footer.css" rel="stylesheet">
@endsection

@section('content')

 
@include('layouts.header-sm')
  
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
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
       <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
     

        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="row page-titles">
                <div class="col-md-5 col-12 align-self-center">
                    <h3 class="text-themecolor mb-0">Rooms table</h3>
                    <ol class="breadcrumb mb-0 p-0 bg-transparent">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Rooms table</li>
                    </ol>
                </div>
            
            </div>
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="widget-content searchable-container list">
                    <div class="card card-body">
                        <div class="row">
                                <div class="col-md-4">
                                    <form>
                                        <input type="text" class="form-control product-search" id="input-search" placeholder="Search room...">
                                    </form>
                                </div>
                                <div class="col-md-8 text-right d-flex justify-content-md-end justify-content-center mt-3 mt-md-0">
                                        <a href="#"  class="btn btn-info" data-toggle="modal" data-target="#AddRoom"><i class="mdi mdi-plus font-16 mr-1"></i> Add Room</a>
                                </div>
                        </div>
                    </div>
                 
                    <div class="card card-body">
                        <div class="table-responsive">
                            <table class="table table-striped search-table v-middle">
                                <thead class="header-item">
                                  
                                    <th class="text-dark font-weight-bold">RoomID</th>
                                    <th class="text-dark font-weight-bold">Price</th>
                                    <th class="text-dark font-weight-bold">Number Of Guests</th>
                                    <th class="text-dark font-weight-bold">Description</th>
                                    <th class="text-dark font-weight-bold">Photo</th>
                                    <th class="text-dark font-weight-bold"></th>
                                    <th class="text-center">
                                        <div class="action-btn">
                                            <sapn class="delete-multiple  text-danger"></a><i class="fas fa-trash font-20 font-medium"></i> Delete Row</span>
                                        </div>
                                    </th>
                                </thead>
                                <tbody>
                                    <!-- row -->
                                    @foreach ($rooms as $item)
                                    
                                    @foreach($item->room as $row)
                                   

                                    <tr class="search-items">
                                       
                                       
                                        <td>
                                            <span>{{ $row->id }}</span>
                                        </td>
                                        <td>
                                            <span>{{ $row->price  }}</span>
                                        </td>
                                        <td>
                                            <span>{{ $row->count_people }}</span>
                                        </td>
                                        <td>
                                            <span>{{ $row->description }}</span>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img class="srcPhoto" src="{{ $row->price }}"  width="35" data-toggle="modal" data-target="#PhotoModal">
                                                <div class="ml-2">
                                                    <div class="user-meta-info">
                                                        <h5 class="TsTherePhoto"></h5>
                                                     
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="/index_reservation_user/{{ $row->id }}" class="HrefBooking">Reservation dates</a>
                                        </td>
                                        <td class="text-center">
                                            <div class="action-btn">
                                                <a href="javascript:void(0)" class="text-info" data-toggle="modal" data-target="#EditRow"><i class="mdi mdi-account-edit font-20"></i></a>
                                                <a href="javascript:void(0)" class="text-dark ml-2" data-toggle="modal" data-target="#centermodal"><i class="mdi mdi-delete font-20"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- /.row -->
                                
                                   
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
                                <a href="remove_room/{{ $row->id }}" id="BookingUnConf" class="btn btn-danger">Delete</a>
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
                                            <label for="cono12" class="col-sm-3 text-right control-label col-form-label">Number of  guest</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="GuestNo" placeholder="Number of guest">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group row">
                                            <label class="col-sm-3 text-right control-label col-form-label">Price</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="Price" placeholder="Price for night">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group row">
                                            <label class="col-sm-3 text-right control-label col-form-label">Description</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="Price" placeholder="Price for night">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group row">
                                            <label class="col-sm-3 text-right control-label col-form-label">photo</label>
                                            <button class="btn btn-light-info mb-2"><label for="RoomPhoto">Change Photo</label> </button>
                                                <img src="../assets/images/background/تنزيل (1).jpg"  width="75%" style="margin-left: 13%;">
                                                <input type="file" class="d-none" id="RoomPhoto" accept="image/*">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button id="BookingConf" class="btn btn-light-info deleteRow" data-dismiss="modal">Cancel</button>
                                <button id="BookingUnConf" class="btn btn-success"  data-dismiss="modal">Update</button>
                            </div>
                        </div>
                    </div>
                </div>
                </div>

                <!--===========================EndEdit Row========================-->

                
                <!--===========================Add Row========================-->

             <div class="modal fade" id="AddRoom" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header bg-info">
                            <h5 class="modal-title  text-white" id="exampleModalLongTitle">Add Room</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="card-body">
                                <form action="add_room" method="POST" enctype="multipart/form-data">
                                    @csrf
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group row">
                                            <label for="cono12" class="col-sm-3 text-right control-label col-form-label">Number of  guest</label>
                                            <div class="col-sm-9">
                                                <input type="number" name="count_people" class="form-control" id="GuestNo" placeholder="Nimber of guest">
                                            </div>
                                            @error('count_people')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group row">
                                            <label class="col-sm-3 text-right control-label col-form-label">Price</label>
                                            <div class="col-sm-9">
                                                <input type="number" name="price" class="form-control" id="Price" placeholder="Price for night">
                                            </div>
                                            @error('price')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group row">
                                            <label class="col-sm-3 text-right control-label col-form-label">Description</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="description" class="form-control" id="Price" placeholder="Description">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group row">
                                            <label class="col-sm-3 text-right control-label col-form-label">photo</label>
                                           <label for="RoomPhoto">Upload Photo</label>
                                                <img  width="75%" style="margin-left: 13%;">
                                                <input name="pictuer" type="file" class="d-none" id="RoomPhoto" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">

                                <input type="hidden" name="id" value="{{ $item->id }}">

                                <button id="BookingConf" class="btn btn-light-info deleteRow" data-dismiss="modal">Cancel</button>
                                <button type="submit" id="BookingUnConf" class="btn btn-success" >Add</button>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </form>
                <!--===========================EndAdd Row========================-->


                @endforeach
                @endforeach
            </tbody>
        </table>
     <!--=================== Photo Room  modal===========================-->

     <div class="modal fade" id="PhotoModal" tabindex="-1" role="dialog"
     aria-labelledby="myLargeModalLabel" aria-hidden="true">
     <div class="modal-dialog modal-lg ">
         <div class="modal-content">
             
             <div class="modal-body p-0">
                <img src="../assets/images/background/تنزيل (1).jpg" width="100%">
             </div>
         </div><!-- /.modal-content -->
     </div><!-- /.modal-dialog -->
 </div><!-- /.modal -->

 <script>
    var IsThrePhoto = document.getElementsByClassName("TsTherePhoto");
    var RoomImg = document.getElementsByClassName("srcPhoto");
     for(i = 0 ; i < IsThrePhoto.length ; i ++)
     {
   if(RoomImg[i].src !="")
   {
       IsThrePhoto[i].innerHTML = "";
   }
   else {
       IsThrePhoto[i].innerHTML = "no Photo";
   }
     } 
     function ss (){
         alert(RoomImg[0].src)
     }
       </script>

       
@include('layouts.footer')
       
@endsection
