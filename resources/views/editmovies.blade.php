@extends('layouts.bo')

@section('content')

    <h1 class="h3 mb-2 text-gray-800">Edit Movie</h1>

    <div class="card shadow mb-4">
        <div class="card-body">

            <form class="form-horizontal" role="form" method="POST"
                  action="{{ route('web.movies.update', $movie->id) }}"
                  enctype='multipart/form-data' id="addmovie">

                {{ csrf_field() }}
                {{method_field('put')}}

                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Title') }}</label>

                    <div class="col-md-6">
                        <input id="title" type="text" class="form-control @error('title') is-invalid @enderror"
                               name="title" value="{{ $movie->title }}" required autocomplete="title" autofocus>

                        @error('name')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="year" class="col-md-4 col-form-label text-md-right">{{ __('Year') }}</label>

                    <div class="col-md-6">
                        <input id="year" type="text" class="form-control @error('title') is-invalid @enderror"
                               name="year" value="{{ $movie->year }}" required autocomplete="year" autofocus>

                        @error('name')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="rating" class="col-md-4 col-form-label text-md-right">{{ __('Rating') }}</label>

                    <div class="col-md-6">
                        <input id="rating" type="number" class="form-control @error('title') is-invalid @enderror"
                               name="rating" value="{{ $movie->rating }}" required autocomplete="rating" autofocus>

                        @error('name')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="image" class="col-md-4 col-form-label text-md-right">{{ __('Image') }}</label>

                    <div class="col-md-6">
                        <img src="/uploads/{{$movie->image}}" style="max-height: 350px; max-width: 250px;">
                        <input id="image" type="file" class="form-control @error('title') is-invalid @enderror"
                               name="image" autocomplete="image" autofocus>

                        @error('name')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="category_id" class="col-md-4 col-form-label text-md-right">{{ __('Category') }}</label>

                    <div class="col-md-6">
                        <select class="form-control" id="category_id" name="category_id" form="addmovie">
                            @foreach($categories as $category)
                                <option value={{$category->id}}>{{$category->title}} </option>
                            @endforeach
                        </select>
                    </div>
                </div>


                <div class="form-group row">
                    <label for="director_id" class="col-md-4 col-form-label text-md-right">{{ __('Director') }}</label>

                    <div class="col-md-6">
                        <select class="form-control" id="director_id" name="director_id" form="addmovie">
                            @foreach($directors as $director)
                                <option value={{$director->id}}>{{$director->title}} </option>
                            @endforeach
                        </select>
                    </div>
                </div>


                <div class="form-group row">
                    <label for="country_id" class="col-md-4 col-form-label text-md-right">{{ __('Country') }}</label>

                    <div class="col-md-6">
                        <select class="form-control" id="country_id" name="country_id" form="addmovie">
                            @foreach($countries as $country)
                                <option value={{$country->id}}>{{$country->title}} </option>
                            @endforeach
                        </select>
                    </div>
                </div>


                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            Update
                        </button>
                    </div>
                </div>

            </form>
        </div>
    </div>

@endsection
