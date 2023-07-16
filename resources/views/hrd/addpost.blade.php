@extends('layouts.dashboard')

@section('container')
<div class="content">
    <div class="container-fluid">
      <div class="row">
  
        <div class="col-lg-12">
          <div class="card card-primary card-outline">
            <div class="card-header">
              <h5 class="m-0">Add Postingan</h5>
            </div>
            <div class="card-body">
                
                <a href="/hrd/loker" class="btn btn-primary mb-3">Kembali</a>
                
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <form action="{{ route('loker.store') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="judul">Judul</label>
                                <input type="text" id="form1" onkeyup="copyText()" class="form-control @error('title') is-invalid @enderror" name="title" placeholder="Judul">
                            </div>
                            @error('title')
                                <small style="color:red">{{ $message }}</small>
                            @enderror
                            <div class="form-group">
                                <label for="bagian">Posisi</label>
                                <input type="text" class="form-control @error('bagian') is-invalid @enderror" name="bagian" placeholder="posisi/jabatan">
                            </div>
                            @error('bagian')
                                <small style="color:red">{{ $message }}</small>
                            @enderror
                            <div class="form-group">
                              <label for="slug">Slug</label>
                              <input type="text" id="form2" class="form-control @error('slug') is-invalid @enderror" name="slug">
                          </div>
                          @error('slug')
                              <small style="color:red">{{ $message }}</small>
                          @enderror
                          <div class="form-group">
                            <label for="excerpt">Header</label>
                            <textarea name="excerpt" id="excerpt" class="form-control @error('excerpt') is-invalid @enderror " cols="2" rows="3" placeholder="isi deskripsi singkat"></textarea>
                        </div>
                        @error('excerpt')
                            <small style="color:red">{{ $message }}</small>
                        @enderror
                        <div class="form-group">
                          <label for="deskripsi">Deskripsi</label>
                          <textarea name="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror " rows="5"></textarea>
                      </div>
                      @error('deskripsi')
                          <small style="color:red">{{ $message }}</small>
                      @enderror
                      <div class="form-group">
                        <label for="jamkerja">Jam Kerja</label>
                        <select name="jamkerja" class="form-control @error('jamkerja') is-invalid @enderror">
                          <option value="">Jam kerja</option>
                          <option value="full time">Full time</option>
                          <option value="part time">Part time</option>
                        </select>
                      @error('jamkerja')
                          <small style="color:red">{{ $message }}</small>
                      @enderror
                      </div>
                            <div class="form-group mt-2">
                                <button type="submit" class="btn btn-primary">Save</button>
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