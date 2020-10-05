@extends('front-template.page')
@section('title', 'Patched')
@section('breadcrumb1', 'Known Bugs')
@section('breadcrumb2', 'Patched')
@section('content')
<section class="sample-text-area">
    <div class="container box_1170">
        {!! App\Sites::first()->patched !!}
    </div>
</section>
@endsection