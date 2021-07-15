@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/profile/{{ $user->id }}" enctype="multipart/form-data" method="post">
        @csrf
        @method('PATCH')
        <div class="row">
            <div class="col-8 offset-2">
                <div class="h1"> Edit Profile </div>
            </div>
        </div>
        <div class="row">
            <div class="col-8 offset-2">
                <div class="form-group row">
                    <label for="title" class="col-md-4 col-form-label ">Title</label>

                    <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title"
                        value="{{ old('title') ?? $user->profile->title }}" autocomplete="title" autofocus>

                    @error('title')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-8 offset-2">
                <div class="form-group row">
                    <label for="discription" class="col-md-4 col-form-label ">Discription</label>

                    <input id="discription" type="text" class="form-control @error('discription') is-invalid @enderror"
                        name="discription" value="{{ old('discription') ?? $user->profile->discription }}" autocomplete="discription" autofocus>

                    @error('discription')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-8 offset-2">
                <div class="form-group row">
                    <label for="url" class="col-md-4 col-form-label ">Url</label>

                    <input id="url" type="text" class="form-control @error('url') is-invalid @enderror" name="url"
                        value="{{ old('url') ?? $user->profile->url }}" autocomplete="url" autofocus>

                    @error('url')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-8 offset-2">
                <label for="image" class="col-md-4 col-form-label ">Profile Image</label>
                <input type="file" class="form-control-file" id="image" name="image">
                @error('image')

                <strong>{{ $message }}</strong>

                @enderror
            </div>
        </div>

        <div class="row pt-4">
            <div class="col-8 offset-2">
                <button class="btn btn-primary">Save Profile</button>
            </div>
        </div>
    </form>
</div>
@endsection