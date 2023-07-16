@extends('layouts.mainport')
@section('container')
   <h4>Pengumuman Lamaran</h4>
   <p>    
       <table class="table">
         <thead>
            <tr>
               <th>No</th>
               <th>Posisi</th>
               <th>status</th>
            </tr>
         </thead>
         <tbody>
               <tr>
                 @forelse ($data as $item)
                 <td>{{ $loop->iteration }}</td>
                 <td>{{ $item->post ? $item->post->bagian : '' }}</td>
                 <td>{{ $item->status }}</td>
                 @empty
                     <div class="alert alert-warning">
                        <p>data anda dalam proses</p>
                     </div>
                 @endforelse
               </tr>
         </tbody>
      </table> 
   </p>
@endsection