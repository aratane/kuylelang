@extends('admin/app')
@section('content')
<div class="row">
  <div class="col-lg-6">
    <div class="card-style settings-card-1 mb-30">
      <div class="title mb-30 d-flex justify-content-between align-items-center">
        <h6>Profil Saya</h6>
        <button class="border-0 bg-transparent">
          <i class="lni lni-pencil-alt"></i>
        </button>
      </div>
      <div class="profile-info">
        <div class="d-flex align-items-center mb-30">
          <div class="profile-image">
            <img src="assets/images/profile/profile-1.png" alt="" />
            <div class="update-image">
              <input type="file" />
              <label for=""><i class="lni lni-cloud-upload"></i></label>
            </div>
          </div>
          <div class="profile-meta">
            <h5 class="text-bold text-dark mb-10">{{ Auth::guard('admin')->user()->nama_petugas }}</h5>
            <p class="text-sm text-gray">ADMINISTRATOR</p>
          </div>
        </div>
        <div class="input-style-1">
          <label>Username</label>
          <input type="text" value="{{ Auth::guard('admin')->user()->username }}" readonly />
        </div>
        <div class="input-style-1">
          <label>Nomor Telepon</label>
          <input type="text" value="{{ Auth::guard('admin')->user()->telp }}" readonly />
        </div>
        <div class="input-style-1">
          <label>Tanggal Akun Mendaftar:</label>
          <input type="text" value="{{ Auth::guard('admin')->user()->created_at }}" readonly />
        </div>
      </div>
    </div>
    <!-- end card -->
  </div>
  <!-- end col -->

  <div class="col-lg-6">
    <div class="card-style settings-card-2 mb-30">
      <div class="title mb-30">
        <h6>Update Profil Saya</h6>
      </div>
      <form action="#">
        <div class="row">
          <div class="col-12">
            <div class="input-style-1">
              <label>Nama Lengkap</label>
              <input type="text" placeholder="Nama Lengkap ..." />
            </div>
          </div>
          <div class="col-12">
            <div class="input-style-1">
              <label>Username</label>
              <input type="text" placeholder="Username ..." />
            </div>
          </div>
          <div class="col-12">
            <div class="input-style-1">
              <label>Telepon</label>
              <input type="text" placeholder="Nomor Telepon ..." />
            </div>
          </div>
          <div class="col-12">
            <button class="main-btn primary-btn btn-hover">
              Update Profile
            </button>
          </div>
        </div>
      </form>
    </div>
    <!-- end card -->
  </div>
  <!-- end col -->
</div>
@endsection