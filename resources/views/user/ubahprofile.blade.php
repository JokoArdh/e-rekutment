@extends('layouts.mainport')

@section('container')
<section style="background-color: #eee;">
    <div class="container py-5">
      <div class="row">
        <div class="col">
          <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
            <ol class="breadcrumb mb-0">
              <li class="breadcrumb-item"><a href="/user/profile">User</a></li>
              <li class="breadcrumb-item active" aria-current="page">Ubah Profile</li>
            </ol>
          </nav>
        </div>
      </div>
  
        <div class="col-lg-8">
          <div class="card mb-4">
            <div class="card-body">
            <form action="" method="post" enctype="multipart/form-data">
              @csrf
                <div class="row">
                    <div class="col-sm-3">
                     <label for="name" mb-0>Username</label>
                    </div>
                    <div class="col-sm-9">
                      <input type="text" name="name" class="form-control" value="{{ old('name', auth()->user()->name) }}">
                    </div>
                </div>
                <hr>
              <div class="row">
                <div class="col-sm-3">
                  <label for="kota" class="mb-0">Kota</label>
                </div>
                <div class="col-sm-9">
                  <input type="text" name="kota" class="form-control" value="{{ old('name', auth()->user()->kota) }}">
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <label for="tgl" class="mb-0">Tanggal Lahir</label>
                </div>
                <div class="col-sm-9">
                  <input type="date" name="tgl" class="form-control" value="{{ old('date', auth()->user()->tgl) }}">
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <label for="alamat" class="mb-0">Alamat</label>
                </div>
                <div class="col-sm-9">
                  <textarea name="alamat"  class="form-control" cols="2" rows="2">{{ old('alamat', auth()->user()->alamat) }}</textarea>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                 <label for="gender" class="mb-0">Jenis Kelamin</label>
                </div>
                <div class="col-sm-9">
                  <select name="gender" class="form-select">
                    <option value="">{{ old('gender', auth()->user()->gender) }}</option>
                    <option value="laki-laki">laki-laki</option>
                    <option value="perempuan">perempuan</option>
                  </select>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <label for="phone" class="mb-0">No Hp</label>
                </div>
                <div class="col-sm-9">
                  <input type="text" name="phone" class="form-control" value="{{ old('phone', auth()->user()->phone) }}">
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <label for="tamatan" class="mb-0">Pendidikan</label>
                </div>
                <div class="col-sm-9">
                  <select name="tamatan" class="form-select">
                    <option value="">Pendidikan terakhir</option>
                            <option value="smp">SMP</option>
                            <option value="smk">SMK/SMA</option>
                            <option value="diploma3">Dimploma/D3</option>
                            <option value="sarjana">S1</option>
                            <option value="magister">S2</option>
                  </select>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <label for="photo" class="mb-0">Foto</label>
                </div>
                <div class="col-sm-9">
                  <input type="file" name="photo" class="form-control">
                </div>
              </div>
              <div class="row mt-4">
                <div class="col-sm-3">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
              </div>
            </form>
            </div>
          </div>
         
        </div>
      </div>
    </div>
  </section>
@endsection