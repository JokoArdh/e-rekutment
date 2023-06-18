@extends('layouts.mylogin')

@section('container')
    <div class="row justify-content-center" style="background: #AEE2FF">
        <div class="col-8 col-sm-6">
            <h2 class="text-center mb-3">Registrasi Account</h2>
            <form action="/register" method="post">
                @csrf
                <div class="row mb-3">
                    <label for="name" class="col-sm-2 col-form-label">Username</label>
                    <div class="col-sm-10">
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="username" value="{{ old('name') }}">
                        @error('name')
                            <div class="invalid-feedback">
                            {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="kota" class="col-sm-2 col-form-label">Kota</label>
                    <div class="col-sm-10">
                        <input type="text" name="kota" class="form-control @error('kota') is-invalid @enderror" placeholder="kota/kabupaten" value="{{ old('kota') }}">
                        @error('kota')
                         <div class="invalid-feedback">
                            {{ $message }}
                         </div>
                         @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="tgl" class="col-sm-2 col-form-label">Date</label>
                    <div class="col-sm-10">
                        <input type="date" name="tgl" class="form-control @error('tgl') is-invalid @enderror">
                        @error('tgl')
                            <div class="invalid-feedback">
                               {{ $message }}
                           </div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                        <textarea name="alamat" class="form-control @error('alamat') is-invalid @enderror" cols="10" rows="2"></textarea>
                        @error('alamat')
                          <div class="invalid-feedback">
                            {{ $message }}
                         </div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="gender" class="col-sm-2 col-form-label">Gender</label>
                    <div class="col-sm-10">
                        <select name="gender" class="form-select @error('gender') is-invalid @enderror">
                            <option value="">Jenis Kelamin</option>
                            <option value="laki-laki">laki-laki</option>
                            <option value="perempuan">perempuan</option>
                        </select>
                        @error('gender')
                          <div class="invalid-feedback">
                           {{ $message }}
                          </div>
                         @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="phone" class="col-sm-2 col-form-label">No Hp</label>
                    <div class="col-sm-10">
                        <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror" placeholder="no telephone" value="{{ old('phone') }}">
                        @error('phone')
                         <div class="invalid-feedback">
                           {{ $message }}
                       </div>
                       @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="tamatan" class="col-sm-2 col-form-label">Pendidikan</label>
                    <div class="col-sm-10">
                        <select name="tamatan" class="form-select @error('tamatan') is-invalid @enderror">
                            <option value="">Pendidikan terakhir</option>
                            <option value="smp">SMP</option>
                            <option value="smk">SMK/SMA</option>
                            <option value="diploma3">Dimploma/D3</option>
                            <option value="sarjana">S1</option>
                            <option value="magister">S2</option>
                        </select>
                        @error('tamatan')
                            <div class="invalid-feedback">
                              {{ $message }}
                           </div>
                      @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="email" value="{{ old('email') }}">
                        @error('email')
                            <div class="invalid-feedback">
                             {{ $message }}
                            </div>
                         @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="password" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="password">
                        @error('password')
                            <div class="invalid-feedback">
                             {{ $message }}
                            </div>
                         @enderror
                    </div>
                </div>
                <button type="submit" class="btn btn-success mb-3">Daftar</button>
            </form>
            <small class="mb-2">jika anda sudah mempunyai akun , silahkan <a href="/login">masuk</a></small>
        </div>
    </div>
@endsection