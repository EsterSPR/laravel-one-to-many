@extends('layouts.admin')

@section('content')
<div class="jumbotron p-5">
    <div class="container py-5 text-center">
        <h1 class="es_title es_red my-4 ">{{ __('Dashboard') }}</h1>
        <p> <a href="{{route('admin.projects.create') }}"> <button type="button" class="btn es_button btn-lg">Add new project</button> </a> </p>
    </div>
</div>

<div class="container">

    <div class="row py-4 justify-content-center">
        <div class="col">
            <!-- <div class="card">
                <div class="card-header">{{ __('User Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div> -->

            <div class="alert alert-warning" role="alert">
                <h4 class="alert-heading">{{ __('User Dashboard') }}</h4>
                <hr>
                <p class="mb-0">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{ __('You are logged in!') }}
                </p>
            </div>

        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col">
            <p>Your projects are stored <a href="{{route('admin.projects.index') }}" class="es_red">here</a>.</p>
        </div>
    </div>

    <div class="row my-5">
        <div class="col-4">
            <div class="card es_card" aria-hidden="true">
                <img src="https://images.unsplash.com/photo-1570475735025-6cd1cd5c779d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1740&q=80" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title placeholder-glow">
                    <span class="placeholder col-6"></span>
                    </h5>
                    <p class="card-text placeholder-glow">
                    <span class="placeholder col-7"></span>
                    <span class="placeholder col-4"></span>
                    <span class="placeholder col-4"></span>
                    <span class="placeholder col-6"></span>
                    <span class="placeholder col-8"></span>
                    </p>
                    <a href="#" tabindex="-1" class="btn es_button disabled placeholder col-6"></a>
                </div>
            </div>
        </div>

        <div class="col-4">
            <div class="card es_card" aria-hidden="true">
                <img src="https://images.unsplash.com/photo-1570475735025-6cd1cd5c779d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1740&q=80" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title placeholder-glow">
                    <span class="placeholder col-6"></span>
                    </h5>
                    <p class="card-text placeholder-glow">
                    <span class="placeholder col-7"></span>
                    <span class="placeholder col-4"></span>
                    <span class="placeholder col-4"></span>
                    <span class="placeholder col-6"></span>
                    <span class="placeholder col-8"></span>
                    </p>
                    <a href="#" tabindex="-1" class="btn es_button disabled placeholder col-6"></a>
                </div>
            </div>
        </div>

        <div class="col-4">
            <div class="card es_card" aria-hidden="true">
                <img src="https://images.unsplash.com/photo-1570475735025-6cd1cd5c779d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1740&q=80" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title placeholder-glow">
                    <span class="placeholder col-6"></span>
                    </h5>
                    <p class="card-text placeholder-glow">
                    <span class="placeholder col-7"></span>
                    <span class="placeholder col-4"></span>
                    <span class="placeholder col-4"></span>
                    <span class="placeholder col-6"></span>
                    <span class="placeholder col-8"></span>
                    </p>
                    <a href="#" tabindex="-1" class="btn es_button disabled placeholder col-6"></a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
