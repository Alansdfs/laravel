    @extends('layouts.app')

@section('content')
<div class="container">
    @foreach($posts as $post)
        <div class="row pb-3">
            
            <div class="col-4 offset-2">
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

            <div class="col-4">
                <img class="w-100" src="/storage/{{$post->image}}">
            </div>
        </div>
    @endforeach
    <div class="row">
        <div class="col-12 d-flex justify-content-center">
            {{$posts->links()}}
        </div>
    </div>
</div>
@endsection
