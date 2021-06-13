
@extends('layouts.app')


@section('content_head')

<link href="lib/regiser.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="lib/bootstrap-material-datetimepicker.css">

<style>
    .dtp > .dtp-content > .dtp-date-view > header.dtp-header{
        background: #036cdb;
    }
    .dtp div.dtp-date, .dtp div.dtp-time { background: #2283eb;}
    .dtp table.dtp-picker-days tr > td > a.selected{  background: #0367d3;}
    .dtp .p10 > a{color: #0062cc;}
    .dtp .dtp-actual-meridien a.selected {    background: #0062cc;}
    .year-picker-item.active{background: #0062cc;}
    .year-picker-item:hover{background: #0062cc;}
    .ti-angle-up{
        color: white;
    }


</style>

@endsection

@section('content')



<div class="container register">
    <div class="row">
        <div class="col-md-3 register-left">
            <img src="" alt="Logo">
            <h3>Welcome !</h3>
            <p>You can add your place to the site so that others can find it easily and book it</p>
            <form action="register_servicemanegar-" method="POST" enctype="multipart/form-data">
                @csrf
            <input type="submit" name="" value="Regiser"><br>
        </div>
        <div class="col-md-9 register-right">
            <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">User</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Place</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade active show" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <h3 class="register-heading">User information</h3>
                   

                    <div class="row register-form">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" value="{{ old('first_name') }}" placeholder="First Name *" value="" name="first_name">
                            </div>
                            @error('first_name')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                            <div class="form-group">
                                <input type="text" class="form-control"  value="{{ old('last_name') }}" placeholder="Last Name *" value="" name="last_name">
                            </div>
                            @error('last_name')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                            <div class="form-group">
                                <input type="password" class="form-control"  placeholder="Password *" value="" name="password">
                            </div>
                            @error('password')
                            <span class="text-danger">{{$message}}</span>
                            @enderror

                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Confirm Password *" value="" name="confirm_password">
                            </div>
                            <div class="form-group">
                               
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="email" class="form-control" value="{{ old('Email') }}" placeholder="Your Email *" value="" name="Email">
                            </div>
                            @error('Email')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                            <div class="form-group">
                                <input type="text" minlength="10" maxlength="10"  value="{{ old('phone_number') }}" class="form-control" placeholder="Your Phone *" value="" name="phone_number">
                            </div>
                            @error('phone_number')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                            <div class="form-group">
                                <label for="chooseFile"><span class="form-control">photo certificate</span></label>
                                
                                <input id="chooseFile" type="file" class="form-control d-none" placeholder="photo certificate *" value="" name="photo_certificate">
                            </div>
                            @error('photo_certificate')
                            <span class="text-danger">{{$message}}</span>
                            @enderror

                            <div class="form-group">
                                <input type="text" value="{{ old('place_name') }}" class="form-control" placeholder="Your Place *" value="" name="place_name">
                            </div>
                            @error('place_name')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                @if(Session::has('message'))
                     
                {{Session::get('message')}}
                 
                               @endif
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    
                    <h3 class="register-heading">Place information</h3>
                    <div class="row register-form">
                        <div class="col-md-6">
                
                           
                
                        </div>

                        <div class="col-md-6">
                       
                           
                         <div class="form-group">
                           
            


                            
                    </div>
                        </div>
                        
                           
                        </div>
                </div>
            </div>
        </form>
        </div>
   
    </div>

</div>	




<script>
//==================================================//
//                  Normal Touchspin                //
//==================================================//
$("input[name='demo3']").TouchSpin();
$("input[name='demo1']").TouchSpin();
$("input[name='demo2']").TouchSpin();

</script>
<script>
$(function(){
    $('.mdate').bootstrapMaterialDatePicker({ weekStart: 0, time: false });

    

});
hljs.initHighlightingOnLoad();
</script>

<script>
var stars = document.getElementById("stars");
function dd(){alert(stars.value)}
function starsValidate(){
    if (stars.value > 5){
        stars.value = 5;
    }
   else if (stars.value < 1 && stars.value != Number(""))
   {
        stars.value = 1;
       
    }
    else if (stars.value == 0)
   {
        stars.value = null;
       
    }
    
  
}
</script>
@endsection