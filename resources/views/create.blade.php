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
    <h1 class="text-3xl font-bold mb-10">Create Post</h1>
    <form action="{{url('/create')}}" method= "POST">
        @csrf
        <select name="user_id" class= "block border border-gray-500 w-80 mb-3 p-2">
            @foreach($users as $user)
                <option value= "{{$user->id}}">{{$user->name}}</option>
            @endforeach
        </select>
        <textarea name="content" rows="3" class= "block border border-gray-500 w-80 mb-3"></textarea>
        <button type="submit" class="p-2 rounded - nd bg-indigo -500 text -white ">Create</button>
    </form>
</div>
</body>
</html>
