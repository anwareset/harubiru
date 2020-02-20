@extends('admin-template.page')
@section('title', 'Configurations')
@section('activeconfigurations', 'active')
@section('content')
<!-- Page Heading -->
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Site Configurations</h1>
    </div>
    <div class="section-body">
      <div class="row">
        <div class="col-12">
          <div class="card">
            @if (session('success'))
            <div class="alert alert-success" role="alert">
              {{ session('success') }}
            </div>
            @endif
            @error('success')
            <div class="alert alert-danger" role="alert">
              {{ $message }}
            </div>
            @enderror
            <div class="card-header py-3">
              <a href="{{ route('home') }}" class="btn btn-sm btn-primary btn-icon btn-icon-left">
                <span class="icon text-white-50">
                  <i class="fas fa-chevron-circle-left"></i>
                </span>
                <span class="text">Back</span>
              </a>  
            </div>
            <div class="card-body">
              <form method="POST" action=" {{ route('sites.store') }} ">
                @csrf
                @method('post')
                <div class="form-group">
                  <label>Site Name</label>
                  @if (session('status'))
                  <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                  </div>
                  @endif
                  @error('appname')
                  <div class="alert alert-danger" role="alert">
                    {{ $message }}
                  </div>
                  @enderror
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <i class="fas fa-globe-asia"></i>
                      </div>
                    </div>
                    <input type="text" name="sitename" class="form-control @error('sitename') is-invalid @enderror" value="{{ $sites->sitename }}">
                  </div>
                </div>
                <div class="form-group">
                  <button class="btn btn-success btn-icon btn-icon-left btn-block">
                    <i class="fas fa-flag"></i>
                    <span class="text">Update Configuration</span>
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
@endsection