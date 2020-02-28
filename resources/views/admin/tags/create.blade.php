@extends('admin-template.page')
@section('title', 'Tambah Tag Baru')
@section('activetags', 'active')
@section('active_t_add', 'active')
@section('content')
<!-- Page Heading -->
<div class="main-content">
	<section class="section">
		<div class="section-header">
			<h1>Tag Baru</h1>
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
							<a href="{{ route('webmanager.tags.index') }}" class="btn btn-sm btn-primary btn-icon btn-icon-left">
								<span class="icon text-white-50">
									<i class="fas fa-chevron-circle-left"></i>
								</span>
								<span class="text">Kembali</span>
							</a>  
						</div>
						<div class="card-body">
							<form method="POST" action=" {{ route('webmanager.tags.store') }} ">
								@csrf
								<div class="form-group">
									<label>Nama Tag</label>
									@if (session('status'))
									<div class="alert alert-success" role="alert">
										{{ session('status') }}
									</div>
									@endif
									@error('name')
									<div class="alert alert-danger" role="alert">
										{{ $message }}
									</div>
									@enderror
									<input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{old('name')}}">
								</div>
								<div class="form-group">
									<button class="btn btn-success btn-icon btn-icon-left btn-block">
										<i class="fas fa-flag"></i>
										<span class="text">Tambah Tag Baru</span>
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