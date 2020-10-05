@extends('front-template.page')
@section('title', 'Contribute')
@section('breadcrumb1', 'Join Us!')
@section('breadcrumb2', 'Contribute')
@section('content')
<section class="sample-text-area">
    <div class="container box_1170">
        {!! App\Sites::first()->contribute !!}
    </div>
</section>
@endsection