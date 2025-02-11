<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ Str::title($page->title) }} | {{ env('APP_NAME') }}</title>
    {{-- @include('pages.layouts.seo') --}}
<style>
.container {
    max-width: 800px;
    margin: 20px auto;
    padding: 20px;
    background: white;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    border-radius: 5px;
}
</style>

</head>
<body>
<div class="container">
    {!! $page->content !!}
</div>
</body>
</html>