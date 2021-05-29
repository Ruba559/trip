@extends('layouts.app')

@section('content_head')
    <link rel="stylesheet" type="text/css" href="lib/bootstrap.minlogin.css">
	<link rel="stylesheet" type="text/css" href="lib/util.css">
	<link rel="stylesheet" type="text/css" href="lib/main.css">

	<style>
		body{
    background: -webkit-linear-gradient(left, #5e80a7, #b8ecfa);
  }
	</style>
@endsection

@section('content')

<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form p-l-55 p-r-55 p-t-178" method="POST" action="{{ route('login') }}">
					@csrf
                    <span class="login100-form-title">
						Sign In
					</span>

					<div class="wrap-input100 validate-input m-b-16" data-validate="Please enter username">
						<input class="input100 @error('email') border-red-500 @enderror" type="email" name="email" placeholder="Email" value="{{ old('email') }}" required autocomplete="email" autofocus>
						<span class="focus-input100"></span>
					</div>
                    @error('email')
                    <p class="text-red-500 text-xs italic mt-4">
                        {{ $message }}
                    </p>
                    @enderror
					<div class="wrap-input100 validate-input" data-validate="Please enter password">
						<input class="input100 @error('password') border-red-500 @enderror" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
					</div>
                    @error('password')
                    <p class="text-red-500 text-xs italic mt-4">
                        {{ $message }}
                    </p>
                    @enderror

                 @if(Session::has('message'))
                     
            {{Session::get('message')}}
             
                           @endif

                        @if (Route::has('password.request'))
					<div class="text-right p-t-13 p-b-23">
						<span class="txt1">
							Forgot
						</span>

						<a href="{{ route('password.request') }}" class="txt2">
							Password?
						</a>
					</div>
                    @endif
					<div class="container-login100-form-btn">
						<button type="submit" class="login100-form-btn">
							Sign in
						</button>
					</div>

					<div class="flex-col-c p-t-13 p-b-40">
					
					
					</div>
				</form>
			</div>
		</div>
	</div>

</body>


@endsection
