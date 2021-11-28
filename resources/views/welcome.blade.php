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
                <div class ="flex flex-col gap-3 p-6 border bg-yellow-100 rounded shadow-lg w-72">
                <h1 class="text-xl text-gray-800 text opacity-70 pb-6" >Add new fruit</h1>
                <label for="name">Fruit name</label>
                    <input class="border rounded bg-gray" type="text" name="name" id="">
                    @error('name')
                        <p class="text-sm text-red-500">{{$message}}</p>
                    @enderror
                <label for = "color">Fruit color </label>
                    <input class = "border rounded" type = "text" name = "color" id = "">
                    @error('color')
                        <p class="text-sm text-red-500">{{$message}}</p>
                    @enderror
                <label for = "fresh">Is the fruit fresh?
                    <input type = "checkbox" class="bg-green-600" name = "fresh" value =1 >
                </label>
                <button type ="submit" class = "rounded border w-1/2 bg-red-300 hover:bg-red-800 items-center justify-center flex flex-col">
                  <span class = "text-lg text-red-900 hover:text-red-50">Add fruit</span>
                </button>
            </div>
            </form>
            <ul>
                @foreach ($fruits as $fruit)
                <li>{{ $fruit->color }} {{$fruit->name}} {{$fruit->fresh}} </li>
                @endforeach
            </ul>
        </div>
    </body>
</html>
