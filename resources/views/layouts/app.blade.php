<!DOCTYPE html>
<html lang="en">
<head>
    <title>Blog</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}"
</head>
<body>
@include('include.header')
<div class="container">
    @include('layouts.message')

    @yield('content')
</div>
@include('include.footer')
<script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'article-ckeditor' );
</script>
</body>
</html>
