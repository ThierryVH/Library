@extends('layouts.app')

@section('content')

<!-- !PAGE CONTENT! -->
<main class="w3-row">

	<h1 class="w3-center">Log in</h1>
	<div class="w3-col s12 m6 l4 w3-padding login">
			<form class="w3-row w3-border w3-padding" action="{{ route('login') }}" method="post">
				@csrf
				<div class="">
					<input class="w3-input w3-margin-bottom" type="text" name="name" value="{{ old('name') }}" placeholder="Username" required autofocus>
					@if ($errors->has('name'))
							<span class="invalid-feedback">
									<strong>{{ $errors->first('name') }}</strong>
							</span>
					@endif
				</div>
				<div class="">
					<input class="w3-input w3-margin-bottom" type="password" name="password" value="{{ old('password') }}" placeholder="Password" required>
					@if ($errors->has('password'))
							<span class="invalid-feedback">
									<strong>{{ $errors->first('password') }}</strong>
							</span>
					@endif
				</div>
				<div class="w3-margin-bottom">
						<label>
								<input type="checkbox" name="remember_toker" {{ old('remember_token') ? 'checked' : '' }}> Remember Me
						</label>
				</div>
				<input class="w3-button w3-margin-bottom w3-col w3-blue" type="submit" name="login" value="Log In">
			</form>

			<p class="w3-margin-top w3-center">Username : Invité<br>Password : codetoujourstuminteresses</p>
	</div>
</main>

<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Login</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-sm-4 col-form-label text-md-right">Username</label>

                            <div class="col-md-6">
                                <input id="email" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember_toker" {{ old('remember_token') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->
@endsection
