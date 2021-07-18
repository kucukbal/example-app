@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="{{ $user->profile->profileImage() }}" alt="profil image" srcset="" class="rounded-circle w-100">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <div class="d-flex align-items-center">
                    <h1 class='pr-3'>{{ $user->username }}</h1>
                    <follow-button user-id="{{  $user->id }}">

                    </follow-button>
                </div>

                @can ('update', $user->profile)
                <a href="/p/create">Add New Post</a>
                @endcan
            </div>
            @can ('update', $user->profile)
            <a href="/profile/{{ $user->id }}/edit">Edit Profile</a>
            @endcan
            <div class="d-flex">
                <div class="pr-3"><strong>{{ $postCount }}</strong>
                    posts
                </div>
                <div class="pr-3"><strong>{{ $followersCount }}</strong>
                    followers
                </div>
                <div class="pr-3"><strong>{{ $followingCount }}</strong>
                    following
                </div>
            </div>
            <div class="pt-5 font-weight-bold"> {{ $user->profile->title }} </div>
            <div>{{ $user->profile->discription }}</div>
            <div> <a href="#">{{ $user->profile->url }} </div>

        </div>
    </div>
    <div class="row pt-4">
        @foreach ($user->posts as $post)
        <div class="col-4 pb-4">
            <a href="/p/{{ $post->id }}">
                <img src="/storage/{{ $post->image }}" alt="ss" srcset="" class="w-100">
            </a>
        </div>
        @endforeach
    </div>



</div>

</div>
@endsection