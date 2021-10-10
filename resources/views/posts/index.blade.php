@extends('layouts.app')

@section('content')
<div class="container">
    @foreach($posts as $post)
        <div class="row">
            <div class="col-6 offset-3">
                <a href="/profile/{{$post->user->id}}"><img src="/storage/{{$post->image}}" class="w-100"></a>
            </div>
        </div>
        <div class="row">
            <div class="col-6 offset-3 d-flex align-items-center">
                <img src="/storage/{{$post->user->profile->image}}" class="rounded-circle w-100" style="max-width: 25px">
                <p class="pt-3 pl-2">
                <span class="font-weight-bold">
                    <a href="/profile/{{$post->user->id}}">
                        <span class="text-dark">{{$post->user->username}}</span>
                    </a>
                </span> {{$post->caption}}
                </p>
            </div>
        </div>
        <hr>
    @endforeach

</div>
@endsection
