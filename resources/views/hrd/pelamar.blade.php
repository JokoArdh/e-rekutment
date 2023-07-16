@extends('layouts.dashboard')

@section('container')
<div class="content">
    <div class="container-fluid">
      <div class="row">
  
        <div class="col-lg-12">
          <div class="card card-primary card-outline">
            <div class="card-header">
              <h5 class="m-0">Data Pelamar</h5>
            </div>
            <div class="card-body">
                
                
                <div class="table-responsive">
                    <table id="myTable" class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>posisi</th>
                                <th>berkas</th>
                                <th>status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                          @foreach ($melamar as $item)
                              <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->user->name }}</td>
                                <td>{{ $item->post ? $item->post->bagian : '' }}</td>
                                <td>{{ $item->berkas }}</td>
                                <td>{{ $item->status }}</td>
                                <td colspan="2">
                                  <a href="" class="btn btn-primary" data-toggle="modal" data-target="#example{{ $item->id }}">Action</a>
                                  <a href="{{ Storage::url('pdf/').$item->berkas }}" class="btn btn-success">Downloads</a>
                                </td>
                              </tr>
                              <div class="modal fade" id="example{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabel">Select</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <div class="modal-body">
                                      <form action="/hrd/pencaker/{{ $item->id }}" method="post">
                                        @csrf
                                        @method('PUT')
                                        <div class="row mb-3">
                                          <div class="col-sm-10">
                                              <select name="status" class="form-select">
                                                  <option value="">action</option>
                                                  <option value="terima">accept</option>
                                                  <option value="tolak">reject</option>
                                              </select>
                                          </div>
                                      </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary">Save</button>
                                          </div>
                                      </form>
                                    </div>
                                  </div>
                                </div>
                              </div>
                          
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