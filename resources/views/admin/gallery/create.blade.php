@extends('admin-template.page')
@section('title', 'Foto Baru')
@section('activegallery', 'active')
@section('active_g_new', 'active')
@section('content')

<!-- Page Heading -->
<div class="main-content">
	<section class="section">
		<div class="section-header">
			<h1>Upload Foto</h1>
		</div>

		<div class="section-body">
			<div class="row">
				<div class="col-12">
					<div class="card">
						<div class="card-header py-3">
							<a href="{{ route('webmanager.gallery.index') }}" class="btn btn-sm btn-primary btn-icon btn-icon-left">
								<span class="icon text-white-50">
									<i class="fas fa-chevron-circle-left"></i>
								</span>
								<span class="text">Kembali</span>
							</a>  
						</div>
						<div class="card-body">
							<form method="POST" enctype="multipart/form-data" action=" {{ route('webmanager.gallery.store') }} ">
								@csrf
								<div class="form-group">
									<label>Pilih Foto</label>
									@error('photo')
									<div class="alert alert-danger" role="alert">
										{{ $message }}
									</div>
									@enderror
									<input type="file" name="photo" class="form-control @error('photo') is-invalid @enderror" value="{{old('photo')}}">
								</div>
								<div class="form-group">
									<label>Caption</label>
									@error('caption')
									<div class="alert alert-danger" role="alert">
										{{ $message }}
									</div>
									@enderror
									<input type="text" name="caption" class="form-control @error('caption') is-invalid @enderror" value="{{old('caption')}}">
								</div>
								<div class="form-group">
									<button class="btn btn-success btn-icon btn-icon-left btn-block">
										<i class="fas fa-flag"></i>
										<span class="text">Upload Foto</span>
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