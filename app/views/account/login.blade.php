@extends('layouts.master')

@section('content')
<img src="../img/login-cover.jpg" id="bg" alt="">
<section class="login-body">
    <div class="login-header">
        <div>fo<span>to</span></div>
    </div>
    <section class="login-form">
        <% Form::open(['route' => 'login']) %>

        <% Form::label('email') %>
        <% Form::email('email', null, ['required']) %>
        @if($errors->has('email'))
        <% $errors->first('email', '<span class="error">:message</span>') %>
        @endif

        <% Form::label('password') %>
        <% Form::password('password') %>
        @if($errors->has('password'))
        <% $errors->first('password', '<span class="error">:message</span>') %>
        @endif

        <div class="login-checkbox">
            <input type="checkbox" name="remember" id="remember">
            <label for="remember">
                Remember me
            </label>
        </div>

        <% Form::submit('Login') %>
        <% Form::close() %>
    </section>
</section>

@stop