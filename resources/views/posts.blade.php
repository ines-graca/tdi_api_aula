@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @foreach ($posts as $posts)
                <div class="card">
                    <div class="card-header">{{ $posts->title }}</div>

                    <div class="card-body">
                        <div class ="row">
                            <div class="col-md-6">


                                <p> {{$posts->created_at}} </p>
                                <p> {{$posts->descriptiont}} </p>
                                <p> {{$posts->user->name}} </p>


                            </div>
                            <div class="col-md-6">

                                <img class="img-fluid" src="/uploads/{{$posts ->image}}">

                            </div>

                        </div>



                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
@endsection
