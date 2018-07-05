<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Articles - Create</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
</head>
<body class="m-8 bg-grey-lighter font-sans antialiased">
    <div class="mx-auto w-1/3 container">
        <a href="{{ url('articles') }}">
            <button class="w-full mb-4 bg-blue-darker hover:bg-blue-darkest shadow text-sm font-semibold rounded border-grey-light py-3">
                <i class="ml-2 font-semibold font-sans text-white fa fa-long-arrow-alt-left"></i>
                <p class="inline text-white">Back</p> 
            </button>
        </a>
        @if ($errors->any())
        <div class="bg-red p-4 rounded text-white mb-4 leading-normal">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <form method="post" action="{{ url("/articles/create") }}">
            @csrf
            <input class="w-full py-4 rounded px-4 border-grey-light mb-4" type="text" autocomplete="off" placeholder="Enter the title" name="title">
            <input class="w-full py-4 rounded px-4 border-grey-light mb-4" type="text" autocomplete="off" placeholder="Enter the author" name="author">
            <input class="w-full py-4 rounded px-4 border-grey-light mb-4" type="text" autocomplete="off" placeholder="Enter a short description" name="desc">
            <textarea class="w-full py-4 rounded px-4 border-grey-light mb-4 " type="text" autocomplete="off" name="body" placeholder="Enter a body" rows="10"></textarea>
            <button class="block w-full no-underline bg-green hover:bg-green-dark mb-4 font-semibold text-xs uppercase rounded shadow text-white py-3" type="submit">Add new article</button>
        </form>
    </div>
</body>
</html>
