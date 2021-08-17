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

                        {{ __('You are logged in!') }}
                    </div>

                    <div class="list-button">
                        <a href="{{ route('form-article') }}" name="form-page"
                            class="btn btn-primary text-white mb-5 ml-3" class="a">Create New Article</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
