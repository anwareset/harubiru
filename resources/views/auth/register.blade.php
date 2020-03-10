@extends('layouts.app')

@section('content')
<div class="container-login100">
    <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-50">
        <span class="login100-form-title p-b-33">
            {{ __('Daftar') }}
        </span>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div>
                <input id="name" type="text" class="input100 form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Nama">

                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <br>
            <div>
                <input id="email" type="email" class="input100 form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Alamat Email">

                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <br>
            <div>
                <input id="password" type="password" class="input100 form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">

                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div><br>
            <div>
                <input id="password-confirm" type="password" class="input100 form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Ketik Ulang Password">
            </div>
            <div class="container-login100-form-btn m-t-20">
                <button type="submit" class="login100-form-btn">
                    {{ __('Daftar') }}
                </button>
            </div>
        </form>
    </div>
    <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
        <defs>
            <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
        </defs>
        <g class="parallax">
            <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7" />
            <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)" />
            <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)" />
            <use xlink:href="#gentle-wave" x="48" y="7" fill="#fff" />
        </g>
    </svg>
</div>

<div class="content flex">
    <p>2020 | HaruBiru</p>
</div>
@endsection
