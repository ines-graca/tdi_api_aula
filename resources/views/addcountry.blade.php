@extends('layouts.bo')

@section('content')

    <h1 class="h3 mb-2 text-gray-800">Add New Country</h1>

    <div class="card shadow mb-4">
        <div class="card-body">

            <form class="form-horizontal" role="form" method="POST" action="{{ route('web.country.store') }}" enctype="multipart/form-data" >

                @csrf

                <div class="form-group row">
                    <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                    <div class="col-md-6">
                        <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" required autocomplete="title" autofocus>

                        @error('title')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>






                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            Add Country
                        </button>
                    </div>
                </div>

            </form>
        </div>
    </div>

@endsection
