@extends('layouts.master')

@section('content')

<nav>
    <!-- Left Control -->
    <div class="sb-toggle-left navbar-left">
        <div class="navicon-line"></div>
        <div class="navicon-line"></div>
        <div class="navicon-line"></div>
    </div>
    <!-- /.sb-control-left -->
    <a href="">
        <div class="logo">
            <div>fo<span>to</span></div>
        </div>
    </a>
</nav>
<div class="sb-slidebar sb-left">
    <!-- Your left Slidebar content. -->
    <p>hello</p>
</div>

<h1>Profile</h1>

<a href="<% URL::route('logout') %>">Sign Out</a>

@stop