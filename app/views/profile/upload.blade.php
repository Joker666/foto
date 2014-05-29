@extends('profile.main')

@section('content')
<section class="under-nav">
    <% Form::open(['method' => 'POST', 'route' => ['upload', Auth::user()->id],
                   'id' => 'my-awesome-dropzone', 'class' => 'dropzone']) %>
    <button class="btn btn-center" id="startUploadButton">Start Upload</button>
    <% Form::close() %>
</section>
@stop