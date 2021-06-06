@extends('layouts.app')


@section('content_head')

<link href="lib/Pro_index.css" rel="stylesheet">
	<style>
		.overlay{
			position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    width: 100%;
    background-color: #212529;
    opacity: .3;
			
		}
		.bgImg{
			background-image: url(images/aaa.jpg);
			background-size: cover;		
		}
		.tripsAidTxt{
			text-shadow: 4px 2px 1px #e3ebf1;
			font-family: 'papyrus';
			font-size: 2.9em;
			font-weight: 800;
			color: #6b92b4;
			
		}
		.nextTripsTxt{
			font-family: 'ink free';
			text-shadow: 2px 2px 3px  #474c5ae3;
			font-size: 2.4em;
		
		}
		
		.lastTripsTxt{
			color:#eff0ff;
			text-shadow: 2px 2px 3px  #41444ee3;
			font-family: 'ink free';
		}
	</style>
	<link href="lib/footer.css" rel="stylesheet">
@endsection


@section('content')

@include('layouts.header')
<body style="height: 750px">

	<div class="h-100   text-center bgImg ">
		<div class="overlay"></div>
		<header class="topbar p-0 bg-transparent">
					<div class="navbar bg-transparent navbar-expand bg-light navigation-clean font-20" id="navbarSupportedContent">
						<ul class="navbar-nav float-left ">
						
							<li class="nav-item">
								<a class="nav-link t text-white ml-5" href="#"> Help
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link text-white" href="#">
								Login
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link  text-white" href="#">
								  Sign Up
								</a>
							</li>
						</ul>
					</div>
				</nav>
			</header>
			    
			
			<div class="mt-5 " style="line-height: 40%">
			
				<p class="d-inline tripsAidTxt" id="p1" style="margin-bottom: 50%">Trip's Aid</p> <br/>
				<p class="d-inline text-white nextTripsTxt" id="p2">Find your favorait place.</p>
				<br/>
				<p class="d-inline font-22 lastTripsTxt" id="p3">Find the right place in the right area and the right services</p>


				<div class="col-md-10 col-lg-8 col-xl-7 mx-auto mt-3">
					<form action="searching-" action="get">
						@csrf
						<div class="form-row bgColorAll myBorder p-2">
							<input list="Region" name="region" class="col-12 col-md-2 mb-2 mb-md-0 d-inline  border-success formSr" placeholder="The Region"  >
							<datalist id="Region">
								@foreach ($regoins as $regoin)
								<option value="{{$regoin->region_name}}" class="col-12 col-md-2  d-inline border-success"></option>
								@endforeach
						   </datalist>
						   <input type="text" name="check_in" class="border-success d-inline  ml-1 mdate formSr col-12 col-md-2 mb-2 mb-md-0 " placeholder="check in" id="mdate">
						   <input type="text" name="check_out" class="border-success d-inline  ml-1  mdate formSr col-12 col-md-2 mb-2 mb-md-0" placeholder="check out">
						   <input type="text" name="place_type" class="border-success d-inline  ml-1  mdate formSr col-12 col-md-2 mb-2 mb-md-0" placeholder="place type">
						
					
						
						   <div class="col-12 col-md-3 mb-2 mb-md-0 bg-white font-weight-bolder ml-1 pt-2 text-dark" style="border-radius: 0.3rem; border:0.1em solid #21c1d6;font-size:0.75rem ;" data-toggle="modal" data-target="#exampleModal" id="RoomInfo"><br>
							<i class="fas fa-users"></i><span id="guests"> Guests </span>
						   </span>
						</div>
							<div class="col-12 col-md-2"><button class="btn btn-twitter btn-block btn-lg mt-1" type="submit">Search</button></div>
						</div>
						
						
					</form>
				</div>
				<center>


								<!-- ==============================End form================================ -->
								<!-- ================================= Modal=============================== -->
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
													<div class="form-horizontal mt-3">
														
														<div class="oneRoom">
															<div class="borderForm p-2">
															 
															  
															    <p class="text-center mb-0 p-2 m-20 d-inline">
																	<small id="name45" class=" badge-default  form-text  font-14 p-20">Adult</small>
																</p>
																<span onclick="RPAdult()" class="borderInput activbtn"  style="cursor: pointer;">-</span><input id="ad"  value="1" class="form-control w-50 d-inline m-2 RoomInfo"  readonly><span onclick="PlAdult()"  class="borderInput activbtn"  style="cursor: pointer;">+</span>
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
																<span  class="btn headercolor btn-lg  done" id="done" onclick="doneForm()" data-dismiss="modal">Done</span>
															</div>
															</div>
														</div>
													</div>
												  </div>
												</div>
												<input id="al" value="1" class="form-control w-50 d-none m-2 RoomInfo" name="adult"  >
											</form>
											</div>
										</center>
									</div>
									@include('layouts.footer')
								
						
				  
            <!-- ========================Add Room====================================== -->
	
	
			<div class="d-none"><div id="DivAgeChilde2"><select class="form-control border--darksuccess d-inline" style="width: 15%;">
				<option class="disabled" selected></option>
				<option value="0">0</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
				<option value="7">7</option>
				<option value="8">8</option>
				<option value="9">9</option>
				<option value="10">10</option>
				<option value="11">11</option>
				<option value="12">12</option>
				<option value="13">13</option>
				<option value="14">14</option>
				<option value="15">15</option>
				<option value="16">16</option>
				<option value="17">17</option>
			
			</select>					</div>	
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
	
	<!--==============my Java===========-->
	<script src="lib/pro_index.js">
	</script>
@endsection

