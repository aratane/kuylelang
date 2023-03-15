@extends('user/app')
@section('content')
<div class="row g-0 auth-row">
    <div class="col-lg-6">
      <div class="auth-cover-wrapper bg-primary-100">
        <div class="auth-cover">
          <div class="title text-center">
            <h1 class="text-primary mb-10">Ganti Password</h1>
          </div>
          <div class="cover-image">
            <img src="{{ asset('') }}assets/images/auth/signin-image.svg" alt="" />
          </div>
          <div class="shape-image">
            <img src="{{ asset('') }}assets/images/auth/shape.svg" alt="" />
          </div>
        </div>
      </div>
    </div>
    <!-- end col -->
    <div class="col-lg-6">
      <div class="signup-wrapper">
        <div class="form-wrapper">
            @if(session('success'))
            <p class="alert alert-success">{{ session('success') }}</p>
            @endif
            @if($errors->any())
            @foreach($errors->all() as $err)
            <p class="alert alert-danger">{{ $err }}</p>
            @endforeach
            @endif
          <form method="POST" action="{{ route('password.action') }}">
            @csrf
            <div class="row">
              <div class="col-12">
                <div class="input-style-1">
                  <label>Password Lama</label>
                  <input name="old_password" type="password" placeholder="Password lama anda ..." />
                </div>
              </div>
              <div class="col-12">
                <div class="input-style-1">
                  <label>Password Baru</label>
                  <input name="new_password" type="password" placeholder="Password baru anda ..." />
                </div>
              </div>
              <div class="col-12">
                <div class="input-style-1">
                  <label>Konfirmasi Password Baru</label>
                  <input name="new_password_confirmation" type="password" placeholder="Konfirmasi password ..." />
                </div>
              </div>
              <!-- end col -->
              <div class="col-12">
                <div class="button-group d-flex justify-content-center flex-wrap">
                  <button class="main-btn primary-btn btn-hover w-100 text-center">Ganti Password</button>
                </div>
              </div>
            </div>
            <!-- end row -->
          </form>
        </div>
      </div>
    </div>
    <!-- end col -->
  </div>
@endsection