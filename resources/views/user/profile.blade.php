@extends('layouts.mainport')

@section('container')
<section style="background-color: #eee;">
    <div class="container py-5">
      <div class="row">
        <div class="col">
          <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
            <ol class="breadcrumb mb-0">
              <li class="breadcrumb-item"><a href="/user">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">User Profile</li>
            </ol>
          </nav>
        </div>
      </div>
  
      <div class="row">
        <div class="col-lg-4">
          <div class="card mb-4">
            <div class="card-body text-center">
              <img src="{{ Storage::url('public/photo/').auth()->user()->photo }}" alt="avatar"
                class="rounded-circle img-fluid" style="width: 150px;">
              <h5 class="my-3">{{ auth()->user()->name }}</h5>
              <p class="text-muted mb-1">Full Stack Developer</p>
              <p class="text-muted mb-4">Bay Area, San Francisco, CA</p>
              <div class="d-flex justify-content-center mb-2">
                <a href="/user/ubahpass" class="btn btn-primary">Edit password</a>
                <a href="/user/ubahprofile" class="btn btn-outline-primary ms-1">Edit Profile</a>
              </div>
            </div>
          </div>
          
        </div>
        <div class="col-lg-8">
          <div class="card mb-4">
            <div class="card-body">
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Full Name</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0">{{ auth()->user()->name }}</p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Kota</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0">{{ auth()->user()->kota }}</p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Tanggal Lahir</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0">{{ auth()->user()->tgl }}</p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Alamat</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0">{{ auth()->user()->alamat }}</p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Jenis Kelamin</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0">{{ auth()->user()->gender }}</p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Phone</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0">{{ auth()->user()->phone}}</p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Pendidikan Terakhir</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0">{{ auth()->user()->tamatan }}</p>
                </div>
              </div>
            </div>
          </div>
         
        </div>
      </div>
    </div>
  </section>
@endsection