    @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">

        @foreach($posts as $post)
        <div class="d-flex pb-3 pt-3">
            <div class="card col-7 offset-1">    
                <div class="row pb-3">
                    <div class = "d-flex align-items-center pt-3 pb-1">
                        <div class = "pr-3 pl-3">
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
                </div>

                <div class="row pb-3">
                        <img class="w-100" src="/storage/{{$post->image}}">
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
                <div class="pl-3">
                    <p>
                        Hace 6 horas
                    </p>
                </div>
            </div>
        </div>



        @endforeach


        <div class="pt-3 col-3 offset-7" style="position:fixed">
            <div class = "d-flex align-items-center pt-3 pb-2">
                <div class = "pr-3 pl-3">
                    <img width="45px" src="{{auth()->user()->profile->profileImage($this)}}" class="rounded-circle">
                </div>
                <a href="/profile/{{auth()->user()->id}}">
                    <span class="text-dark">
                        <strong> 
                            {{auth()->user()->name}}
                        </strong>
                    </span>
                </a>
            </div>
            <div class="card">
                <strong class="p-2">
                    Historias
                </strong>
                
                @foreach($following as $user)

                    <div class="row">
                        <div class = "d-flex align-items-center pb-1">
                            <div class = "pr-3 pl-4">
                                <img width="45px" src="{{$user->profile->profileImage($this)}}" class="rounded-circle">
                            </div>
                            <div>
                                <a href="/profile/{{$user->id}}">
                                    <span class="text-dark">
                                        <strong> 
                                            {{$user->name}}
                                        </strong>
                                    </span>
                                </a>
                                <p>
                                    Hace 5 horas.
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
        
        <div class="col-7 offset-1">
            <div class="col-12 d-flex justify-content-center">
                {{$posts->links()}}
            </div>
        </div>

    </div>
</div>
@endsection
