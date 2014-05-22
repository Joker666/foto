<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>foto</title>
    <% HTML::style('css/jquery.toast.min.css') %>
    <% HTML::style('css/slidebars.min.css') %>
    <% HTML::style('css/styles.css') %>
    <% HTML::script('js/jquery-2.1.1.min.js') %>
    <% HTML::script('js/jquery.toast.min.js') %>
    <% HTML::script('js/slidebars.min.js') %>
    <% HTML::script('js/script.js') %>
</head>
<body>
<div id="sb-site">
    @include('layouts.partials.nav')
    @yield('content')
</div>

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
</body>
</html>