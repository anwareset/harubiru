@extends('front-template.page')
@section('title', 'About')
@section('breadcrumb1', 'About Us')
@section('breadcrumb2', 'About')
@section('content')
<section class="sample-text-area">
    <div class="container box_1170">
        {!! App\Sites::first()->about !!}
    </div>
 
</section>
@endsection