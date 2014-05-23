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
    <ul class="sb-menu">
        <li><a href="">Home</a></li>
        <li><a href="">ABCD</a></li>
        <li><a href="">DEFG</a></li>
        <li><a href="">FRGT</a></li>
        <li><a href="">WWWW</a></li>
        <li><a href="#" class="sb-toggle-submenu">Help &amp; Issues <span class="sb-caret"></span></a>
            <ul class="sb-submenu">
                <li><a href="">BJHJB</a></li>
                <li><a href="">MKJMKM</a></li>
                <li><a href="">SDDSD</a></li>
                <li><a href="">DDSSDSD</a></li>
            </ul>
        </li>
        <li><a href="">Contact</a></li>
        <li><a class="github" href="">Github</a></li>
        <li><span class="sb-open-right">About the Author</span></li>
        <li>
            <small>foto &copy; 2014 Hasan Rafi</small>
        </li>
    </ul>
</div>

<h1>Profile</h1>

<a href="<% URL::route('logout') %>">Sign Out</a>

@stop