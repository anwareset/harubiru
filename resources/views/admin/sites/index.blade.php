@extends('admin-template.page')
@section('title', 'Sites Configuration')
@section('activeconfigurations', 'active')
@section('content')

<style>
  input[type="file"] {
    display: none;
  }
</style>
<!-- Page Heading -->
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Sites Configuration</h1>
    </div>
    @if (session('status'))
    <div class="alert alert-success" role="alert">
      {{ session('status') }}
    </div>
    @endif
    <div class="section-body">
      <div class="row">
        <div class="col-6">
          <div class="card">
            @error('success')
            <div class="alert alert-danger" role="alert">
              {{ $message }}
            </div>
            @enderror
            <div class="card-header py-3">
              <h4>Site's Name</h4>
            </div>
            <div class="card-body">
              <form method="POST" enctype="multipart/form-data" action="{{ route('webmanager.sites.update', '1') }}">
                @csrf
                @method('PATCH')
                <div class="form-group">
                  <label>Name</label>
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
                    <span class="text">Save Changes</span>
                  </button>
                </div>
              </div>
            </div>
          </div>
          <div class="col-6">
            <div class="card">
              <div class="card-header" style="margin-top: -20px">
                <h4>Change Website's Logo</h4>
                <div class="card-header-action">
                  <div class="form-group">
                    <label for="file-upload" class="btn btn-primary" style="margin-top: 25px;color: #fff;">Change Logo</label>
                    <input id="file-upload" name="logo" type="file" />
                  </div>
                </div>
              </div>
              <div class="card-body">
                @error('success')
                <div class="alert alert-danger" role="alert">
                  {{ $message }}
                </div>
                @enderror
                <div class="mb-2 text-muted">Click the image to display full size.</div>
                <div class="chocolat-parent">
                  <a href="{{ asset($sites->logo) }}" class="chocolat-image" title="{{ $sites->sitename }}">
                    <div data-crop-image="100">
                      <img alt="image" src="{{ asset($sites->logo) }}" class="img-fluid">
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header py-3">
                <h4>About</h4>
              </div>
              <div class="card-body">
                <div class="form-group">
                  <label>Change information about the site.</label>
                  <textarea class="editor" id="editorAbout" name="about">{{ $sites->about }}</textarea>
                </div>
                <div class="form-group">
                  <button class="btn btn-success btn-icon btn-icon-left btn-block">
                    <i class="fas fa-flag"></i>
                    <span class="text">Save Changes</span>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header py-3">
                <h4>Contact</h4>
              </div>
              <div class="card-body">
                <div class="form-group">
                  <label>Change information about the site's contacts.</label>
                  <textarea class="editor" id="editorContact" name="contact">{{ $sites->contact }}</textarea>
                </div>
                <div class="form-group">
                  <button class="btn btn-success btn-icon btn-icon-left btn-block">
                    <i class="fas fa-flag"></i>
                    <span class="text">Save Changes</span>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header py-3">
                <h4>Privacy & Policy</h4>
              </div>
              <div class="card-body">
                <div class="form-group">
                  <label>Change information about the site's privacy and policy.</label>
                  <textarea class="editor" id="editorPrivacyPolicy" name="privacypolicy">{{ $sites->privacypolicy }}</textarea>
                </div>
                <div class="form-group">
                  <button class="btn btn-success btn-icon btn-icon-left btn-block">
                    <i class="fas fa-flag"></i>
                    <span class="text">Save Changes</span>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header py-3">
                <h4>License</h4>
              </div>
              <div class="card-body">
                <div class="form-group">
                  <label>Change information about the site's licenses.</label>
                  <textarea class="editor" id="editorLicense" name="license">{{ $sites->license }}</textarea>
                </div>
                <div class="form-group">
                  <button class="btn btn-success btn-icon btn-icon-left btn-block">
                    <i class="fas fa-flag"></i>
                    <span class="text">Save Changes</span>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header py-3">
                <h4>Contribute</h4>
              </div>
              <div class="card-body">
                <div class="form-group">
                  <label>Change information about the how to contribute.</label>
                  <textarea class="editor" id="editorContribute" name="contribute">{{ $sites->contribute }}</textarea>
                </div>
                <div class="form-group">
                  <button class="btn btn-success btn-icon btn-icon-left btn-block">
                    <i class="fas fa-flag"></i>
                    <span class="text">Save Changes</span>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header py-3">
                <h4>Report</h4>
              </div>
              <div class="card-body">
                <div class="form-group">
                  <label>Change information about how to report a but.</label>
                  <textarea class="editor" id="editorReport" name="report">{{ $sites->report }}</textarea>
                </div>
                <div class="form-group">
                  <button class="btn btn-success btn-icon btn-icon-left btn-block">
                    <i class="fas fa-flag"></i>
                    <span class="text">Save Changes</span>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header py-3">
                <h4>Heroes</h4>
              </div>
              <div class="card-body">
                <div class="form-group">
                  <label>Change information about the heroes that report any bugs.</label>
                  <textarea class="editor" id="editorHeroes" name="heroes">{{ $sites->heroes }}</textarea>
                </div>
                <div class="form-group">
                  <button class="btn btn-success btn-icon btn-icon-left btn-block">
                    <i class="fas fa-flag"></i>
                    <span class="text">Save Changes</span>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header py-3">
                <h4>Patched</h4>
              </div>
              <div class="card-body">
                <div class="form-group">
                  <label>Change information about patched bugs.</label>
                  <textarea class="editor" id="editorPatched" name="patched">{{ $sites->patched }}</textarea>
                </div>
                <div class="form-group">
                  <button class="btn btn-success btn-icon btn-icon-left btn-block">
                    <i class="fas fa-flag"></i>
                    <span class="text">Save Changes</span>
                  </button>
                </div>
              </div>
            </form>
            </div>
          </div>
        </div>
    </div>
  </section>
</div>

@endsection