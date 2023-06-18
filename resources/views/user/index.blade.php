@extends('layouts.mainport')

@section('container')

<div class="alert alert-secondary" role="alert">
  Selamat datang {{ auth()->user()->name }}
</div>

    <h4 class="mb-4">Loker Sebagai berikut yang tersedia : </h4>

<div class="row">
  @foreach ($post as $item)
  <div class="card mb-3" style="max-width: 360px; margin-left:10px;">
          <div class="card-body">
            <h5 class="card-title">{{ $item->title }}</h5>
            <small class="text-body-secondary">
             <ul class="list-inline">
              <li class="list-inline-item"><i class="bi bi-archive-fill"></i>{{ $item->bagian }}</li>
              <li class="list-inline-item"><i class="bi bi-clock"></i>{{ $item->jamkerja }}</li>
             </ul>
            </small>
            <p class="card-text">{{ $item->excerpt }}</p>
            <p class="card-text"><small class="text-body-secondary">{{ $item->created_at->diffForHumans() }}</small></p>
            <hr>
              <a href="/loker/{{ $item->slug }}" class="btn btn-primary"><span>Read More</span></a>
          </div>      
  </div>     
 @endforeach
</div>
    
@endsection