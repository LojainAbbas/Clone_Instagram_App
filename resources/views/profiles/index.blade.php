@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
    <div class="col-3 p-5">
        <img src="https://lh3.googleusercontent.com/NL7ST378xah5E4PAN2JDCO5-AE-2GmV8nhNlItbjMJQPsZRn5dyhtW-CGaXFgt_lpAjY1w=s85" class="rounded-circle w-100" >
    </div>
    <div class="col-9 pt-5">
        <div class="d-flex justify-content-between align-items-baseline">

            <div class="d-flex align-items-center pb-3">
                <div class="h4">{{ $user->username }} &nbsp;</div>

                <follow-button user-id="{{ $user->id }}" follows="{{ $follows }}"></follow-button>
            </div>

            @can ('update', $user->profile)
            <a href="/p/create">Add New Post</a>
            @endcan

        </div>

        @can ('update', $user->profile)
            <a href="/profile/{{ $user->id }}/edit">Edit Profile</a>
        @endcan

            <div class="d-flex">
            <div class="pr-5"><strong>{{ $postCount }}</strong> Posts &nbsp; &nbsp; &nbsp; </div>
            <div class="pr-5"><strong>{{ $followersCount  }}</strong> followers &nbsp; &nbsp; &nbsp; </div>
            <div class="pr-5"><strong>{{ $followingCount }}</strong> following </div>
        </div>
        <div class="pt-4"><strong>{{ $user->profile->title }}</strong></div>
        <div>{{ $user->profile->description }}</div>
        <div><a href="#">{{ $user->profile->url }}</a></div>
      </div>
    </div>

    <div class="row pt-5">

            @foreach($user->posts as $post)
        <div class="col-4 pb-4">
            <a href="/p/{{ $post->id }}">
                <img src="/storage/{{ $post->image }}" class="w-100">
            </a>

        </div>
            @endforeach
    </div>







</div>
@endsection
