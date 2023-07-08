@extends('layouts.mainport')
@section('container')

@if (session()->has('upload'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      {{ session('upload') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

    <h3>Lampirkan Lamaran Pekerjaan</h3>
    <div class="alert alert-success" role="alert">
        <h4 class="alert-heading">Tata Cara</h4>
        <p>lampirkan seluruh dokumen termasuk syarat-syarat yang tercantum pada postingan lowongan pekerjaan yang
            bersangkutan. dan pehatikan tata cara melamarnya. dan scan semua dijadikan satu diubah dalam pdf
        </p>
        <hr>
        <p class="mb-0">
            dokumen pendukung (ktp, ijazah, kk, akte, cv, sertifikasi, surat ket sehat). scan jadi satu dalam bentuk pdf
            atau jika kesulitan cukup lampirkan surat pengalaman kerja sebelumnya berkaitan dengan posisi yg akan anda lamar
        </p>
      </div>
      <form action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group mb-2">
          <label for="lampiran">Lampiran</label>
          <input type="file" name="berkas" class="form-control @error('berkas') is-invalid @enderror"  placeholder="lampirkan file">
          @error('berkas')
              <div class="invalid-feedback">
                 {{ $message }}
              </div>
            @enderror
        </div>
        <div class="form-group mb-2">
            <input type="hidden" name="post_id" value="{{ $post->id }}" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
@endsection