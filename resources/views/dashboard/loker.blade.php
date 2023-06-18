@extends('layouts.dashboard')

@section('container')
<div class="content">
    <div class="container-fluid">
      <div class="row">
  
        <div class="col-lg-12">
          <div class="card card-primary card-outline">
            <div class="card-header">
              <h5 class="m-0">Data Loker</h5>
            </div>
            <div class="card-body">
                
              <a href="/admin/post/create" class="btn btn-primary mb-3">Tambah</a>
                
                <div class="table-responsive">
                    <table id="myTable" class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>posisi</th>
                                <th>Judul</th>
                                <th>slug</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                          
                          @forelse ($post as $item)
                              <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->bagian }}</td>
                                <td>{{ $item->title }}</td>
                                <td>{{ $item->slug }}</td>
                                <td class="text-center">
                                  <a href="" class="btn btn-primary" data-toggle="modal" data-target="#example{{ $item->id }}">Update</a>
                                  <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="/admin/post/{{ $item->id }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                  </form>
                                </td>
                              </tr>

                             
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