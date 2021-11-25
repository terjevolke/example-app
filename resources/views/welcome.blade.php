<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">


        <!-- Fonts -->


        <!-- Styles -->


        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">

        <div class = "max-w-screen-md min h screen mx-auto mt-16">
            <form action="/add-fruit" method = "POST">
                @csrf
                <div class ="flex flex-col gap-4 p-6 border bg-gray-100 rounded shadow-lg w-72">
                <h1 class="text-xl text-gray-800 text opacity-70 pb-6" >Add new fruit</h1>
                <label for="name">Fruit name</label>
                    <input class="border rounded" type="text" name="name" id="">
                    @error('name')
                        <p class="text-sm text-red-500">{{$message}}</p>
                    @enderror
                <label for = "color">Fruit color </label>
                    <input class = "border rounded" type = "text" name = "color" id = "">
                    @error('color')
                        <p class="text-sm text-red-500">{{$message}}</p>
                    @enderror
                <label for = "fresh">Is the fruit fresh?
                    <input type = "checkbox" name = "fresh" value =1 >
                </label>
                <button type ="submit" class = "rounded border  bg-green-400 items-center justify-center flex flex-col">
                  <span class = "text-lg text-opacity-70 text-gray-800">Add fruit</span>
                </button>
            </div>
            </form>
            <ul>
                @foreach ($fruits as $item)
                <li>Name:{{$item->name}} / Color: {{ $item->color }}</li>
                @endforeach
            </ul>
        </div>
    </body>
</html>
