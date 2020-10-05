@extends('front-template.page')
@section('title', 'Contact')
@section('breadcrumb1', 'Contact Us')
@section('breadcrumb2', 'Contact')
@section('content')
<section class="sample-text-area">
    <div class="container box_1170">
        {!! App\Sites::first()->contact !!}
    </div>
</section>
@endsection