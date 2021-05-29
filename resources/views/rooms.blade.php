@extends('layouts.app')


@section('content_head')

<style>
	.carousel-inner > .carousel-item > img { height: 60vh ; }
    
    @media only screen and (max-width:  768px){

    .sec{
        width: 100%;    
    }
    }
    @media only screen and (min-width:  769px){

.sec{
       width: 80%;
       background-color:#e5e9eb ;
}
    }

.overlay{    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    width: 100%;
    background-color: #212529;
    opacity: .5;}
    
    .DontForget{
       color:  #1eacbe;
    }
  
    .sec{
        border: 0.15em groove #ccc;
        padding-top: 1%;
        border-radius: 0.2em;
        margin-bottom: 3%;
    }
    .paymentMechanism{
        width: 25%;
        
    }
    /*--------overflow----------*/

    .tab-pane {
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
    <link href="lib/footer.css" rel="stylesheet">
@endsection


@section('content')


<body style="background-color: #eef4f7">

                  <div class="overlay"></div>
                 
                  @foreach ($rooms as $item)

                  @foreach($item->room as $row)

                 <div class="container">
                      <div class="row" >
                          <div class="col-md-10 col-lg-8 mx-auto">
                              <div class="site-heading">
                                  <h1 class="text-white" style="text-shadow: 0.05em 0.08em 0.1em #272626;">{{ $item->place_name }}</h1>
                                
                              </div>
                          </div>
                      </div>
                  </div>
                  
             
             
              
           
               <!--=============================================End header=================================-->
          
              
                     <div class="card " >
                      <div class=" " style="background-color: #eef4f7">
                          <ul class="nav nav-pills card-header-pills " style="background-color: #eef4f7">
                            <li class="nav-item">
                              <a class="btn btn-light" data-toggle="tab" href="#pill1">  <i class="fas fa-images"></i>photos</a>
                            </li>
                            <li class="nav-item">
                              <a class="btn btn-light" data-toggle="tab" href="#pill2"> <i class="fas fa-info"></i> Information</a>
                            </li>
                            <li class="nav-item ">
                             <a class="btn btn-light" data-toggle="tab" href="#pill3"><i class=" icon-briefcase"></i> Services </a>
                            </li>
                          </ul>
                        </div>
                       <!-- .card-body.tab-content  -->
                        <div class="card-body tab-content">

                          <!--------====================place photos tab===========-->
                          <div class="tab-pane fade show active" id="pill1">
                              <div class=" zoom-gallery img-fluid ">
                                  <!------href all photo-->
                                  <a href="../assets/images/background/images (5).jpg" title="."> </a>
                                  <a href="../assets/images/background/تنزيل (1).jpg" title="."> </a>
                                  <a href="../assets/images/background/تنزيل (2).jpg"></a>
                                 
                                      <!----img-->
                                   
                                      <a href="../assets/images/background/تنزيل (2).jpg" title=".">
                                          <img src="../assets/images/background/تنزيل (2).jpg" class=" col-md-3" alt="img" /> </a>
                                          <a href="../assets/images/background/تنزيل (1).jpg" title=".">
                                              <img src="../assets/images/background/تنزيل (1).jpg" class=" col-md-3" alt="img"  /> </a>
                                      
                                              <a href="../assets/images/background/images (5).jpg" title=".">
                                                  <img src="../assets/images/background/images (5).jpg" class=" col-md-3" alt="img"  /> </a>

                                                  <a href="../assets/images/background/تنزيل (1).jpg" title=".">
                                                      <img src="../assets/images/background/تنزيل (1).jpg" class=" col-md-3" alt="img"  /> </a>
                                            <a href="../assets/images/background/تنزيل (2).jpg" title=".">
                                          <img src="../assets/images/background/تنزيل (2).jpg" class=" col-md-3" alt="img" /> </a> 
                                      </div>
                          </div>
                          <!--------====================place Info tab===========-->
                          <div class="tab-pane fade pl-4" id="pill2">
                              <div class="float-left col-12 col-md-4"> <i class="ti-location-pin text-dark-success"></i><span class="subheading d-inline" id="Location">{{ $item->address }}</span>
                                  <br><i class="mr-2 mdi mdi-email font-20 text-dark-success"></i><span class="subheading d-inline" id="stars">{{ $item->Email }}</span>
                              </div>
                                  <div class="float-left col-12 col-md-4 ">
                                   <i class="fas fa-star text-dark-success"></i> <span class="subheading d-inline" id="stars">{{ $item->stars }} stars</span><span class="subheading">
                                       <br><i class="fas fa-heart text-dark-success"></i><span id="likes"> 5 </span> Likes <span id="CountRatng"> 152 </span> rating pepoele</span>
                                      </div>
                             <!--------====================place Services tab===========-->
                          </div>
                          <div class="tab-pane fade" id="pill3">
                          <div class="float-left col-12 col-md-4">
                              <span class="PService "><span class="nService">Swimming pool</span> : <span class="PriceServise">500</span><i class="ti-money text-dark-success"></i></span>
                              <br>
                              <span class="PService "><span class="nService">Resturant</span> : <span class="PriceServise">-</span><i class="ti-money text-dark-success"></i></span>
                              <br>
                              <span class="PService"><span class="nService">Swimming pool</span> : <span class="PriceServise">500</span><i class="ti-money text-dark-success"></i></span>
                              <br>
                              <span class="PService"><span class="nService">Resturant</span> : <span class="PriceServise">-</span><i class="ti-money text-dark-success"></i></span>
                          </div>
                          <div class="float-left col-12 col-md-4" >
                              <span class="PService "><span class="nService">in one Room air-conditioning</span> : <span class="PriceServise">-</span><i class="ti-money text-dark-success"></i></span>
                              <br>
                              <span class="PService"><span class="nService">Central air-conditioning</span> : <span class="PriceServise">-</span><i class="ti-money text-dark-success"></i></span>
                              <br>
                              <span class="PService"><span class="nService">clothes Washer</span> : <span class="PriceServise">50</span><i class="ti-money text-dark-success"></i></span>
                          </div>   
                          </div>
                        </div><!-- /.card-body -->
                      </div><!-- /.card -->
                       
                <!---====================================Room===============================-->
              <div class="team-boxed">
                  <div class="container">
                      <div class="intro">
                          <h2 class="text-center" >Available rooms<br /></h2>
                          <a href="#" class="text-center">you can the available rooms and thier details to select the rooms you want to book<br /><span class="text-center DontForget" >Don't forget to see the payment mechanism to ensure booking</span></a>
                      </div>
                      <div class="row people mb-3">
                       
                           
                        
               
                          <div class="col-md-6 col-lg-4 item">
                              <div class="box">
                                  <div  style="height: 200px; background-color: #fdfeff;">
                                      <a class="image-popup-no-margins" href="users table.jpg" ><img  src="users table.jpg"/></a>
                                  </div>
                                  <form action="select_room" method="POST">
                                      @csrf
                                  <h3 class="name CntRoom">Room </h3>
                                   <p class="text-info"><span class="title text-info">{{ $row->price }}</span><i class="fas fa-dollar-sign"></i> for night</p>
                                  <p class="description">{{ $row->description }}&nbsp;<br></p>
                                  <input type="hidden" value="{{ $row->id }}" name="id"> 
                                  <button class="btn btn-primary selectRoom" type="submit">SELECT ROOM</button>
                                 
                                  </form>
                                </div>
                          </div>
                          @endforeach
                          @endforeach
                      
                          
                  </div>
              </div>
            
              <section>
                  <center>
                    <div class="sec">
                        <div class="paymentMechanism font-18 d-inline">Select the rooms you want to book and press <span class="font-weight-bolder">Reserve</span> to proceed to the next reservation procedures</div>
                    <a href="login" class="btn btn-primary ml-1" style="margin-bottom: 2%;">Reserve</a>
                </div>

                  <div class="sec">
                      <div class="paymentMechanism font-18 d-inline">You are not logged in , you must<span class="font-weight-bolder"> log in </span>and return to this page to complate the reservation procedures</div>
                  <a href="login" class="btn btn-primary ml-1" style="margin-bottom: 2%;" target="_blank">Login</a>
              </div>
          </center>
              </section>
            </div>
             
                <div class="container-fluid">



                
                    <!--=============================================End header=================================-->
                    <div class="container mt-3">
                        <div class="card">
                            
                            <div class="card-body">
                               <h1>Confirm reservation</h1>
                               <hr>
                        <p class="text-dark">The reservation is recorded in the name of the current account .... At least half of the amount must be paid before the lapse of 24 hours since the confirmation of the reservation in order for the reservation to be confirmed</p>
                        <span><strong class="text-dark font-italic"> </span>the account :</strong> </span><span>5584-5874-963</span><br>
                        <p><strong class="text-dark font-italic"> bill :</strong> <span id="bill">0</span> $</p>
                        <p><strong class="text-dark font-italic"> number of room :</strong> <span id="NOfRoomSpan">0</span></p>
                        <p><strong class="text-dark font-italic"> for any problem please contact with us</strong></p>
                        <span> four season.25@gmail.com</span>
                        <div class="alert alert-danger mt-3" role="alert">
                           <strong>confirm - </strong> I have read the reservation condition  <button class="btn btn-danger ml-2">Reserve</button>
                       </div>
                        
                       </div>
                       </div>
                  </div>
                            
                     <!---====================================Room===============================-->
                  
               </div>   


                
   <script>
        var SelectRoom = document.getElementsByClassName("selectRoom");
        var nRoom = document.getElementsByClassName("CntRoom");
        var NOfRoomSpan = document.getElementById("NOfRoomSpan");
        var priceForNight = document.getElementsByClassName("title");
        var bill = document.getElementById("bill");

     

        for(i = 0 ; i < nRoom.length ; i ++)
        {
            nRoom[i].innerHTML ="Room" +  (i+1);

        }

       
for( i = 0 ; i < SelectRoom.length ; i ++){
    SelectRoom[i].addEventListener("click",Selected);
}

function Selected (){
    
    
    
    if(this.innerHTML =="SELECT ROOM")
    {
        this.innerHTML = "Selected";
        this.classList.add("btn-danger");
        this.classList.remove("btn-primary");
        this.value = "Selected";
        numberofRoom();
      
    }
    
    else if(this.innerHTML =="Selected")
    {
        this.innerHTML = "SELECT ROOM";
        this.classList.remove("btn-danger");
        this.classList.add("btn-primary");
        this.value = "unselect";
        numberofRoom();
       
    }

}
function numberofRoom(){
        var h=0;
        var billN = 0;
        for( i = 0 ; i < SelectRoom.length ; i ++)
        {
            if(SelectRoom[i].innerHTML =="Selected")
            {
            h++;
            billN += Number(priceForNight[i].innerHTML);
            bill.innerHTML = billN;
            }
        }
        NOfRoomSpan.innerHTML = h;

    }

    </script>

      @include('layouts.footer')
</body>


@endsection