<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https : //wOpkg.com/tailwindcss@^2/dist/tailwind . min.css" rel="stylesheet">

</head>
<body>
<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">

    <h1 class="text-3xl font-bold mb-10">Update Post</h1>
    <form action="{{url("/posts/{$post->id}")}}" method="POST">
        @csrf
        <textarea name="content" rows="3" class="block border border - gray-500 w-80 mb-3">{{$post->content}}</textarea>
        <button type="submit" class="p-2 rounded - md bg-indigo - 500 text-white ">Update</button>
    </form>

</div>
</body>
</html>
