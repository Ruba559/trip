@extends('layouts.app')


@section('content_head')

 <link href="lib/magnific-popup.css" rel="stylesheet">
 <link href="lib/animation.css" rel="stylesheet">
 <style>
    .required{
        border: 5px solid #eb2f2f;
        
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
   
</div>
<!-- ============================================================== -->
<!-- Main wrapper - style you can find in pages.scss -->
<!-- ============================================================== -->
<div id="main-wrapper">

    <header class="topbar">
       
       
    </header>
    <div class="page-wrapper">
      
        <div class="row page-titles">
            <div class="col-md-5 col-12 align-self-center">
                <h3 class="text-themecolor mb-0">Profile</h3>
                <ol class="breadcrumb mb-0 p-0 bg-transparent">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active">Profile</li>
                </ol>
            </div>
      
        </div>
     
        <div class="container-fluid">
            <!-- ============================================================== -->
            <!-- Start Page Content -->
            <!-- ============================================================== -->
            <!-- Row -->
            <div class="row">
                <!-- Column -->
                <div class="col-lg-4 col-xlg-3 col-md-5">
                    <div class="card">
                        <div class="card-body p-0">
                           
                            <center class="mt-4">
                                <a class="image-popup-no-margins mt-3" href="../assets/images/users/5.jpg" style="position: relative; top: 1rem;"> <img src="{{ asset($user->picture) }}" class="rounded-circle" width="150"   style="cursor: pointer;"/> </a>   
                              
                                <h3 class="card-title " style="text-transform: capitalize;">{{ $user->first_name  }}</h3>
                            </center>
                        </div>
                        <div>
                            <hr> </div>
                        <div class="card-body"> <small class="text-muted">Email address : </small>
                            <h6>{{ $user->email }}</h6> <small class="text-muted pt-4 db">Phone : </small>
                            <h6>{{ $user->phone_number }}</h6> 
                             <small class="text-muted pt-4 db"> Date of birth :</small><h6> <i class="fa fa-calendar"></i> {{ $user->birthday }}</h6>
                             <small class="text-muted pt-4 db">user  Profile
                             </small>
                            </div>
                    </div>
                </div>
                <!-- Column -->
                <!-- Column -->
                <div class="col-lg-8 col-xlg-9 col-md-7">
                    <div class="card">
                        <!-- Tabs -->
                     
                                <a class="ml-4 mt-2 text-info">Setting</a>
                           
                        <!-- Tabs -->
                        <div class="tab-content" id="pills-tabContent">
                            
                                <div class="card-body">
                                    <form action="update_profile" method="POST" class="form-material"  enctype="multipart/form-data">
                                        @csrf
                                        <div class="col-1 " style="z-index: 4; position: relative; top: -1rem; left: 1rem;">
                                            <label for="choosImg">
                                            <i class="fas fa-camera font-22 bg-info p-2 text-white" style="border-radius: 2rem ;cursor: pointer;"></i>
                                        </label></div>
                                    
                                    <input type="file" name="picture" class="d-none" id="choosImg"  accept="image/*">
                                        <div class="form-group">
                                            <label class="col-md-12">First Name</label>
                                            <div class="col-md-12">
                                                <input type="text" value="{{ $user->first_name }}" name="first_name" class="form-control form-control-line">
                                            </div>
                                        </div>
                                        @error('first_name')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                        <div class="form-group">
                                            <label class="col-md-12">Last Name</label>
                                            <div class="col-md-12">
                                                <input type="text" value="{{ $user->last_name }}" name="last_name" class="form-control form-control-line">
                                            </div>

                                        </div>
                                        @error('last_name')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                        <div class="form-group">
                                            <label for="example-email" class="col-md-12">Email</label>
                                            <div class="col-md-12">
                                                <input type="email" value="{{ $user->email }}" name="email" class="form-control form-control-line" name="example-email" id="example-email">
                                            </div>
                                        </div>
                                        @error('email')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                        <div class="form-group" id="HideDiv">
                                            <label class="col-md-12"> Password</label>
                                            <div class="col-md-12">
                                                <input type="password" value="nnhhyf" class="form-control form-control-line"  readonly>
                                            </div>
                                        </div>
                                        <div class="form-group d-none" id="ChngOldPs">
                                            <label class="col-md-12"> New Password</label>
                                            <div class="col-md-12">
                                                <input type="password" name="password" id="InputoldPassword" value="" class="form-control form-control-line">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group d-none" id="ChngPs">
                                            <label class="col-md-12">Retypepassowrd</label>
                                            <div class="col-md-12">
                                                <input type="password" id="InputNewPassword"  value="" class="form-control form-control-line">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-12">Phone No</label>
                                            <div class="col-md-12">
                                                <input type="text" name="phone_number" value="{{ $user->phone_number }}" class="form-control form-control-line">
                                            </div>
                                        </div>
                                        <input type="hidden" name="id" value="{{ $user->id }}">
                                        <div class="form-group"> <div class="col-sm-12"></div>
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <button class="btn btn-info" type="submit">Update Profile</button> <span id="PasswordBtn" class="btn btn-light-info" onclick="ChangePassword()">Change password</span>
                                            </div>
                                        </div>
                                    </form>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Column -->
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <footer class="footer">
       @Trip's Aid Team
        </footer>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Page wrapper  -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
<!-- ============================================================== -->

<div class="chat-windows"></div>




<script>
    var btnChange = document.getElementById("PasswordBtn");
    var divChangePs =document.getElementById("ChngPs");
    var inputPs = document.getElementById("InputNewPassword");
    var inputoldPs = document.getElementById("InputoldPassword");
    var odDiv = document.getElementById("ChngOldPs");
    var hide = document.getElementById("HideDiv");

  
  
   function ChangePassword()
   {

       if(btnChange.innerHTML=="Change password")
       {
        btnChange.innerHTML ="Undo";
       divChangePs.classList.remove("d-none");
       odDiv.classList.remove("d-none");
       hide.classList.add("d-none");
       inputPs.setAttribute("required", "");
       inputoldPs.setAttribute("required", "");  
       
    }
    else if (btnChange.innerHTML == "Undo")
    {
        btnChange.innerHTML ="Change password";
        divChangePs.classList.add("d-none");
       odDiv.classList.add("d-none");
       hide.classList.remove("d-none");
       inputPs.removeAttribute("required");
       inputoldPs.removeAttribute("required");
       
    }
       
   }
</script>
</body>


@endsection