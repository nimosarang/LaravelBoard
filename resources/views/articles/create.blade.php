<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <title>Write Article</title>
</head>
<body>
    <div class="container p-5">
        <h1 class="text-3xl">Write Article</h1>
        <form action="/articles" method="POST" class="mt-3">
            @csrf
            <input type="text" name="body" class="block w-100 mb-2 rounded w-full" value="{{old('body')}}">
            @error('body')
                <p class="text-xs text-red-400 mb-3">{{$message}}</p>
            @enderror
            <button class="py-1 px-3 bg-black text-white rounded text-xs">SAVE</button>
        </form>
    </div>
</body>
</html>
