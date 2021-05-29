@extends('layouts.app')


@section('content_head')

<style>
    .bg-filter{
      background-color: #b2d0e0;
    }
    .dropdownDiv{
      background-color: #eaf3f8;
     
    }
    .borderService{
      border: 0.1em solid #9ec2e0
    }
        </style>
        <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
        
    <link href="lib/Pro index.css" rel="stylesheet">
    <link href="lib/footer.css" rel="stylesheet">
@endsection


@section('content')

<body>
  @include('layouts.header')
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
        <div class="container-fluid px-md-5 ">
            <nav class="navbar navbar-expand-md  navbar-light bg-light">
               
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
              
                <div class=" navbar-collapse collapse justify-content-center order-2" id="navbarSupportedContent">
                  <ul class="navbar-nav ">
                    <li class="nav-item active">
                      <input list="Region" class="form-control " placeholder="The Region" >
      <datalist id="Region">
        <option value="mazza" class="col-12 col-md-2   d-inline border-success"></option>
       </datalist>
                    </li>
                    <li class="nav-item">
                      <input type="text" class="form-control daterange" placeholder="check date">
      
                    </li>
                    <li class="nav-item ">
                         <div class="bg-white font-weight-bolder pt-2 text-dark " style="border-radius: 0.3rem; border:0.1em solid #21c1d6;font-size:0.75rem ;" data-toggle="modal" data-target="#exampleModal" id="RoomInfo"><span class="font-14"> <span  id="RoomSpan"> Room</span><br>
      <i class="fas fa-users"></i><span id="Guests"> Guests </span>
       </span>
    </div>
    <input readonly id="RoomCount" name="NumbrOfRoom" class="d-none"> <input readonly id="CountAdult" name="NumberOfAdult" class="d-none">
      
   
                    </li>
                   
                  </ul>
                  
                    <button class="btn btn btn-twitter my-2 my-sm-0" type="submit">Search</button>
                 
                </div>
              </nav> 
            </div>



              <div class="container-fluid px-md-5">
                <nav class="navbar navbar-expand-md navbar-dark bg-filter">
              
                    <a class="navbar-brand " href="#">Filters</a>
                      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsingNavbar" aria-controls="collapsingNavbar" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                  
                  <div class="navbar-collapse collapse justify-content-center order-2 bg-filter" id="collapsingNavbar">
                      <ul class="navbar-nav  text-white">
                        <li class="nav-item dropdown">
                          <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdownFavorit" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Favorite
                          </a>
                          <div class="dropdown-menu dropdownDiv" aria-labelledby="navbarDropdownFavorit">
                            @foreach ($favorites as $item)
                                        
                                    
                            @foreach($item->favorite as $row)
                           
                            <a class="dropdown-item" href="/show_favorite/{{ $item->id }}">{{ $item->place_name }}</a>
                            @endforeach
                            @endforeach
                         </div>
                      </li>
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdownPlace" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                         place
                        </a>
                        <div class="dropdown-menu dropdownDiv" aria-labelledby="navbarDropdownPlace">
                         <div>
                          <form action="type_house_filter" method="POST">@csrf

                            <span><button type="submit" for="pool" class="dropdown-item">House</label> </span><input type="subnit" name="service_name" id="pool" class="d-none">
                
                      </form>
                      <form action="type_home_filter" method="POST">@csrf

                        <span><button type="submit" for="pool" class="dropdown-item">Home</label> </span><input type="subnit" name="service_name" id="pool" class="d-none">
            
                  </form>
                  <form action="type_filter" method="POST">@csrf

                    <span><button type="submit" for="pool" class="dropdown-item">All</label> </span><input type="subnit" name="service_name" id="pool" class="d-none">
        
              </form>
                      </div>
                        </div>
                        
                      </li>
                        <li class="nav-item dropdown">
                          <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdownStars" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Satrs
                          </a>
                          <div class="dropdown-menu dropdownDiv" aria-labelledby="navbarDropdownStars">
                            <form action="star1_filter" method="POST">@csrf

                              <span> <button type="submit" for="star-1" class="dropdown-item" ><i class="fas fa-star text-warning"></i></button><input type="radio" name="starsInput" id="star-1" class="d-none"></span>
                  
                             </form>
                             <form action="star2_filter" method="POST">@csrf

                              <span><button type="submit" for="star-2" class="dropdown-item" ><i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i></button><input type="radio" name="starsInput" id="star-2" class="d-none"></span>
              
                             </form>
                             <form action="star3_filter" method="POST">@csrf

                              <span><button type="submit" for="star-3" class="dropdown-item" ><i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i></button><input type="radio" name="starsInput" id="star-3" class="d-none"></span>
              
                             </form>
                             <form action="star4_filter" method="POST">@csrf

                              <span><button type="submit" for="star-4" class="dropdown-item"><i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i></button><input type="radio" name="starsInput" id="star-4" class="d-none"></span>
              
                             </form>
                             <form action="star5_filter" method="POST">@csrf

                              <span><button type="submit" for="star-5" class="dropdown-item"><i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i></button><input type="radio" name="starsInput" id="star-5" class="d-none"></span>
              
                             </form>
                           </div>
                        </li>
                        <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdownService" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Services
                          </a>
                          <div class="dropdown-menu dropdownDiv" aria-labelledby="navbarDropdownService">
                            <form action="service_filter" method="POST">@csrf
                            @foreach ($services_f as $service_f)
                              
                            
                            <span><button type="submit" for="pool" class="dropdown-item">{{ $service_f->service_name }}</label> </span><input type="subnit" name="service_name" id="pool" class="d-none">
                        <input type="hidden" name="id" value="{{ $service_f->id }}">
                           
                           @endforeach
                            </form>
                          </div>
                        </li>
                        <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdownRating" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           Rating
                          </a>
                          <div class="dropdown-menu dropdownDiv" aria-labelledby="navbarDropdownRating">
                           <span><label for="r1" class="dropdown-item"><i class=" fas fa-heart text-danger"></i></label></span><input type="radio" name="RatingInput" id="r1" class="d-none"></span>
                           <span><label for="r2" class="dropdown-item"><i class=" fas fa-heart text-danger"></i><i class=" fas fa-heart text-danger"></i></label></span><input type="radio" name="RatingInput" id="r2" class="d-none"></span>
                           <span><label for="r3" class="dropdown-item"><i class=" fas fa-heart text-danger"></i><i class=" fas fa-heart text-danger"></i><i class=" fas fa-heart text-danger"></i></label></span><input type="radio" name="RatingInput" id="r3" class="d-none"></span>
                           <span><label for="r4" class="dropdown-item"><i class=" fas fa-heart text-danger"></i><i class=" fas fa-heart text-danger"></i><i class=" fas fa-heart text-danger"></i><i class=" fas fa-heart text-danger"></i></label></span><input type="radio" name="RatingInput" id="r4" class="d-none"></span>
                           <span><label for="r5" class="dropdown-item"><i class=" fas fa-heart text-danger"></i><i class=" fas fa-heart text-danger"></i><i class=" fas fa-heart text-danger"></i><i class=" fas fa-heart text-danger"></i><i class=" fas fa-heart text-danger"></i></label></span><input type="radio" name="RatingInput" id="r5" class="d-none"></span>
                           
                          </div>
                          
                        </li>

                          <li class="nav-item ml-1">
                            <span class="text-white">Price/night (max) : </span><span id="price">0</span> <i class="
                            fas fa-dollar-sign"></i><input type="range" class="custom-range d-inline" min="5" max="1000" id="customRange2" onchange="ShowValue()">
                          </li>
                      </ul>
                  </div>  
                
              </nav>
            </div>
           
       
        
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper p-2">
            
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
        
        <div class="row">
            <div class=" col-lg-5 col-xl-12 " id="ResearshDiv">
                <div class="card shadow mb-4 bg-light">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h6 class="text-primary font-weight-bold m-0">Research result</h6>
                       <span class=" btn btn-rounded btn-outline-info" id="SpanShowMap" onclick="ShowMap()">Show Map</span>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                 <div class="card">
                                    <div class="card-body"> 
                                        <div class="row">
                                            <div class="col-lg-4 col-md-3">
        <div class="slider">
            <div id="main-slider" class="carousel slide" data-ride="carousel">
         
          <div class="carousel-inner">
           
          <div class="overlay"></div>
          @foreach($photos as $photo)
            
            <div class="carousel-item carousel-one carousel-item-next carousel-item-left">
              <img class="d-block w-100" src="{{ asset($photo->picture) }}" alt="First slide" style="height: 250px">
            </div>
            @endforeach
        
          </div>
           <ol class="carousel-indicators">
            <li data-target="#main-slider" data-slide-to="0" class="active"></li>
            <li data-target="#main-slider" data-slide-to="1" class=""></li>
            <li data-target="#main-slider" data-slide-to="2" class=""></li>
            <li data-target="#main-slider" data-slide-to="3" class=""></li>
           
          </ol>
        
        </div></div></div>

        @foreach ($places as $item)
                                        
                                    
         @foreach($item->room as $row)
         
            
       
                                               <div class="col-lg-8 col-md-9" id="slimtest1">
                                                <div>
                                                  <div class="item__name item__name--link"><h3 class="m-0" itemprop="name"><span class="item-link name__copytext" title="Crowne Plaza Dubai Marina" dir="ltr" data-qa="item-name">{{ $item->place_name }}</span></h3><div class="quick-info"><div class="stars-wrp" itemprop="starRating" itemtype="https://schema.org/Rating" itemscope="true"><meta itemprop="ratingValue" content="5"><span class="icon-ic star"><svg xmlns="http://www.w3.org/2000/svg" focusable="false" tabindex="-1" width="12" height="12" viewBox="0 0 12 12"><path class="svg-color--primary" fill="#F6AB3F" d="M11.988 5.21a.667.667 0 00-.545-.534l-3.604-.6L6.63.455a.666.666 0 00-1.262.001L4.16 4.076l-3.603.6a.667.667 0 00-.233 1.228L3.2 7.63l-1.165 3.493a.67.67 0 00.25.758.672.672 0 00.798-.026L6 9.52l2.917 2.333a.66.66 0 00.796.027.665.665 0 00.252-.758L8.8 7.63l2.876-1.725a.667.667 0 00.312-.696z"></path></svg></span><span class="icon-ic star"><svg xmlns="http://www.w3.org/2000/svg" focusable="false" tabindex="-1" width="12" height="12" viewBox="0 0 12 12"><path class="svg-color--primary" fill="#F6AB3F" d="M11.988 5.21a.667.667 0 00-.545-.534l-3.604-.6L6.63.455a.666.666 0 00-1.262.001L4.16 4.076l-3.603.6a.667.667 0 00-.233 1.228L3.2 7.63l-1.165 3.493a.67.67 0 00.25.758.672.672 0 00.798-.026L6 9.52l2.917 2.333a.66.66 0 00.796.027.665.665 0 00.252-.758L8.8 7.63l2.876-1.725a.667.667 0 00.312-.696z"></path></svg></span><span class="icon-ic star"><svg xmlns="http://www.w3.org/2000/svg" focusable="false" tabindex="-1" width="12" height="12" viewBox="0 0 12 12"><path class="svg-color--primary" fill="#F6AB3F" d="M11.988 5.21a.667.667 0 00-.545-.534l-3.604-.6L6.63.455a.666.666 0 00-1.262.001L4.16 4.076l-3.603.6a.667.667 0 00-.233 1.228L3.2 7.63l-1.165 3.493a.67.67 0 00.25.758.672.672 0 00.798-.026L6 9.52l2.917 2.333a.66.66 0 00.796.027.665.665 0 00.252-.758L8.8 7.63l2.876-1.725a.667.667 0 00.312-.696z"></path></svg></span><span class="icon-ic star"><svg xmlns="http://www.w3.org/2000/svg" focusable="false" tabindex="-1" width="12" height="12" viewBox="0 0 12 12"><path class="svg-color--primary" fill="#F6AB3F" d="M11.988 5.21a.667.667 0 00-.545-.534l-3.604-.6L6.63.455a.666.666 0 00-1.262.001L4.16 4.076l-3.603.6a.667.667 0 00-.233 1.228L3.2 7.63l-1.165 3.493a.67.67 0 00.25.758.672.672 0 00.798-.026L6 9.52l2.917 2.333a.66.66 0 00.796.027.665.665 0 00.252-.758L8.8 7.63l2.876-1.725a.667.667 0 00.312-.696z"></path></svg></span><span class="icon-ic star"><svg xmlns="http://www.w3.org/2000/svg" focusable="false" tabindex="-1" width="12" height="12" viewBox="0 0 12 12"><path class="svg-color--primary" fill="#F6AB3F" d="M11.988 5.21a.667.667 0 00-.545-.534l-3.604-.6L6.63.455a.666.666 0 00-1.262.001L4.16 4.076l-3.603.6a.667.667 0 00-.233 1.228L3.2 7.63l-1.165 3.493a.67.67 0 00.25.758.672.672 0 00.798-.026L6 9.52l2.917 2.333a.66.66 0 00.796.027.665.665 0 00.252-.758L8.8 7.63l2.876-1.725a.667.667 0 00.312-.696z"></path></svg></span></div>
                                                  <p data-qa="accommodation-type" class="accommodation-type">{{ $item->place_type  }}</p></div></div>
                                                  <hr>
                                                <h5  style="margin-bottom: 1px">Adress</h5><p>{{ $item->address }}</p><hr>
                                                    
                                                    <h5  style="margin-bottom: 1px;margin-top: 1px">Email</h5><p>{{ $item->Email }}</p>
                                                    <hr>
                                                    <h5  style="margin-bottom: 1px;margin-top: 1px">price/night</h5><p>{{ $row->price }} $</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="accordion" class="custom-accordion mb-4">

                                             <!-- end card-->
                
                                        </div>

                                        </div>
                                       
                                        <div class=" m-3 ml-2 w-50 d-inline">
                                          <form action="add_favorite" method="POST">@csrf

                                       <div class=" btn divFav btn-outline-danger"> <button type="submit" class="LableChckboxFav"   for="FavPlce" style="cursor: pointer; " >Add to Favorite</button> <i class='fas fa-heart FavIcon'></i> </div><input type="checkbox" name="favChekbox" id="FavPlce" class="d-none" >
                                       <input type="hidden" value="{{ $item->id }}" name="id">
                                      </form>
                                       <form action="rooms" class="btn " method="POST">
                                          @csrf
                                
                                <input class="btn divFav btn-outline-info p-2" type="submit" value="View Available Rooms " >
                                <input type="hidden" value="{{ $item->id }}" name="id">
                                        </form>
  
                                      </div> 
                                       <div class="card mb-0 dropdownDiv borderService">
                                          <div class="card-header  bg-white" id="headingOne">
                                              <h5 class="m-0">
                                                  <a class="custom-accordion-title d-block pt-2 pb-2 collapsed " data-toggle="collapse" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                                      Services <span class="float-right"><i class="mdi mdi-chevron-down accordion-arrow"></i></span>
                                                  </a>
                                              </h5>
                                          </div>
                                          <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion" >
                                              <div class="card-body text-center">
                                              <div class=" dropdownDiv" aria-labelledby="navbarDropdownService">
                                                @foreach ($services as $service)
                                                  
                            <div class=" float-left d-inline" style="width: 40%; margin-left: 4%;">
                              <p><span  class="mr-2">  {{ $service->service_name }}  </span>  : <span>{{ $service->price }}</span> <i class="fas fa-dollar-sign"></i></p>
                        
                          </div>
                          @endforeach
                          </div>
                                              </div>
                                          </div>
                                      </div>
        
                                    </div>
                                  
                                  
                                  </div>
                                    </div>
                                  
                    </div>
                </div></div>
                                    @endforeach
                                    @endforeach
                                       <!-----------------------End Row----------------------------->
       
                            
                <!-- --------------------------------Map div -------------------- -->
        
              
        
            
            <div class="col-lg-7 col-xl-5 d-none" id="MapDiv">  
                <div class="card shadow mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h6 class="text-primary font-weight-bold m-0">The Map</h6>
                        
                    </div>
                    <div class="card-body" id="map" style="height: 500px;width: 1000px;">
                      
                      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d214479.3955042594!2d36.31771421552651!3d33.48410128782278!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sar!2s!4v1621886633759!5m2!1sar!2s" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                     </div>
                </div>
            </div>
        </div>
            
        </div>
        
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
          <!-- footer -->
           
            <!-- ============================================================== -->
            <!-- End footer -->
        
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog mdl" role="document">
        <div class="modal-content">
          <div class="modal-header p-4 headercolor">
            <h5 class="modal-title  text-white" id="exampleModalLongTitle">Room Info</h5>
             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body bgColorAll">
              <center>
              <form class="form-horizontal mt-3">
                <div class="oneRoom">
                  <div class="borderForm p-2">
                    <p class="text-center mb-0 p-2 m-20 d-inline">
                      <small id="name45" class=" badge-default  form-text  font-14 p-20">Room</small>
                    </p>
                     <span onclick="RPRoom()" class="borderInput activbtn cerc"  style="cursor: pointer;">-</span><input id="al" value="1" class="form-control w-50 d-inline m-2 RoomInfo" readonly><span onclick="PlRoom()"  class="borderInput activbtn" style="cursor: pointer;">+</span> 
                      <p class="text-center mb-0 p-2 m-20 d-inline">
                      <small id="name45" class=" badge-default  form-text  font-14 p-20">Adult</small>
                    </p>
                    <span onclick="RPAdult()" class="borderInput activbtn"  style="cursor: pointer;">-</span><input id="ad" value="1" class="form-control w-50 d-inline m-2 RoomInfo"  readonly><span onclick="PlAdult()"  class="borderInput activbtn"  style="cursor: pointer;">+</span>
                     <p class="text-center mb-0 p-2 m-20 d-inline">
                       <small id="name45" class=" badge-default  form-text  font-14 p-20">Child</small>
                      </p>
                      <span onclick="RPChild(),ageCildes()" class="borderInput activbtn"  style="cursor: pointer;">-</span><input id="ch" value="0" class="form-control w-50 d-inline m-2 RoomInfo"  readonly ><span onclick="PlChilde() , ageCildes()" class="borderInput activbtn"  style="cursor: pointer;">+</span>
                      <br/>
                      <span id="ChildrenAgeH1" class="text-danger"></span>
                      <div id="DivAgeChilde" class="m-1"></div>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="submit" class="btn headercolor btn-lg  done" id="done" onclick="doneForm()" data-dismiss="modal">Done</button>
                   </form>
                  </center>
                  </div>
                </div>
              </div>
              </div>
  
    <!-- ============================================================== -->
    @include('layouts.footer')
    <!-- This Page JS -->
    	<!--==============my Java===========-->
	<script src="lib/pro index.js">
	</script>
    <script>
    $('#slimtest1, #slimtest2, #slimtest3, #slimtest4').perfectScrollbar();
    </script>
    <script>
        var divMap = document.getElementById("MapDiv");
        var ResearshDiv = document.getElementById("ResearshDiv");
        var SpanShowMap= document.getElementById('SpanShowMap');
        var ValueMonye = document.getElementById("customRange2");
        var price = document.getElementById("price");


        var LableChckboxFav = document.getElementsByClassName("LableChckboxFav");
        var divFav = document.getElementsByClassName('divFav');
       
        

        for( i = 0 ; i < LableChckboxFav.length ; i ++){
          LableChckboxFav[i].addEventListener("click",Selected);
}
        function addFav()
        {
          alert(favChekbox.checked); 
        }
        function ShowValue()
        {
        price.innerHTML = ValueMonye.value;
        }

        function ShowMap()
        {
            if(SpanShowMap.innerHTML == "Show Map")
            {
            ResearshDiv.classList.remove("col-xl-12");
            ResearshDiv.classList.add("col-xl-7");
            divMap.classList.remove("d-none");
            SpanShowMap.innerHTML = "Hide Map";
        }
        else if (SpanShowMap.innerHTML =="Hide Map")
        {
            ResearshDiv.classList.remove("col-xl-7");
            ResearshDiv.classList.add("col-xl-12");
            divMap.classList.add("d-none");
            SpanShowMap.innerHTML = "Show Map";
        }
        }
        function Selected()
        {
          if(this.innerHTML == "Add to Favorite")
          {
            this.innerHTML ="Remove form Favorite" ;
           
          }
          else if( this.innerHTML =="Remove form Favorite")
          {
            this.innerHTML ="Add to Favorite" ;
          }
         
        }
    </script>

