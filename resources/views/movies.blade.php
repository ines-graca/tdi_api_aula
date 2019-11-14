@extends('layouts.bo')

@section('content')
    @if(Auth::check())
    <div class="row">
        <div class="col-md-8">
            <h1 class="h3 mb-2 text-gray-800">Movies</h1>
        </div>
        @if(Auth::check())
            @if(Auth::user()->role->id === 1)
        <div class="col-md-4 text-right">
            <a href="{{ route('web.movies.create') }}">
                <button class="btn btn-primary">Add new</button>
            </a>
        </div>
            @endif
            @endif



    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">


            <div class="row">
                @foreach ($movies as $movie)
                <div class="col-lg-3 col-xs-6 col-sm-6 p-2 text-center card">
                   <a> <p>
                        {{$movie->title}}
                    </p>
<h5>

                    <a href="movies/{{($movie->id)}}">  <img src="uploads/{{$movie->image}}" height="300" width="210"/><p></p></a>

    {{$movie->year}}


</h5>
                   </a>
                </div>
                @endforeach
            </div>


        </div>
    </div>
        @else
        <h2>
            Não tem sessão iniciada!
        </h2>
    @endif

@endsection
