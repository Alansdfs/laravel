    @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-6">
            <img class="w-100" src="/storage/{{$post->image}}">
        </div>
        <div class="col-4">
            <div>
                    <div class = "d-flex align-items-center pb-3"  style="color:Darkgray;border-bottom:1px solid;">
                        <div class = "pr-3">
                            <img width="45px" src="{{$post->user->profile->profileImage($this)}}" class="rounded-circle">
                        </div>
                        <a href="/profile/{{$post->user->id}}">
                            <span class="text-dark">
                                <strong> 
                                    {{$post->user->name}}
                                </strong>
                            </span>
                        </a>
                        <div class="pl-3">
                            <a href="#">Follow</a>
                        </div>
                    </div>

                <div class="pl-3 pt-3">
                    <p>
                    <a href="/profile/{{$post->user->id}}">
                        <span class="text-dark">
                            <strong class="pr-3"> 
                                {{$post->user->name}}
                            </strong>
                        </span>
                    </a>
                        {{$post->caption}}
                    </p>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