<script>



  $("#pac-input").focusin(function() {
      $(this).val('');
  });

  $('#latitude').val('');
  $('#longitude').val('');


  // This example adds a search box to a map, using the Google Place Autocomplete
  // feature. People can enter geographical searches. The search box will return a
  // pick list containing a mix of places and predicted search terms.

  // This example requires the Places library. Include the libraries=places
  // parameter when you first load the API. For example:
  // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

  function initAutocomplete() {
      var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 24.740691, lng: 46.6528521 },
          zoom: 13,
          mapTypeId: 'roadmap'
      });

      // move pin and current location
      infoWindow = new google.maps.InfoWindow;
      geocoder = new google.maps.Geocoder();
      if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
              var pos = {
                  lat: position.coords.latitude,
                  lng: position.coords.longitude
              };
              map.setCenter(pos);
              var marker = new google.maps.Marker({
                  position: new google.maps.LatLng(pos),
                  map: map,
                  title: 'موقعك الحالي'
              });
              markers.push(marker);
              marker.addListener('click', function() {
                  geocodeLatLng(geocoder, map, infoWindow,marker);
              });
              // to get current position address on load
              google.maps.event.trigger(marker, 'click');
          }, function() {
              handleLocationError(true, infoWindow, map.getCenter());
          });
      } else {
          // Browser doesn't support Geolocation
          console.log('dsdsdsdsddsd');
          handleLocationError(false, infoWindow, map.getCenter());
      }

      var geocoder = new google.maps.Geocoder();
      google.maps.event.addListener(map, 'click', function(event) {
          SelectedLatLng = event.latLng;
          geocoder.geocode({
              'latLng': event.latLng
          }, function(results, status) {
              if (status == google.maps.GeocoderStatus.OK) {
                  if (results[0]) {
                      deleteMarkers();
                      addMarkerRunTime(event.latLng);
                      SelectedLocation = results[0].formatted_address;
                      console.log( results[0].formatted_address);
                      splitLatLng(String(event.latLng));
                      $("#pac-input").val(results[0].formatted_address);
                  }
              }
          });
      });
      function geocodeLatLng(geocoder, map, infowindow,markerCurrent) {
          var latlng = {lat: markerCurrent.position.lat(), lng: markerCurrent.position.lng()};
          /* $('#branch-latLng').val("("+markerCurrent.position.lat() +","+markerCurrent.position.lng()+")");*/
          $('#latitude').val(markerCurrent.position.lat());
          $('#longitude').val(markerCurrent.position.lng());

          geocoder.geocode({'location': latlng}, function(results, status) {
              if (status === 'OK') {
                  if (results[0]) {
                      map.setZoom(8);
                      var marker = new google.maps.Marker({
                          position: latlng,
                          map: map
                      });
                      markers.push(marker);
                      infowindow.setContent(results[0].formatted_address);
                      SelectedLocation = results[0].formatted_address;
                      $("#pac-input").val(results[0].formatted_address);

                      infowindow.open(map, marker);
                  } else {
                      window.alert('No results found');
                  }
              } else {
                  window.alert('Geocoder failed due to: ' + status);
              }
          });
          SelectedLatLng =(markerCurrent.position.lat(),markerCurrent.position.lng());
      }
      function addMarkerRunTime(location) {
          var marker = new google.maps.Marker({
              position: location,
              map: map
          });
          markers.push(marker);
      }
      function setMapOnAll(map) {
          for (var i = 0; i < markers.length; i++) {
              markers[i].setMap(map);
          }
      }
      function clearMarkers() {
          setMapOnAll(null);
      }
      function deleteMarkers() {
          clearMarkers();
          markers = [];
      }

      // Create the search box and link it to the UI element.
      var input = document.getElementById('pac-input');
      $("#pac-input").val("أبحث هنا ");
      var searchBox = new google.maps.places.SearchBox(input);
      map.controls[google.maps.ControlPosition.TOP_RIGHT].push(input);

      // Bias the SearchBox results towards current map's viewport.
      map.addListener('bounds_changed', function() {
          searchBox.setBounds(map.getBounds());
      });

      var markers = [];
      // Listen for the event fired when the user selects a prediction and retrieve
      // more details for that place.
      searchBox.addListener('places_changed', function() {
          var places = searchBox.getPlaces();

          if (places.length == 0) {
              return;
          }

          // Clear out the old markers.
          markers.forEach(function(marker) {
              marker.setMap(null);
          });
          markers = [];

          // For each place, get the icon, name and location.
          var bounds = new google.maps.LatLngBounds();
          places.forEach(function(place) {
              if (!place.geometry) {
                  console.log("Returned place contains no geometry");
                  return;
              }
              var icon = {
                  url: place.icon,
                  size: new google.maps.Size(100, 100),
                  origin: new google.maps.Point(0, 0),
                  anchor: new google.maps.Point(17, 34),
                  scaledSize: new google.maps.Size(25, 25)
              };

              // Create a marker for each place.
              markers.push(new google.maps.Marker({
                  map: map,
                  icon: icon,
                  title: place.name,
                  position: place.geometry.location
              }));


              $('#latitude').val(place.geometry.location.lat());
              $('#longitude').val(place.geometry.location.lng());

              if (place.geometry.viewport) {
                  // Only geocodes have viewport.
                  bounds.union(place.geometry.viewport);
              } else {
                  bounds.extend(place.geometry.location);
              }
          });
          map.fitBounds(bounds);
      });
  }
  function handleLocationError(browserHasGeolocation, infoWindow, pos) {
      infoWindow.setPosition(pos);
      infoWindow.setContent(browserHasGeolocation ?
          'Error: The Geolocation service failed.' :
          'Error: Your browser doesn\'t support geolocation.');
      infoWindow.open(map);
  }
  function splitLatLng(latLng){
      var newString = latLng.substring(0, latLng.length-1);
      var newString2 = newString.substring(1);
      var trainindIdArray = newString2.split(',');
      var lat = trainindIdArray[0];
      var Lng  = trainindIdArray[1];

      $("#latitude").val(lat);
      $("#longitude").val(Lng);
  }

</script>
<script ></script>

</body>


@endsection