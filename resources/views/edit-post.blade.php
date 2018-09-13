<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
          
        </style>
    </head>
    <body>
    <div >
            
       
        <form action="{{route('updatePost')}}" method="post">
            @method('PUT')
                <input type="hidden" name="id" id="" value="{{$post->id}}">
                <input type="text" name="title" id="" value="{{$post->title}}">
                <input type="text" name="text" id="" value="{{$post->text}}">
                <input type="submit" value="">
            @csrf
        </form>
    </div>
    </body>
</html>
