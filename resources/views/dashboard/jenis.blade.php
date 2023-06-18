@extends('layouts.dashboard')

@section('container')
<div class="content">
    <div class="container-fluid">
      <div class="row">
  
        <div class="col-lg-12">
          <div class="card card-primary card-outline">
            <div class="card-header">
              <h5 class="m-0">Data Merk</h5>
            </div>
            <div class="card-body">
                
                <a href="/admin/jenis/create" class="btn btn-primary mb-3">Tambah</a>
                
                <div class="table-responsive">
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Deskripsi</th>
                                <th>AKSI</th>
                            </tr>
                        </thead>
                        <tbody>
                          
                            @foreach ($produks as $item)
                            <tr>
                              <td>{{ $loop->iteration}}</td>
                              <td>{{ $item->name}}</td>
                            <td>{!! $item->deskripsi !!}</td>
                            <td>
                              <a href="" class="btn btn-warning" data-toggle="modal" data-target="#example{{ $item->id }}">Update</a>
                              <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="/admin/jenis/{{ $item->id }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                              </form>
                            </td>
                            </tr>
                             <!-- Modal -->
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
                                   <form action="/admin/jenis/{{ $item->id }}" method="post">
                                     @csrf
                                     @method('put')
                                 
                                     <div class="form group">
                                         <label for="name">Name</label>
                                         <input type="text" name="name" id="name" class="form-control" value="{{ $item->name }}">
                                     </div>
                                     <div class="form group">
                                         <label for="deskripsi">Deskripsi</label>
                                         <textarea name="deskripsi" id="diskripsi" class="form-control" cols="2" rows="3">{{ $item->deskripsi }}</textarea>
                                     </div>
                                     <div class="modal-footer">
                                         <button type="submit" class="btn btn-primary">Save changes</button>
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