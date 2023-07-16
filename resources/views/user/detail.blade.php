@extends('layouts.mainport')
@section('container')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
         
                <h2 class="mb-3">{{ $post->title }}</h2>

                <small class="text-body-secondary">
                    <ul class="list-inline">
                     <li class="list-inline-item"><i class="bi bi-archive-fill"></i>{{ $post->bagian }}</li>
                     <li class="list-inline-item"><i class="bi bi-clock"></i>{{ $post->jamkerja }}</li>
                    </ul>
                </small>
            
                <article class="my-3 fs-5">
                    {{ $post->excerpt }}<br><br>
                    {!! $post->deskripsi !!}
                </article>
             
            @php
                use Carbon\Carbon;
            
                $postCreatedAt = Carbon::parse($post->created_at);
                $currentDate = Carbon::now();
                $daysDifference = $currentDate->diffInDays($postCreatedAt);
            @endphp
            @if ($daysDifference > 10)
            <div class="alert alert-dark" role="alert">
                Lowongan Telah Tutup
              </div>
            @else
                <a href="/user/apply/{{ $post->id }}" class="btn btn-success">Apply Loker</a> 
            @endif
        </div>
    </div>
</div>
@endsection