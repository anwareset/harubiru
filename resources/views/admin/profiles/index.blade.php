@extends('admin-template.page')
@section('title', 'Profile')
@section('activeprofile', 'active')
@section('content')

<!-- input none -->
<style>
  input[type="file"] {
    display: none;
  }
</style>
<!-- Page Heading -->
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Update Profile</h1>
    </div>
    <div class="section-body">
      <div class="row">
        <div class="col-12">
          @if (session('status'))
          <div class="alert alert-success" role="alert">
            {{ session('status') }}
          </div>
          @endif
        </div>
      </div>
      <div class="row">
        <div class="col-12 col-sm-6 col-lg-6">
          <div class="card">
            <form method="POST" enctype="multipart/form-data" action=" {{ route('webmanager.profiles.update', $users->id) }} ">
              @csrf
              @method('PATCH')
              <div class="card-header" style="margin-top: -20px">
                <h4>Avatar</h4>
                <div class="card-header-action">
                  <div class="form-group">
                    <label for="file-upload" class="btn btn-primary" style="margin-top: 25px;color: #fff;">Change</label>
                    <input id="file-upload" type="file"/>
                    <input id="file-upload" name="avatar" type="file" />
                  </div>
                </div>
              </div>
              <div class="card-body">
                @error('success')
                <div class="alert alert-danger" role="alert">
                  {{ $message }}
                </div>
                @enderror
                <div class="mb-2 text-muted">Click the picture below to see the full size.</div>
                <div class="chocolat-parent">
                  <a href="{{ asset($users->avatar) }}" class="chocolat-image" title="">
                    <div data-crop-image="285">
                      <img alt="image" src="{{ asset($users->avatar) }}" class="img-fluid">
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-lg-6">
            <div class="card" id="sample-login">
              @error('success')
              <div class="alert alert-danger" role="alert">
                {{ $message }}
              </div>
              @enderror
              <div class="card-header">
                <h4>Profile</h4>
              </div>
              <div class="card-body pb-0">
                <p class="text-muted">You can update your account information here.</p>
                <div class="form-group">
                  @error('name')
                  <div class="alert alert-danger" role="alert">
                    {{ $message }}
                  </div>
                  @enderror
                  <label>Name</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <i class="fas fa-user-alt"></i>
                      </div>
                    </div>
                    <input name="name" type="text" class="form-control @error('name') is-invalid @enderror" value="{{ $users->name }}" placeholder="Name">
                  </div>
                </div>
                <div class="form-group">
                  @error('email')
                  <div class="alert alert-danger" role="alert">
                    {{ $message }}
                  </div>
                  @enderror
                  <label>Email</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <i class="fas fa-at"></i>
                      </div>
                    </div>
                    <input name="email" type="text" class="form-control @error('email') is-invalid @enderror" value="{{ $users->email }}" placeholder="Email">
                  </div>
                </div>
                <div class="form-group">
                  @error('password')
                  <div class="alert alert-danger" role="alert">
                    {{ $message }}
                  </div>
                  @enderror
                  <label>New Password</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <i class="fas fa-lock"></i>
                      </div>
                    </div>
                    <input name="password" type="password" class="form-control" placeholder="Password">
                  </div>
                </div>
                <div class="form-group">
                  @error('bio')
                  <div class="alert alert-danger" role="alert">
                    {{ $message }}
                  </div>
                  @enderror
                  <label>Bio</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <i class="fas fa-feather-alt"></i>
                      </div>
                    </div>
                    <input name="bio" type="text" class="form-control @error('bio') is-invalid @enderror" value="{{ $users->bio }}" placeholder="Bio">
                  </div>
                </div>
                <div class="form-group">
                  <button class="btn btn-success btn-icon btn-icon-left btn-block">
                    <i class="fas fa-flag"></i>
                    <span class="text">Update User</span>
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  @endsection