@extends('layouts.bo')

@section('content')

    <h1 class="h3 mb-2 text-gray-800">Add New Movie</h1>

    <div class="card shadow mb-4">
        <div class="card-body">

            <form class="form-horizontal" role="form" method="POST" action="{{ route('web.movies.store') }}" enctype="multipart/form-data" id="addmovie">

                @csrf

                <div class="form-group row">
                    <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('Title') }}</label>

                    <div class="col-md-6">
                        <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" required autocomplete="title" autofocus>

                        @error('title')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="year" class="col-md-4 col-form-label text-md-right">{{ __('Year') }}</label>

                    <div class="col-md-6">
                        <input id="year" type="number" class="form-control @error('year') is-invalid @enderror" name="year" value="{{ old('year') }}" required autocomplete="year">

                        @error('year')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="rating" class="col-md-4 col-form-label text-md-right">{{ __('Rating') }}</label>

                    <div class="col-md-6">
                        <input id="rating" type="number" class="form-control @error('rating') is-invalid @enderror" name="rating" value="{{ old('rating') }}" required autocomplete="rating">

                        @error('rating')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>


                <div class="form-group row">
                    <label for="image" class="col-md-4 col-form-label text-md-right">{{ __('Image') }}</label>

                    <div class="col-md-6">
                        <input id="image" type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ old('image') }}" required autocomplete="image">

                        @error('image')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>


                <div class="form-group row">
                    <label for="category_id" class="col-md-4 col-form-label text-md-right">{{ __('Category') }}</label>

                    <div class="col-md-6">

                        <select class="form-control" id="category_id" name="category_id" form="addmovie" >
                            @foreach($categories as $category)
                                <option value ={{$category->id}}>{{$category->title}} </option>
                            @endforeach
                        </select>


                    </div>
                </div>


                <div class="form-group row">
                    <label for="director_id" class="col-md-4 col-form-label text-md-right">{{ __('Director') }}</label>

                    <div class="col-md-6">

                        <select class="form-control" id="director_id" name="director_id" form="addmovie" >
                            @foreach($directors as $director)
                                <option value ={{$director->id}}>{{$director->title}} </option>
                            @endforeach
                        </select>


                    </div>
                </div>

                <div class="form-group row">
                    <label for="country_id" class="col-md-4 col-form-label text-md-right">{{ __('Country') }}</label>

                    <div class="col-md-6">

                        <select class="form-control" id="country_id" name="country_id" >
                            @foreach($countries as $country)
                                <option value ={{$country->id}}>{{$country->title}} </option>
                            @endforeach
                        </select>


                    </div>
                </div>


                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            Add Movie
                        </button>
                    </div>
                </div>

            </form>
        </div>
    </div>

@endsection
