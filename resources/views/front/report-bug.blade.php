@extends('front-template.page')
@section('title', 'Report Bug')
@section('breadcrumb1', 'Report Bug')
@section('breadcrumb2', 'Report')
@section('content')
<section class="sample-text-area">
    <div class="container box_1170">
        {!! App\Sites::first()->report !!}
    </div>
</section>
@endsection