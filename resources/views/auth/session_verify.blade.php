@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Verificación de sesión mayor de 24 horas') }}</div>

                    <div class="card-body">
                        @if (session('resent'))
                            <div class="alert alert-success" role="alert">
                                {{ __('Su ultimo inicio de session fue hace mas de 24 horas, por favor vuelva a loguearse.') }}
                            </div>
                        @endif

                        <a href="{{ route('login') }}">Login</a>
                        {{-- <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                            @csrf
                            <button type="submit"
                                class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
                        </form> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
