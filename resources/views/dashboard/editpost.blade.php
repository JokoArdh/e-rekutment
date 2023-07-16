@extends('layouts.dashboard')

@section('container')
<div class="content">
    <div class="container-fluid">
      <div class="row">
  
        <div class="col-lg-12">
          <div class="card card-primary card-outline">
            <div class="card-header">
              <h5 class="m-0">Edit Postingan</h5>
            </div>
            <div class="card-body">
                
                <a href="/admin/post" class="btn btn-primary mb-3">Kembali</a>
                
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <form action="{{ route('post.update', $post->id) }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="judul">Judul</label>
                                <input type="text" class="form-control" name="title" value="{{ $post->title }}">
                            </div>
                            <div class="form-group">
                                <label for="bagian">Posisi</label>
                                <input type="text" class="form-control" name="bagian" value="{{ $post->bagian }}">
                            </div>
                          <div class="form-group">
                            <label for="excerpt">Header</label>
                            <textarea name="excerpt" id="excerpt" class="form-control" cols="3" rows="5">{{ $post->excerpt }}</textarea>
                        </div>
                        <div class="form-group">
                          <label for="deskripsi">Deskripsi</label>
                          <textarea name="deskripsi" class="form-control" rows="5">{{ $post->deskripsi }}</textarea>
                      </div>
                      <div class="form-group">
                        <label for="jamkerja">Jam Kerja</label>
                        <select name="jamkerja" class="form-control">
                          <option value="{{ $post->jamkerja }}">{{ $post->jamkerja }}</option>
                          <option value="full time">Full time</option>
                          <option value="part time">Part time</option>
                        </select>
                      </div>
                            <div class="form-group mt-2">
                                <button type="submit" class="btn btn-primary">Update</button>
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