@extends('app')
@section('content')
    <div class="row">
        <div class="col-md-6">
            <form action="{{ route('register.action') }}">
                @csrf
                <div class="mb-3">
                    <label>Nama Lengkap <span class="text-danger">"</span></label>
                    <input class="form-control" name="nama_lengkap" value="{{ old('name') }}" />
                </div>
                <div class="mb-3">
                    <label>Username <span class="text-danger">"</span></label>
                    <input class="form-control" name="username" value="{{ old('username') }}" />
                </div>
                <div class="mb-3">
                    <label>Telepon <span class="text-danger">"</span></label>
                    <input class="form-control" name="telp" value="{{ old('telp') }}" />
                </div>
                <div class="mb-3">
                    <label>Password <span class="text-danger">"</span></label>
                    <input class="form-control" name="password" />
                </div>
                <div class="mb-3">
                    <label>Konfirmasi Password <span class="text-danger">"</span></label>
                    <input class="form-control" name="password_confirmation" />
                </div>
                <div class="mb-3">
                    <button class="btn btn-primary">Register</button>
                    <a class="btn btn-danger" href="{{ route('home') }}"></a>
                </div>
            </form>
        </div>
    </div>
@endsection