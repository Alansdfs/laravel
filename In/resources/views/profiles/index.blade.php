@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img class="rounded-circle" style="height:150px;" src="{{$user->profile->profileImage($this)}}">
        </div>
        <div class="col-9 p-5">
            <div class = "d-flex justify-content-between align-items-baseline">
                <div class="d-flex pb-3">
                    <div class="pr-5">
                        <h1>{{$user->name}}</h1>
                    </div>
                    <div id="app">
                        <follow-button user-id="{{$user->id}}" follows="{{$follows}}"></follow-component>
                    </div>
                </div>
                @can('update',$user->profile)
                    <a href="/p/create">Add new post</a>
                @endcan
            </div>
            @can('update',$user->profile)
                <a href="/profile/{{$user->id}}/edit">Edit profile</a>
            @endcan

            <div class="d-flex">
                <div class="pr-5"> <strong>{{$postCount}} </strong>post</div>
                <div class="pr-5"> <strong> {{$followersCount}} </strong>followers</div>
                <div class="pr-5"> <strong> {{$followingCount}} </strong>following</div>
            </div>
            <div class="pt-4 font-weight-bold">{{$user->profile->title}}</div>
            <div>{{$user->profile->description}}</div>
            <div>{{$user->profile->url ?? 'N/A'}}</div>

        </div>
    </div>

    <div class="row pt-9">
        @foreach($user->posts as $post)
            <div class="col-4 pb-4" >
                <a href="/p/{{$post->id}}">
                    <img class="w-100" src="/storage/{{$post->image}}">
                </a>
            </div>
        @endforeach 
        
      
    </div>
    
</div>
@endsection
