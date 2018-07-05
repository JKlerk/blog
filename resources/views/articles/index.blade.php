@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Articles</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
</head>
<body class="bg-grey-lighter">
<div class="m-8 mt-4 bg-grey-lighter font-sans antialiased flex flex-wrap" style="flex: 1 0 auto;">
    @if ($articles->isEmpty())
        <div class="w-1/4 p-6 bg-white rounded shadow">
            <p class="text-lg font-semibold text-black">There are no articles</p>
            <p class="text-sm pt-2 text-grey-dark">Click the button to create a new article</p>
            <a href="{{ url('articles/create') }}">
                <button class="w-full bg-green hover:bg-green-dark mt-4 font-semibold rounded shadow text-white py-2" type="button">
                    Create new article
                </button>
            </a>
        </div>
     @else
        @foreach ($articles as $article)
            <div class="w-1/4 p-6 bg-white rounded shadow">
                <div class="text-lg font-semibold text-black">
                    {{ $article->title }} - {{ $article->author }}
                </div>
                <div class="mt-1 leading-normal text-grey-dark">
                    {{ $article->desc }}
                </div>
                <div class="flex">
                    <a class="w-1/2 text-white no-underline" href="{{ url('articles/delete/' . $article->id) }}">
                        <button class="w-full bg-red text-white hover:bg-red-dark text-sm font-semibold rounded mt-4 py-2 px-2 w-1/2 mr-1">
                        Delete <i class="text-xs fas fa-trash-alt"></i>
                        </button>
                    </a>
                    <a class="w-1/2  text-white no-underline" href="{{ url('articles/edit/' . $article->id) }}">
                        <button class="w-full text-white bg-blue hover:bg-blue-dark text-sm font-semibold rounded mt-4 py-2 px-2 w-1/2 ml-1">
                            Edit <i class="text-xs fas fa-edit"></i>
                        </button>
                    </a>
                </div>
            </div>
        @endforeach
    @endif
</div>
@if ($articles->isEmpty()) 
@else
    <a href="{{ url('articles/create') }}">
        <button class="w-full bg-green hover:bg-green-dark font-semibold rounded shadow text-white py-2" type="button">
            Create new article
        </button>
    </a>
@endif
</body>
</html>
@endsection
