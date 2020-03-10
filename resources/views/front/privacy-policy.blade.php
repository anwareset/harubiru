@extends('front-template.page')
@section('title', 'Privacy & Policy')
@section('breadcrumb1', 'Privacy & Policy')
@section('breadcrumb2', 'Privacy & Policy')
@section('content')
<section class="sample-text-area">
    <div class="container box_1170">
        {!! App\Sites::first()->privacypolicy !!}
    </div>
</section>
@endsection