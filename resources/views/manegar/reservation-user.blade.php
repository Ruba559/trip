@extends('layouts.app')


@section('content_head')
<style>

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
a:hover{
text-decoration:none;
}
.Confirm{
background-color: rgb(162, 230, 184);
border-radius: 0.2em;
padding: 0.3em;
}
.UnConfirm{
background-color: rgb(230, 162, 162);
border-radius: 0.2em;
padding: 0.3em;
}
.Choose{
background-color: rgb(158, 185, 202);
padding: 0.2em 0.4em;
border-radius: 0.2em;
cursor: pointer;
margin-left:0.2em;
transition: 0.3s;
}
.ShowConfirm{
background-color: rgb(206, 228, 241);
padding: 0.2em 0.4em;
border-radius: 0.2em;
cursor: pointer;
margin-left:0.2em;
transition: 0.3s;
}


</style>
<link href="lib/footer.css" rel="stylesheet">
@endsection


@section('content')

@include('layouts.header-sm')
<body>
   
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
     



     
    
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->

        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="row page-titles">
                <div class="col-md-5 col-12 align-self-center">
                    <h3 class="text-themecolor mb-0">Reservation date   </h3>
                    <ol class="breadcrumb mb-0 p-0 bg-transparent">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Reservation date</li>
                    </ol>
                </div>
            
            </div>
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <div class="card">
                            <!--------------------------Search------------------>
                            <div class="card-body">
                            <div class="mt-5">
                            <h4 class="ml-5">Room Reservations</h4>
                        </div>
                            <hr>
                            <center>
                            <div class="widget-content searchable-container list">
                              
                                    <div class=" pl-2">
                                                    <h5 class="d-inline ">Search by : </h5>   <span class="Choose" onclick="SearchType()" >Name</span> <span  class="Choose"  onclick="SearchType()">Date</span>
                                              
                                                    <input type="text" class="form-control product-search d-inline w-35 ml-2" id="input-search" placeholder="Search Name...">
                                                    <div class="float-right mr-5">   <h5 class="d-inline  "> Show  : </h5>   <span class="ShowConfirm" onclick="Show()" >Confirm</span> <span  class="ShowConfirm"  onclick="Show()">Unconfirm</span> <span  class="ShowConfirm"  onclick="Show()">All</span>
                                     </div>
                                                </div>
                                    </div>
                               
                                             </center>
                                        
                                  
                                
                                </div>
                             
                                <div class="mt-5 p-4">
                                    <div class="table-responsive">
                                        <table class="table table-striped search-table v-middle">
                                            <thead class="header-item">
                                              
                                                <th class="text-dark font-weight-bold">Check in</th>
                                                <th class="text-dark font-weight-bold">Chek out</th>
                                                <th class="text-dark font-weight-bold">Bill</th>
                                                <th class="text-dark font-weight-bold">Paid</th>
                                                <th class="text-dark font-weight-bold">Remaining</th>
                                                <th class="text-dark font-weight-bold">Status</th>
                                                <th class="text-dark font-weight-bold">Booking Date</th>
                                                <th class="text-dark font-weight-bold">BookingName</th>
                                              
                                                <th class="text-center">
                                                    <div class="action-btn">
                                                        <sapn class="delete-multiple "></a>Delete/confirm</span>
                                                    </div>
                                                </th>
                                            </thead>
                                            <tbody>
                                                <!-- row -->
                                                @foreach ($availables as $item)
                                    
                                                @foreach($item->available as $row)
                                                
                                                <tr class="search-items showTr">
                                                   
                                                   
                                                    <td>
                                                        <span>{{ $row->s_date}}</span>
                                                    </td>
                                                    <td>
                                                        <span>{{ $row->e_date }}</span>
                                                    </td>
                                                    <td>
                                                        <span class="allBill">{{ $row->bill  }}</span>
                                                    </td>
                                                    <td>
                                                        <span class="Paid">{{ $row->paid }}</span> <i class="fas fa-plus text-info font-20 AddIcon" data-toggle="modal" data-target="#AddMoney"></i>
                                                    </td>
                                                    <td>
                                                        <span class="Remaining" ></span>
                                                    </td>
                                                    
                                                    <td>
                                                        @if($row->status == 1) 
                                                        <span class="badge  p-1 IsConfirm">Confirm</span>
                                                        @endif
                                                        @if($row->status == 0) 
                                                        <span class="badge  p-1 IsConfirm">Unconfirm</span>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        <span class="BookingDate">{{ $row->created_at  }}</span>
                                                    </td>
                                                    <td>
                                                        <span data-toggle="modal" data-target="#Userprofile" style="cursor: pointer;">{{ $row->booking_name }}<i class="fas fa-user ml-2 text-info font-20"></i></span>
                                                    </td>
                                                   
                                                    <td class="text-center">
                                                        <div class="action-btn">
                                                            <a href="javascript:void(0)" class="text-info EditIcon" data-toggle="modal" data-target="#EditRow"><i class="fas fa-check-circle font-20"></i></a>
                                                            <a href="javascript:void(0)" class="text-dark ml-2" data-toggle="modal" data-target="#centermodal"><i class="mdi mdi-delete font-20"></i></a>
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
            
        </div>
    </div>
    
    
             <!--===========================Delete Row========================-->

             <div class="modal fade" id="centermodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header bg-danger">
                            <h5 class="modal-title  text-white" id="exampleModalLongTitle">Reservation date</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p class="font-20 font-weight-bolder text-dark">Are you sure to Delete This Reservation ?</p>
                            <div class="modal-footer">
                                <button id="BookingConf" class="btn btn-light-info deleteRow" data-dismiss="modal">Cancel</button>
                                <a  href="remove_reservation/{{ $row->id }}" id="BookingUnConf" class="btn btn-danger">Delete</a>
                            </div>
                        </div>
                    </div>
                </div>
                </div>

                <!--===========================EndDelete Row========================-->
                <div class="d-none"> 
                    
                

                </div>
                <!--===========================Edit Row========================-->

             <div class="modal fade" id="EditRow" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header bg-info">
                            <h5 class="modal-title  text-white" id="exampleModalLongTitle">Confirm Reservation</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="card-body text-center">
                                <a class="text-dark" href="#"> <img src="../assets/images/users/1.jpg" alt="user" class="rounded-circle d-inline" width="30">  <h4 class="d-inline">{{ $item->first_name }}  </h4></a>
                           <hr>
                             <span>{{ $item->Email }} </span><br>
                             <span>{{ $item->phone_number }} </span>

                               
                            </div>
                            <div class="modal-footer">
                                <button id="BookingConf" class="btn btn-light-info deleteRow" data-dismiss="modal">Cancel</button>
                                <a href="edit_reservation/{{ $row->id }}" id="BookingUnConf" class="btn btn-info">Confirm Reservation</a>
                            </div>
                        </div>
                    </div>
                    
                </div>
                </div>
                
      
                <!--===========================EndEdit Row========================-->

              
                         <!--===========================User profile Row========================-->

             <div class="modal fade" id="Userprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                    
                        <div class="modal-body">
                           
                            
                                    <div class="card-body p-0">
                                       
                                        <center class="mt-2">
                                           
                                                
                                            
                                            <img  src="../assets/images/users/5.jpg" width="250">   
                                           
                                        
                                      
                                            <h3 class="card-title mt-5" style="text-transform: capitalize;">{{ $item->first_name }}</h3>
                                        </center>
                                    </div>
                                    <div>
                                        <hr> </div>
                                        <small class="text-muted pt-4 db">user  Profile
                                        </small>
                                    <div class="card-body"> <small class="text-muted">Email address : </small>
                                        <h6>{{ $item->Email }}</h6> <small class="text-muted pt-4 db">Phone : </small>
                                        <h6>{{ $item->phone_number }}</h6> 
                                         <small class="text-muted pt-4 db"> Date of birth :</small><h6> <i class="fa fa-calendar"></i>{{ $item->birthday  }}</h6>
                                        
                                        </div>
                                      
                        </div>
                    </div>
                </div>
                </div>

                <!--===========================UserProfile Row========================-->
       <!--===========================Add Money========================-->

       <div class="modal fade" id="AddMoney" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header bg-info">
                    <h5 class="modal-title  text-white" id="exampleModalLongTitle">Add an amount</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="adit_bill"  method="POST">
                    @csrf
                <div class="modal-body">
                    <div class="card-body text-center">
                        <div class="form-group">
                            <label class="col-md-12"> the amount</label>
                            <div class="col-md-12">
                                <input type="number" name="paid" placeholder="{{ $row->paid }}" class="form-control form-control-line">
                            </div>
                        </div>
                       <input type="hidden" name="id" value="{{ $row->id }}">
                    </div>
                    <div class="modal-footer">
                        <button id="BookingConf" class="btn btn-light-info deleteRow" data-dismiss="modal">Cancel</button>
                        <button type="submit" id="BookingUnConf" class="btn btn-info">Add</button>
                    </div>
                </div>
            </div>
        </form>
            @endforeach
            @endforeach
          
        </div>
        </div>
       
                                                  
            </tbody>
        </table>
        <button class="btn btn-info m-5"> <a href="/room_info" class="text-white">Go to rooms table</a></button>

