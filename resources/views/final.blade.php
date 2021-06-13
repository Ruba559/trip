@extends('layouts.app')

@section('content_head')


<style>

    
    .DontForget{
       color:  #1eacbe;
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

<body style="background-color: #eef4f7">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
   	
    <nav class="navbar navbar-expand-md  navbar-light bg-info">
               
       
      </nav> 
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ========2===================================================== -->
          
                <div class="container-fluid">



                
                    <!--=============================================End header=================================-->
                    <div class="container mt-3">
                        <div class="card">
                            
                            <div class="card-body">

                                <form action="final_reservation" method="POST">@csrf

                               <h1>Confirm reservation</h1>
                               <hr>
                        <p>The reservation is recorded in the name of the current account .... At least half of the amount must be paid before the lapse of 24 hours since the confirmation of the reservation in order for the reservation to be confirmed</p>
                        <span>booking name : </span><span><input type="text" name="booking_name" ></span><br>
                        <p>check in  : <span id="bill"><input type="date" name="s_date" ></span> </p>
                        <p>check out  : <input type="date" name="e_date" ></p>
                        <div class="alert alert-danger mt-3" role="alert">

                            
                            <input type="hidden" name="price" value="{{ $rooms_selects->price }}">
                            
                            <input type="hidden" name="id" value="{{ $rooms_selects->id }}">
                           <strong>confirm - </strong> I have read the reservation condition  <button type="submit" class="btn btn-danger ml-2">Reserve</button>
                       </div>
                        
                       </div>
                       </div>
                    </form>
                  </div>
                            
                     <!---====================================Room===============================-->
                   <div class="team-boxed">
                       <div class="container">
                           <div class="intro">
                               <h2 class="text-center" >Selected rooms<br /></h2>
                               <span href="#" class="text-center DontForget">Check the exact drowning to be booked before booking confirmation</span>
                           </div>
                           <div class="row people">
                              
                                   
                               <div class="col-md-6 col-lg-4 item">
                                   <div class="box">
                                       <h3 class="name CntRoom">Room </h3>
                                       <p class="text-info"><span class="title text-info">{{ $rooms_selects->price }}</span><i class="fas fa-dollar-sign"></i> for night</p>
                                       <p class="description">{{ $rooms_selects->description }}&nbsp;<br></p></div>
                               </div>
   
                            
                       </div>
                   </div>
                 
               
                 
               </div>
               </div>
                   
    <script>
        var nRoom = document.getElementsByClassName("CntRoom");
        var NOfRoomSpan = document.getElementById("NOfRoomSpan");
        var SelectRoom = document.getElementsByClassName("selectRoom");
        var priceForNight = document.getElementsByClassName("title");
        var bill = document.getElementById("bill");


        for(i = 0 ; i < nRoom.length ; i ++)
        {
            nRoom[i].innerHTML ="Room " +  (i+1);

        }
        for( i = 0 ; i < SelectRoom.length ; i ++){
    SelectRoom[i].addEventListener("click",Selected);
}
        NOfRoomSpan.innerHTML = nRoom.length;

         
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

}

    </script>
    <script>
       

    </script>
    
        
</body>



@endsection