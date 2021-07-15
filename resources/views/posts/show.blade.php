@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-8">
            <img src="/storage/{{ $post->image }}" alt="" class="w-100">
        </div>
        <div class="col-4">
            <div>
                <div class="d-flex align-items-center">
                    <div class="pr-3">
                        <img src="{{ $post->user->profile->profileImage() }}" alt="" class="rounded-circle" style="max-width: 50px;">
                    </div>
                    <div class="pr-3 font-weight-bold">
                        <a href="/profile/{{ $post-> user-> id }}">
                            <span class="font-weight-bold text-dark pr-3">{{ $post->user->username }}</span>
                        </a>
                        |
                        <a href="#" class="pl-3">Follow</a>
                    </div>

                </div>
            </div>
            <hr>

            <p> <a href="/profile/{{ $post-> user-> id }}"> <span
                        class="font-weight-bold text-dark">{{ $post->user->username }} </span>
                </a>{{ $post->caption }}
            </p>

        </div>
    </div>
</div>
@endsection