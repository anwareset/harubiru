@extends('admin-template.page')
@section('title', 'Edit Tag')
@section('activetags', 'active')
@section('content')
<!-- Page Heading -->
<div class="main-content">
	<section class="section">
		<div class="section-header">
			<h1>Edit Tag</h1>
		</div>

		<div class="section-body">
			<div class="row">
				<div class="col-12">
					<div class="card">
						<div class="card-header py-3">
							<a href="{{ route('webmanager.tags.index') }}" class="btn btn-sm btn-primary btn-icon btn-icon-left">
								<span class="icon text-white-50">
									<i class="fas fa-chevron-circle-left"></i>
								</span>
								<span class="text">Kembali</span>
							</a>  
						</div>
						<div class="card-body">
							<form action="{{ route('webmanager.tags.update', $tag->id) }}" method="POST">
								@csrf
								@method('patch')
								<div class="form-group">
									<label>Nama Tag</label>
									@error('name')
									<div class="alert alert-danger" role="alert">
										{{ $message }}
									</div>
									@enderror
									<input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ $tag->name }}">
								</div>
								<div class="form-group">
									<button class="btn btn-success btn-icon btn-icon-left btn-block">
										<i class="fas fa-flag"></i>
										<span class="text">Update Tag</span>
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