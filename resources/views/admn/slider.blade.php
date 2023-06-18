@extends('layouts.dashboard')

@section('container')
<div class="content">
    <div class="container-fluid">
      <div class="row">
  
        <div class="col-lg-12">
          <div class="card card-primary card-outline">
            <div class="card-header">
              <h5 class="m-0">Data Sliders</h5>
            </div>
            <div class="card-body">
                
                <a href="/admin/slider/create" class="btn btn-primary mb-3">Tambah</a>
                
                <div class="table-responsive">
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Judul</th>
                                <th>Deskripsi</th>
                                <th>Gambar</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                          
                            @foreach ($sliders as $item)
                            <tr>
                              <td>{{ $loop->iteration}}</td>
                            <td>{{ $item->title}}</td>
                            <td>{{ $item->deskripsi}}</td>
                            <td>
                              <img src="/image/{{ $item->image }}" class="img-fluid" alt="" width="90">
                            </td>
                            <td>
                              <a href="/admin/slider/{{ $item->id }}" class="btn btn-warning">edit</a>
                              <form action="">

                              </form>
                            </td>
                            </tr>
                            
                        @endforeach
                          </tr>
                        
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