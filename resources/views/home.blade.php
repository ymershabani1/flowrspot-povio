@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://scontent.fbeg4-1.fna.fbcdn.net/v/t39.30808-6/241760913_1297294454037200_6437093625288764925_n.jpg?_nc_cat=107&ccb=1-5&_nc_sid=09cbfe&_nc_ohc=tBCCMq_SUzoAX8qIWwz&_nc_ht=scontent.fbeg4-1.fna&oh=42f205935857d930fd4956187232b452&oe=6164CCDD" class="rounded-circle" style="width: 200px">
        </div>
        <div class="col-9 pt-5">
            <div><h1>{{$user->username}}</h1></div>
            <div class="d-flex">
                <div class="pr-3"><strong>150</strong> posts</div>
                <div class="pr-3"><strong>23k</strong> followers</div>
                <div class="pr-3"><strong>212</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">{{$user->profile->title}}</div>
            <div>{{$user->profile->description}}</div>
            <div><a href="#">{{$user->profile->url}}</a></div>
        </div>
    </div>
    <div class="row pt-4">
        <div class="col-4">
            <img src="https://scontent.fbeg4-1.fna.fbcdn.net/v/t39.30808-6/241760913_1297294454037200_6437093625288764925_n.jpg?_nc_cat=107&ccb=1-5&_nc_sid=09cbfe&_nc_ohc=tBCCMq_SUzoAX8qIWwz&_nc_ht=scontent.fbeg4-1.fna&oh=42f205935857d930fd4956187232b452&oe=6164CCDD" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://scontent.fbeg4-1.fna.fbcdn.net/v/t39.30808-6/241760913_1297294454037200_6437093625288764925_n.jpg?_nc_cat=107&ccb=1-5&_nc_sid=09cbfe&_nc_ohc=tBCCMq_SUzoAX8qIWwz&_nc_ht=scontent.fbeg4-1.fna&oh=42f205935857d930fd4956187232b452&oe=6164CCDD" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://scontent.fbeg4-1.fna.fbcdn.net/v/t39.30808-6/241760913_1297294454037200_6437093625288764925_n.jpg?_nc_cat=107&ccb=1-5&_nc_sid=09cbfe&_nc_ohc=tBCCMq_SUzoAX8qIWwz&_nc_ht=scontent.fbeg4-1.fna&oh=42f205935857d930fd4956187232b452&oe=6164CCDD" class="w-100">
        </div>
    </div>

</div>
@endsection
