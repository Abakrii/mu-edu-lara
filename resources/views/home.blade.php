@extends('layouts.app')

@section('content')

    <div class="container">
        @foreach($posts as $post)
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm">
                            <h3 class="card-title">{{$post->title}}</h3>
                        </div>
                        <div class="col-sm">
                            <ul class="list-inline">
                                <li class="list-inline-item"> By : {{$post->name}}</li>
                                <li class="list-inline-item">| Gender : {{$post->gender}}</li>
                                <li class="list-inline-item">| Posted on : {{$post->created_at}}</li>

                            </ul>
                        </div>
                    </div>
                    <p class="card-text">{{$post->body}}</p>
                    <a href="#" class="btn btn-primary">Read more</a>
                </div>
            </div><br>
        @endforeach
    </div>
@endsection