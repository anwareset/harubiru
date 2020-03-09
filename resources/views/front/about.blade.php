@extends('front-template.page')
@section('title', 'Tentang Desa Kami')
@section('breadcrumb1', 'Tentang Desa Kami')
@section('breadcrumb2', 'Tentang Desa Kami')
@section('content')
<section class="sample-text-area">
    <div class="container box_1170">
        {!! App\Sites::first()->about !!}
    </div>
 
</section>
@endsection