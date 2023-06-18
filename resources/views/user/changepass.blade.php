@extends('layouts.mainport')

@section('container')
<section style="background-color: #eee;">
    <div class="container py-5">
      <div class="row">
        <div class="col">
          <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
            <ol class="breadcrumb mb-0">
              <li class="breadcrumb-item"><a href="/user/profile">User</a></li>
              <li class="breadcrumb-item active" aria-current="page">Change Password</li>
            </ol>
          </nav>
        </div>
      </div>
  
      <div class="row">
        @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          {{ session('success') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
         @endif
        @if (session()->has('erorpass'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          {{ session('erorpass') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
         @endif
            <form action="/user/updatepass" method="post">
                @csrf
                <div class="row mb-3">
                  <label for="currentpassword" class="col-sm-2 col-form-label">Currentt Password</label>
                  <div class="col-sm-5">
                    <input type="password" name="current_password" class="form-control @error('current_password') is-invalid @enderror">
                    @error('current_password')
                            <div class="invalid-feedback">
                            {{ $message }}
                            </div>
                        @enderror
                </div>
                </div>
                <div class="row mb-3">
                  <label for="new pass" class="col-sm-2 col-form-label">New Password</label>
                  <div class="col-sm-5">
                    <input type="password" name="password" class="form-control @error('new_password') is-invalid @enderror">
                    @error('new_password')
                            <div class="invalid-feedback">
                            {{ $message }}
                            </div>
                        @enderror
                </div>
                </div>
                <div class="row mb-3">
                    <label for="confirm pass" class="col-sm-2 col-form-label">Confirm Password</label>
                    <div class="col-sm-5">
                      <input type="password" name="password_confirmation" class="form-control">
                      
                    </div>
                </div>
               
                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        
      </div>
    </div>
  </section>
@endsection