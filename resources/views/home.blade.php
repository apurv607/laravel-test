@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!

                    <form method="POST" action="{{ url('/createMatrix') }}" aria-label="{{ __('Test') }}">

                        <div class="form-group row">
                            <label for="matrix_1" class="col-sm-4 col-form-label text-md-right">{{ __('Matrix Column 1') }}</label>

                            <div class="col-md-6">
                                <input id="matrix_1" type="text" class="form-control" name="matrix_1" value="{{ old('matrix_1') }}" required autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="matrix_2" class="col-sm-4 col-form-label text-md-right">{{ __('Matrix Column 2') }}</label>

                            <div class="col-md-6">
                                <input id="matrix_2" type="text" class="form-control" name="matrix_2" value="{{ old('matrix_2') }}" required autofocus>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Submit') }}
                                </button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
