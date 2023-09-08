@extends('layouts.mylogin')

@section('container')

    <div class="row centerDiv">
			<div class="col-sm-12 my-auto">
				<div class="card border-0">
				  <div class="row">
				    <div class="col-md-8">
				      <div class="card-body">
				      	<img src="/assets/img/hero-carousel/ptbwk.jpg" class="img-fluid rounded-start shadow" alt="...">
				      </div>
				    </div>
				    <div class="col-md-4">
				      <div class="card-body">
				      	<div class="mb-5 text-center">
                  <h2 class="text-center mb-3">Login</h2>
				      	</div>

           @if (session()->has('loginError'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                  {{ session('loginError') }}
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                  {{ session('success') }}
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

			      		<form action="/login"  method="post">
                   @csrf
			      		  <div class="mb-3">
                    <div id="emailHelp" class="form-text">fill in your username</div>
			      		    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="enter email...">
                    @error('email')
                      <div class="invalid-feedback">
                      {{ $message }}
                       </div>
                   @enderror
			      		  </div>
			      		  <div class="mb-3">
                    <div id="emailHelp" class="form-text">fill in your password</div>
			      		    <input type="password" name="password" class="form-control" placeholder="enter password ...">
			      		  </div>
			      		  <div class="mb-3 form-check">
			      		    <input type="checkbox" class="form-check-input" id="exampleCheck1">
			      		    <label class="form-check-label" for="exampleCheck1">Remember me</label>
			      		  </div>
			      		  <button type="submit" class="btn btn-primary w-100">SIGN IN</button>
			      		</form>
					        	Jika belum register klik <a href="/register">disini</a>
				      </div>
				    </div>
				  </div>
				</div>
			</div>
		</div>
    


@endsection