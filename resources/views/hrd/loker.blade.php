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
                
              <a href="/hrd/loker/create" class="btn btn-primary mb-3">Tambah</a>
                
                <div class="table-responsive">
                    <table id="myTable" class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>posisi</th>
                                <th>Judul</th>
                                <th>Isi Singkat</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                          
                          @forelse ($post as $item)
                              <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->bagian }}</td>
                                <td>{{ $item->title }}</td>
                                <td>{{ $item->excerpt }}</td>
                                <td colspan="3">
                                  <a href="{{ route('loker.edit', $item->id) }}" class="btn btn-primary">Update</a>
                                  <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="/hrd/loker/{{ $item->id }}" method="post">
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