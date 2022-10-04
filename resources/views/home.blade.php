@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h2>Bienvenido {{ Auth::user()->name }}</h2><img src="{{ Auth::user()->avatar }}" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!--Capa de React ejemplo-->
<div id="example"></div>
@endsection
