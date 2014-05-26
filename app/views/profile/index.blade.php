@extends('profile.main')

@section('content')

<section class="under-nav">
    <h1>Profile</h1>

    <a href="<% URL::route('logout') %>">Sign Out</a>

    <ul>
        @foreach ($photos as $photo)
        <li>
            <% HTML::image('uploads/john/' . $photo->image, 'some title', ['width'=>'200']) %>
        </li>
        @endforeach
    </ul>
</section>

@stop