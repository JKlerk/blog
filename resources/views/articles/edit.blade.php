@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Articles - Edit</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
</head>
<body class="bg-grey-lighter">
    <div class="m-8 font-sans antialiased mx-auto w-1/3 container">
    <h1 class="text-center text-base font-semibold text-blue-darkest my-4 pb-4 border-b">Edit article: {{ $article->title }}</h1>
       <div class="flex">
            <a class="w-full" href=" {{ url('articles') }}">
                <button class="w-full mb-4 bg-blue-darker hover:bg-blue-darkest shadow text-sm font-semibold rounded border-grey-light py-3 mr-2" style="margin-right: 1px;">
                    <i class="mr-2 font-semibold font-sans text-white fa fa-long-arrow-alt-left"></i>
                    <p class="inline text-white">Back</p> 
                </button>
            </a>
            <a class="w-full" href="{{ url('articles/delete/' . $article->id) }}">
                <button class="w-full mb-4 bg-red hover:bg-red-dark shadow text-sm font-semibold rounded border-grey-light py-3 ml-2">
                    <i class="mr-2 font-semibold font-sans text-white fa fa-times"></i>
                    <p class="inline text-white">Delete</p> 
                </button>
            </a>
        </div>
        @if ($errors->any())
        <div class="bg-red p-4 rounded text-white mb-4 leading-normal">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <form method="post" action="{{ url('articles/edit/' . $article->id) }}">
            @csrf
            <input class="w-full py-4 rounded px-4 border-grey-light mb-4" type="text" autocomplete="off" placeholder="Enter the title" value="{{ $article->title }}" name="title">
            <input class="w-full py-4 rounded px-4 border-grey-light mb-4" type="text" autocomplete="off" placeholder="Enter the author" value="{{ $article->author }}" name="author">
            <input class="w-full py-4 rounded px-4 border-grey-light mb-4" type="text" autocomplete="off" placeholder="Enter a short description" value="{{ $article->desc }}" name="desc">
            <textarea class="w-full py-4 rounded px-4 border-grey-light mb-4 " type="text" autocomplete="off" name="body" placeholder="Enter a body" rows="10">{{ $article->body }}</textarea>
            <button class="block w-full no-underline bg-blue hover:bg-blue-dark mb-4 font-semibold text-xs uppercase rounded shadow text-white py-3" type="submit">Edit article #{{ $article->id }}</button>
        </form>
    </div>
</body>
</html>
@endsection
