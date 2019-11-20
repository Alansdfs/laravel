    @extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex pb-3 pt-3">
        <div class="card col-8 offset-2">
            <div class="row">
                <div class="col-7">
                        <img class="w-100" src="/storage/{{$post->image}}">
                </div>

                <div class="col-5">
                    <div class = "d-flex align-items-center pt-3 pb-1" style="border-bottom-style: solid;border-bottom-color: gray; border-width: 1px;">
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
                    <div class="pt-3">
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
                        <p>
                            Hace 6 horas
                        </p>
                </div>
            </div>    
        </div>
</div>
@endsection
