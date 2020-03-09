@extends('front-template.page')
@section('title', 'License')
@section('breadcrumb1', 'License')
@section('breadcrumb2', 'License')
@section('content')
<section class="sample-text-area">
    <div class="container box_1170">
        {!! App\Sites::first()->license !!}
    </div>
</section>
@endsection