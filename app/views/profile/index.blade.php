@extends('profile.main')

@section('content')

<section class="under-nav">
    <h1>Profile</h1>

    <a href="<% URL::route('logout') %>">Sign Out</a>

    <ul>
        @foreach ($photos as $photo)
        <li>
            <a class="fancybox" rel="group" href="<% Url::asset('uploads/' . Auth::user()->username . '/' . $photo->image) %>"
               title="Lorem ipsum dolor sit amet, consectetur adipiscing elit">
                <% HTML::image('uploads/' . Auth::user()->username . '/thumbnails/' . $photo->image, 'some title') %>
            </a>
            <a href="<% Url::route('deletePhoto', ['id' => $photo->id]) %>" data-method="delete" class="deletePhoto">destroy</a>
        </li>
        @endforeach
    </ul>
</section>

@stop