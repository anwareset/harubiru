@extends('front-template.page')
@section('title', 'Galeri')
@section('breadcrumb1', 'Galeri')
@section('breadcrumb2', 'Galeri')
@section('content')
<section class="sample-text-area">
	<div class="container box_1170">
		<div align="center">
			@foreach($gallery as $photo)
			<a class="example-image-link" href="{{ $photo->url }}" data-lightbox="example-set" data-title="{{ $photo->caption }}"><img class="example-image fixgaleri" src="{{ $photo->url }}" alt="" /></a>
			@endforeach
		</div>
	</div>
</section>
@endsection