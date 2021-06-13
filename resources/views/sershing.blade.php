@extends('layouts.app')


@section('content_head')

<link href="lib/Pro_index.css" rel="stylesheet">
	<style>
		.overlay{
			position: absolute;
    top: 0;
    left: 0;
    height: 99%;
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
		.dis{
			display: none;
		}
		.site-footer{
			margin-top: 20%
		}
	</style>
	<link href="lib/footer.css" rel="stylesheet">
@endsection


@section('content')

@include('layouts.header')
<body style="height: 800px">

	<div class="h-100   text-center bgImg ">
		<div class="overlay"></div>
		  <div >.</div>
			
			<div class=" " style=" line-height: 40% ; margin-top:15%">
			
				<p class="d-inline tripsAidTxt" id="p1" style="margin-bottom: 50%">Trip's Aid</p> <br/>
				<p class="d-inline text-white nextTripsTxt" id="p2">Find your favorait place.</p>
				<br/>
				<p class="d-inline font-22 lastTripsTxt" id="p3">Find the right place in the right area and the right services</p>


				<div class="col-md-10 col-lg-8 col-xl-6 mx-auto mt-3" >
					<form action="searching-"  class=" pl-2" action="get" style="width: 138% ; margin-left:-22%">
						@csrf
						<div class="form-row bgColorAll myBorder p-2">
							<input list="Region" name="region" class="col-12 col-md-2 mb-2 mb-md-0 d-inline  border-info formSr" placeholder="The Region"  >
							<datalist id="Region">
								@foreach ($regoins as $regoin)
								<option value="{{$regoin->region_name}}" class="col-12 col-md-2  d-inline border-success"></option>
								@endforeach
						   </datalist>
						   <input type="date" name="check_in" class="border-info d-inline  ml-1 mdate formSr col-12 col-md-2 mb-2 mb-md-0 "  data-toggle="tooltip" data-placement="bottom" title=" check in" placeholder="check in" id="mdate">
						   <input type="date" name="check_out" class="border-info d-inline  ml-1  mdate formSr col-12 col-md-2 mb-2 mb-md-0"  data-toggle="tooltip" data-placement="bottom" title=" check out" placeholder="check out">
						
						   <input list="typePlace" name="place_type" class="col-12 col-md-2 mb-2 mb-md-0 d-inline  border-info formSr" placeholder="place type"  >
						   <datalist id="typePlace">
							   
							   <option name="place_type" value="Hotel" class="col-12 col-md-2  d-inline border-success"></option>
							   <option name="place_type" value="House" class="col-12 col-md-2  d-inline border-success"></option>
						  </datalist>
				
						   
					
						<button class="btn btn-info  ml-2 col-12 col-md-2" type="submit">Search</button>
					</div>
						</div>
						
						
					</form>
				</div>
				<center>					
											</form>
											</div>
										</center>
										@include('layouts.footer')
									</div>
									
								
						
				  
            <!-- ========================Add Room====================================== -->
	
	
			
    
          
	
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

