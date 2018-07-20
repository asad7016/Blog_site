<!DOCTYPE html>
<html lang="{{config('app.locale') }}">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device--width, inital-scale=1">
<link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">

<title>{{config('app.name','LSAPP')}}</title>

</head>
<body>


@include('inc.navbar')
<div class="container">
@include('inc.messages')

		@yield('content')
</div>
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ URL::asset('../vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
    <script>
        CKEDITOR.replace( 'article-ckeditor' );
    </script>﻿  
</body>
</html>