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
                
                <a href="/admin/about/create" class="btn btn-primary mb-3">Tambah</a>
                
                <div class="table-responsive">
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Judul</th>
                                <th>Tahun</th>
                                <th>Deskripsi</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                          
                          @forelse ($about as $item)
                              <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->title }}</td>
                                <td>{{ $item->tahun }}</td>
                                <td>{!! $item->deskripsi !!}</td>
                                <td class="text-center">
                                  <a href="" class="btn btn-primary" data-toggle="modal" data-target="#example{{ $item->id }}">Update</a>
                                  <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="/admin/about/{{ $item->id }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                  </form>
                                </td>
                              </tr>

                              <div class="modal fade" id="example{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabel">Update Data</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <div class="modal-body">
                                      <form action="/admin/about/{{ $item->id }}" method="post">
                                        @csrf
                                        @method('PUT')
                                        <div class="form group">
                                            <label for="title">Judul</label>
                                            <input type="text" name="title" class="form-control" value="{{ $item->title }}">
                                        </div>
                                        <div class="form group">
                                          <label for="tahun">Tahun Berdiri</label>
                                          <input type="text" name="tahun" class="form-control" value="{{ $item->tahun }}">
                                      </div>
                                        <div class="form group">
                                            <label for="deskripsi">Deskripsi</label>
                                            <textarea name="deskripsi" class="form-control" cols="2" rows="3">{!! $item->deskripsi !!}</textarea>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary">Save changes</button>
                                          </div>
                                      </form>
                                    </div>
                                  </div>
                                </div>
                              </div>
                          @empty
                          <div class="alert alert-danger">
                            Data Post belum Tersedia.
                          </div>
                          @endforelse

                            
                        
                        </tbody>
                    </table>
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