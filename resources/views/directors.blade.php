@extends('layouts.bo')

@section('content')

    <div class="row">
        <div class="col-md-8">
            <h1 class="h3 mb-2 text-gray-800">Directors</h1>
        </div>
        <div class="col-md-4 text-right">
            <a href="{{ route('web.directors.create') }}">
                <button class="btn btn-primary">Add new</button>
            </a>
        </div>
    </div>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">


            <div class="row">
                @foreach ($directors as $directors)
                <div class="col-lg-3 col-xs-6 col-sm-6 p-2 text-center card">
                   <a> <p>
                        {{$directors->title}}
                    </p>

                   </a>
                </div>
                @endforeach
            </div>


        </div>
    </div>

@endsection