<!-- ============================================================== -->
<!-- End footer -->
<!-- ============================================================== -->
            <script>
                var img =document.getElementById("IMGProfile");
                var spanImg =document.getElementById("profile");
                /*---------------searchvalue---------*/
               var SearchInput= document.getElementById("SearchInput");
               var Choose = document.getElementsByClassName('Choose');
              var IsConfirm = document.getElementsByClassName("IsConfirm");
              var showTr = document.getElementsByClassName("showTr");
              var ShowConfirm = document.getElementsByClassName("ShowConfirm");
              var EditIcon = document.getElementsByClassName("EditIcon");
               /*---------------bill value---------*/  
             var allBill = document.getElementsByClassName("allBill");
             var Paid = document.getElementsByClassName("Paid");
             var Remaining = document.getElementsByClassName("Remaining");
             var AddIcon = document.getElementsByClassName("AddIcon");
             
/*--------------------------page load  -------------------*/

                  
                

                   /*----Bill-------*/
                   for( i = 0 ; i < allBill.length ; i ++)
                            {
                                var a = Number(allBill[i].innerHTML) ;
                                var p = Number(Paid[i].innerHTML);  
                                p = a-p;
                            Remaining[i].innerHTML = p ;
                            if(p == 0)
                            AddIcon[i].classList.add('d-none')
                            }

                    /*----End Bill-------*/
                      /*----unconfirm/confirm class-------*/
                  for( i = 0 ; i < showTr.length ; i ++)
                            {
                             if (IsConfirm[i].innerHTML =="Unconfirm")
                             {IsConfirm[i].classList.add("badge-danger")
                             if(Number(Remaining[i].innerHTML) == 0)
                             {
                             showTr[i].classList.add("bg-light-danger");
                            }
                        }
                             else if (IsConfirm[i].innerHTML =="Confirm")
                             {
                             IsConfirm[i].classList.add("badge-success");
                             EditIcon[i].classList.add("d-none");
                           if(Paid[i].innerHTML != allBill[i].innerHTML)
                           {
                               Paid[i].classList.add("badge-warning");
                           }
                        
                             }
                            
                            }
                           
                        
                  /*----End Confirm-------*/
                  /*--------------------------end page load  -------------------*/

                    for( i = 0 ; i < Choose.length ; i ++){
                        Choose[i].addEventListener("click",SearchType);}

                        for( i = 0 ; i < ShowConfirm.length ; i ++){
                        ShowConfirm[i].addEventListener("click",Show);}

                    function SearchType(){
                        var divv = document.getElementById("SearchByDate");
                        var divv2 = document.getElementById("input-search");
                        if(this.innerHTML =="Date")
                        {
                            divv2.type ="date";             
                        }
                           
                       else if(this.innerHTML =="Name")
                     {  divv2.type ="text";
                     
                     
                    }
                    }
                    function Show(){
                        if(this.innerHTML == "Confirm")
                        {
                            for( i = 0 ; i < showTr.length ; i ++)
                            {
                             
                                showTr[i].classList.remove("d-none");

                            }
                            for( i = 0 ; i < showTr.length ; i ++)
                            {
                                if(IsConfirm[i].innerHTML!="Confirm")
                                showTr[i].classList.add("d-none");

                            }
                        }
                        if(this.innerHTML == "Unconfirm")
                        {
                            for( i = 0 ; i < showTr.length ; i ++)
                            {
                             
                                showTr[i].classList.remove("d-none");

                            }
                            for( i = 0 ; i < showTr.length ; i ++)
                            {
                                if(IsConfirm[i].innerHTML=="Confirm")
                                showTr[i].classList.add("d-none");

                            }
                        }
                        if(this.innerHTML == "All")
                        {
                            for( i = 0 ; i < showTr.length ; i ++)
                            { 
                                showTr[i].classList.remove("d-none");

                            }
                        }
                    }
                   
            </script>
            
    
    @include('layouts.footer')
    
</body>

@endsection