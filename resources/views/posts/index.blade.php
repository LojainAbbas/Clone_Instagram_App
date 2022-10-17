@extends('layouts.app')

@section('content')
<div class="container">
    <div class="offset-5"><strong>Welcome To Home</strong></div>
    <hr>
@foreach($posts as $post)
        <div class="row">
            <div class="col-6 offset-3">
                <a href="/profile/{{ $post->user->id }}">
                    <img src="/storage/{{ $post->image }}" class="w-100">
                </a></div></div>
        <div class="row pt-2 pb-4">
            <div class="col-6 offset-3">
                <div><p><strong>
                        <span class="font-weight-bold">
                            <a href="/profile/{{ $post->user->id }}">
                                <span class="text-dark"> {{ $post->user->username }} &nbsp; </span>
                            </a></span>
                        </strong>{{ $post->caption }} </p></div>
            </div></div>
    @endforeach
    <div class="row">
        <div class="col-12 d-flex justify-content-center " style="">
            {{ $posts->links() }}
        </div></div></div>
@endsection
