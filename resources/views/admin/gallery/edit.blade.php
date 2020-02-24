@extends('admin-template.page')
@section('title', 'Edit Caption')
@section('activegallery', 'active')
@section('active_g_edit', 'active')
@section('content')

<!-- Page Heading -->
<div class="main-content">
	<section class="section">
		<div class="section-header">
			<h1>Edit Post</h1>
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
								<span class="text">Back</span>
							</a>  
						</div>
						<div class="card-body">
							<div class="form-group">
								<label>Photo</label>
								<div class="chocolat-parent">
									<a href="{{ asset($gallery->url) }}" class="chocolat-image" title="{{ $gallery->caption }}">
										<div data-crop-image="300">
											<img alt="image" src="{{ asset($gallery->url) }}" class="img-fluid" style="height: 275px; width: 750px; object-fit: cover; margin-left: auto; margin-right: auto; display: block;">
										</div>
									</a>
								</div>
							</div>
							<form method="POST" enctype="multipart/form-data" action=" {{ route('webmanager.gallery.update', $gallery->id) }} ">
								@csrf
								@method('PATCH')
								<div class="form-group">
									<label>Caption</label>
									<input type="text" name="caption" class="form-control @error('caption') is-invalid @enderror" value="{{ $gallery->caption }}">
								</div>
								<div class="form-group">
									<button class="btn btn-success btn-icon btn-icon-left btn-block">
										<i class="fas fa-flag"></i>
										<span class="text">Update Caption</span>
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