@extends('layouts.bo')

@section('content')


    <h1 class="h3 mb-2 text-gray-800">{{ $movie->title }}</h1>

    <div class="row">
        <div class="col-md-4">
            <div class="card mb-4 py-3 border-left-primary">
                <div class="card-body text-center">
                    <img src="../uploads/{{$movie->image}}" width="250" height="350">
                </div>
            </div>
        </div>


        <div class="col-md-8 text">
            <div class="card mb-4 py-3 border-left-primary">
                <div class="card-body">

                    <div class="col-md-4 text-left">
                        <a href="{{$movie->id}}/edit">
                             <button class="btn btn-primary">Edit</button>
                        </a>
                    </div>

                    <div class="row">
                        <div class="col-md-3 text-black-50 text-md-right">{{ __('Title') }}</div>

                        <div class="col-md-9">
                            {{ $movie->title }}
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-3 text-black-50 text-md-right">Year</div>

                        <div class="col-md-9">

                            {{$movie->year}}

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-3 text-black-50 text-md-right">Rating</div>

                        <div class="col-md-9">

                            {{$movie->rating}}

                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-3 text-black-50 text-md-right">Category</div>

                        <div class="col-md-9">

                            {{$movie->category->title}}

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-3 text-black-50 text-md-right">Director</div>

                        <div class="col-md-9">

                            {{$movie->director->title}}

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-3 text-black-50 text-md-right">Country</div>

                        <div class="col-md-9">

                            {{$movie->country->title}}

                        </div>
                    </div>

<br>




                </div>
            </div>
        </div>



    </div>
@endsection
