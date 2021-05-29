@extends('layouts.app')

@section('content_head')



<style>
    body{
background: -webkit-linear-gradient(left, #5e80a7, #b8ecfa);
}
</style>

<link rel="stylesheet" type="text/css" href="lib/bootstrap.minlogin.css">
<link rel="stylesheet" type="text/css" href="lib/util.css">
<link rel="stylesheet" type="text/css" href="lib/main.css">
    
@endsection

@section('content')
<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				
				<form class="login100-form validate-form p-l-55 p-r-55 p-t-178" method="POST" action="{{ route('password.email') }}">
                    @csrf
                    <span class="login100-form-title">
						Reset password
					</span>

					<div class="text-left  p-t-13 p-b-35">
						<span class="txt1 text-dark font-18">
							please inter your Email to send reset the password
						</span>
					</div>
					<div class="wrap-input100 validate-input m-b-16 " data-validate="Please enter username">
						<input name="email" class="input100 @error('email') border-red-500 @enderror" type="Email"  placeholder="Email" required autocomplete="email" autofocus>
						<span class="focus-input100"></span>
					</div>
                    @error('email')
                    <p class="text-red-500 text-xs italic mt-4">
                        {{ $message }}
                    </p>
                    @enderror


                    <p class="mt-4 text-xs text-blue-500 hover:text-blue-700 whitespace-no-wrap no-underline hover:underline sm:text-sm sm:order-0 sm:m-0">
                        <a class="text-blue-500 hover:text-blue-700 no-underline" href="{{ route('login') }}">
                            {{ __('Back to login') }}
                        </a>
                    </p>

					<div class="container-login100-form-btn m-t-30">
						<button type="submit" class="login100-form-btn">
							done
						</button>
					</div>

					<div class="flex-col-c p-t-13 p-b-40">
					
					
					</div>
				</form>
			</div>
		</div>
	</div>


<!--===============================================================================================-->
	<script type="text/javascript" async="" src="./Login V8_files/analytics.js.تنزيل"></script><script src="./Login V8_files/jquery-3.2.1.min.js.تنزيل"></script>
<!--===============================================================================================-->
	<script src="./Login V8_files/animsition.min.js.تنزيل"></script>
<!--===============================================================================================-->
	<script src="./Login V8_files/popper.js.تنزيل"></script>
	<script src="./Login V8_files/bootstrap.min.js.تنزيل"></script>
<!--===============================================================================================-->
	<script src="./Login V8_files/select2.min.js.تنزيل"></script>
<!--===============================================================================================-->
	<script src="./Login V8_files/moment.min.js.تنزيل"></script>
	<script src="./Login V8_files/daterangepicker.js.تنزيل"></script>
<!--===============================================================================================-->
	<script src="./Login V8_files/countdowntime.js.تنزيل"></script>
<!--===============================================================================================-->
	<script src="./Login V8_files/main.js.تنزيل"></script>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async="" src="./Login V8_files/js"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-23581568-13');
	</script>
<script defer="" src="./Login V8_files/beacon.min.js.تنزيل" data-cf-beacon="{&quot;rayId&quot;:&quot;654d3ea30e6db79f&quot;,&quot;token&quot;:&quot;cd0b4b3a733644fc843ef0b185f98241&quot;,&quot;version&quot;:&quot;2021.5.1&quot;,&quot;si&quot;:10}"></script>


</body>
@endsection
