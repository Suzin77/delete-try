@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-3 p-5">

            </div>
            <div class="col-9 p-5">
                <div class="d-flex justify-content-between align-items-baseline">
                    <div class="d-flex align-items-center pb-2">
                        <div class="h3">{{$user->name}}</div>
                        <follow-button user-id="{{$user->id}}" follows=""></follow-button>
                    </div>
                </div>
                <div class="" style="border-bottom: 1px solid #1b1e21"></div>
                <div class="pt-1">
                    @can('update',$user->profile)
                        <div class="">
                            <a class="pr-3" href="/p/create">Add new Post</a>
                            <a href="/profile/{{$user->id}}/edit">Edit profile</a>
                        </div>
                    @endcan
                </div>

                <div class="d-flex">
                    <div class="pr-4"><strong>num </strong> posts</div>
                    <div class="pr-4"><strong>num </strong> followers</div>
                    <div class="pr-4"><strong>num </strong> following</div>
                </div>
                <div class="pt-4 font-weight-bold">profile title</div>
                <div>
                    User id: {{$user->profile->user_id}}
                </div>
                <div><a href="https://lin-q.pl" target="_blank">url</a></div>
            </div>
        </div>

        <div class="row pt-4">

        </div>

    </div>
@endsection
