@extends('front-template.page')
@section('title', 'Hall of Fame')
@section('breadcrumb1', 'Hall of Fame')
@section('breadcrumb2', 'Heroes')
@section('content')
<section class="sample-text-area">
    <div class="container box_1170">
        {!! App\Sites::first()->heroes !!}
    </div>
</section>
@endsection