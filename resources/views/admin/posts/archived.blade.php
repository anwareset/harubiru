@extends('admin-template.page')
@section('title', 'Posts')
@section('activeposts', 'active')
@section('active_p_archived', 'active')
@section('content')
<!-- Page Heading -->
<div class="main-content">
	<section class="section">
		<div class="section-header">
			<h1>Archived Posts</h1>
		</div>
		<div class="section-body">
			<div class="row">
				<div class="col-12">
					<div class="card">
						@if (session('status'))
						<div class="alert alert-success" role="alert">
							{{ session('status') }}
						</div>
						@endif
						<div class="card-header py-3">
							<form method="POST" action="{{ route('posts.massclean') }}">
								@csrf
								@method('delete')
								<button type="submit" class="btn btn-sm btn-danger btn-icon">
									<span class="icon text-white-50">
										<i class="fas fa-trash"></i>
									</span>
									<span class="text">Clean All Archive</span>
								</button>
							</form>
						</div>
						<div class="card-body">
							<div class="table-responsive">
								<table class="table table-striped table-hover" id="table-1">
									<thead>
										<tr>
											<th width="5%" class="text-center">#</th>
											<th>Title</th>
											<th width="20%" class="text-center">Category</th>
											<th width="20%" class="text-center">Tags</th>
											<th width="15%" class="text-center">Thumbnail</th>
											<th width="10%" class="text-center">Action</th>
										</tr>
									</thead>
									<tfoot>
										<tr>
											<th width="5%" class="text-center">#</th>
											<th class="text-center">Title</th>
											<th width="20%" class="text-center">Category</th>
											<th width="20%" class="text-center">Tags</th>
											<th width="15%" class="text-center">Thumbnail</th>
											<th width="10%" class="text-center">Action</th>
										</tr>
									</tfoot>
									<tbody>
										@foreach ($posts as $result => $print)
										<tr>
											<td align="center">{{ $result + $posts->firstitem() }}</td>
											<td>{{ $print->title }}</td>
											<td align="center">{{ $print->category->name }}</td>
											<td align="center">
												@foreach($print->tags as $tag)
												@if($tag->id % 2)
												<div class="badge badge-primary">{{ $tag->name }}</div>
												@else
												<div class="badge badge-danger">{{ $tag->name }}</div>
												@endif
												@endforeach
											</td>
											<td><img style="max-width: 90px; margin-left: 20%" src="{{ asset($print->thumbnail) }}" alt="harubiru.me-{{ $print->slug }}"></td>
											<td align="center">
												<form method="POST" action="{{ route('posts.clean', $print->id) }}">
													@csrf
													@method('delete')
													<a href="{{ route('posts.restore', $print->id) }}" class="btn btn-sm btn-info btn-icon">
														<span class="icon text-white-50">
															<i class="fas fa-recycle"></i>
														</span>
													</a>
													<button type="submit" class="btn btn-sm btn-danger btn-icon">
														<span class="icon text-white-50">
															<i class="fas fa-trash"></i>
														</span>
													</button>
												</form>
											</td>
										</tr>
										@endforeach
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
@endsection