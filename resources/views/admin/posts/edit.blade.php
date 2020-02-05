@extends('admin-template.page')
@section('title', 'Edit Post')
@section('activeposts', 'active')
@section('active_p_edit', 'active')
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
							<a href="{{ route('posts.index') }}" class="btn btn-sm btn-primary btn-icon btn-icon-left">
								<span class="icon text-white-50">
									<i class="fas fa-chevron-circle-left"></i>
								</span>
								<span class="text">Back</span>
							</a>  
						</div>
						<div class="card-body">
							<form method="POST" enctype="multipart/form-data" action=" {{ route('posts.update', $posts->id) }} ">
								@csrf
								@method('PATCH')
								<div class="form-group">
									<label>Title</label>
									@if (session('status'))
									<div class="alert alert-success" role="alert">
										{{ session('status') }}
									</div>
									@endif
									@error('title')
									<div class="alert alert-danger" role="alert">
										{{ $message }}
									</div>
									@enderror
									<input type="text" name="title" class="form-control @error('title') is-invalid @enderror" value="{{ $posts->title }}">
								</div>
								<div class="form-group">
									<label>Category</label>
									@if (session('status'))
									<div class="alert alert-success" role="alert">
										{{ session('status') }}
									</div>
									@endif
									@error('category')
									<div class="alert alert-danger" role="alert">
										{{ $message }}
									</div>
									@enderror
									<select type="text" name="category" class="form-control select2 @error('category') is-invalid @enderror" value="{{old('category')}}">
										@foreach($categories as $result)
										<option value="{{ $result->id }}"
											@if ($result->id == $posts->category_id)
												selected=""
											@endif
											>{{ $result->name }} </option>
										@endforeach
									</select>
								</div>
								<div class="form-group">
									<label>Tags</label>
									@if (session('status'))
									<div class="alert alert-success" role="alert">
										{{ session('status') }}
									</div>
									@endif
									@error('tags')
									<div class="alert alert-danger" role="alert">
										{{ $message }}
									</div>
									@enderror
									<select type="text" name="tags[]" class="form-control select2 @error('tags') is-invalid @enderror" multiple="" value="{{old('tags')}}">
										@foreach($tags as $result2)
										<option value="{{ $result2->id }}"
										@foreach($posts->tags as $tag)
											@if($result2->id == $tag->id)
												selected
											@endif
										@endforeach
											> {{ $result2->name }} </option>
										@endforeach
									</select>
								</div>
								<div class="form-group">
									<label>Content</label>
									@if (session('status'))
									<div class="alert alert-success" role="alert">
										{{ session('status') }}
									</div>
									@endif
									@error('content')
									<div class="alert alert-danger" role="alert">
										{{ $message }}
									</div>
									@enderror
									<textarea type="text" id="editorPostsEdit" name="content" class="form-control">{{ $posts->content }}</textarea>
								</div>
								<div class="form-group">
									<label>Thumbnail</label>
									@if (session('status'))
									<div class="alert alert-success" role="alert">
										{{ session('status') }}
									</div>
									@endif
									@error('thumbnail')
									<div class="alert alert-danger" role="alert">
										{{ $message }}
									</div>
									@enderror
									<input type="file" name="thumbnail" class="form-control @error('thumbnail') is-invalid @enderror" value="{{old('thumbnail')}}">
								</div>
								<div class="form-group">
									<button class="btn btn-success btn-icon btn-icon-left btn-block">
										<i class="fas fa-flag"></i>
										<span class="text">Update Post</span>
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

<!-- CKEditor -->
<script>
    CKEDITOR.replace( 'editorPostsEdit' );
</script>

@endsection