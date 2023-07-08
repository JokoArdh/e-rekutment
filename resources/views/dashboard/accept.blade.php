@extends('layouts.dashboard')

@section('container')
<div class="content">
    <div class="container-fluid">
      <div class="row">
  
        <div class="col-lg-12">
          <div class="card card-primary card-outline">
            <div class="card-header">
              <h5 class="m-0">Data Pelamar Diterima</h5>
            </div>
            <div class="card-body">
                 <a href="/export" class="btn btn-primary mb-3">Cetak Pdf</a>
                
                <div class="table-responsive">
                    <table id="myTable" class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Kota</th>
                                <th>No hp</th>
                                <th>posisi</th>
                                <th>status</th>
                            </tr>
                        </thead>
                        <tbody>
                          @foreach ($terima as $item)
                              <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->user->name }}</td>
                                <td>{{ $item->user->kota }}</td>
                                <td>{{ $item->user->phone }}</td>
                                <td>{{ $item->post->bagian }}</td>
                                <td>{{ $item->status }}</td>
                              </tr>
                          
                          
                          @endforeach    
                        
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