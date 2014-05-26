<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>foto</title>
    <% HTML::style('css/jquery.toast.css') %>
    <% HTML::style('css/slidebars.css') %>
    <% HTML::style('css/jquery.custombox.css') %>
    <% HTML::style('css/dropzone.css') %>
    <% HTML::style('css/styles.css') %>
    <% HTML::script('js/jquery-2.1.1.js') %>
    <% HTML::script('js/jquery.toast.js') %>
    <% HTML::script('js/jquery.custombox.js') %>
    <% HTML::script('js/slidebars.js') %>
    <% HTML::script('js/dropzone.js') %>
    <% HTML::script('_/js/script.js') %>
</head>
<body>
@include('profile.partials.nav')
<div id="sb-site">
    @yield('content')
</div>
@include('profile.partials.sidebar')
</body>
<script>
    function createToast(){

        var message;
        var options;
        var notice = '<% Session::get('noticeMessage') %>';
        var error = '<% Session::get('errorMessage') %>';
        var success = '<% Session::get('successMessage') %>';

        if(notice!= ''){
            message = notice;
            options = {
                sticky: true,
                type: 'info'
            };
        } else if(error!=''){
            message = error;
            options = {
                sticky: true,
                type: 'error'
            };
        } else{
            message = success;
            options = {
                sticky: false,
                type: 'success'
            };
        }

        if(message!='') {
            $.toast(message, options);
        }
    }

    $(document).ready(function(){
        $.toast.config.align = 'right';
        $.toast.config.width = 400;

        createToast();
    });
</script>
</html>