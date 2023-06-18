@extends('layouts.dashboard')

@section('container')
<div class="content">
    <div class="container-fluid">
      <div class="row">
  
        <div class="col-lg-12">
          <div class="card card-primary card-outline">
            <div class="card-header">
              <h5 class="m-0">Data About</h5>
            </div>
            <div class="card-body">
                
                <a href="/admin/about" class="btn btn-primary mb-3">Kembali</a>
                
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <form action="{{ route('about.store') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="title">Judul</label>
                                <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" placeholder="Judul">
                            </div>
                            @error('title')
                                <small style="color:red">{{ $message }}</small>
                            @enderror
                            <div class="form-group">
                                <label for="tahun">Tahun Berdiri</label>
                                <input type="text" class="form-control @error('tahun') is-invalid @enderror" name="tahun" placeholder="Judul">
                            </div>
                            @error('tahun')
                                <small style="color:red">{{ $message }}</small>
                            @enderror
                            <div class="form-group">
                                <label for="deskripsi">Deskripsi</label>
                                <textarea name="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror" placeholder="Deskripsi" cols="30" rows="10"></textarea>
                            </div>
                            @error('deskripsi')
                            <small style="color:red">{{ $message }}</small>
                            @enderror
                            <div class="form-group mt-2">
                                <button type="submit" class="btn btn-primary">ADD</button>
                            </div>
                        </form>
                    </div>
                </div>
               

            </div>
          </div>
        </div>
        <!-- /.col-md-6 -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
@endsection