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


    <!-- ВАЛИДАЦИЯ -->
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


    <!-- <table>
    @foreach ($mPost as $post)
        <tr>
            <td>{{$post->user_id}}</td>
            <td>{{$post->user_name}}</td>
            <td>{{$post->title}}</td>
            <td>{{$post->text}}</td>
            
            @csrf
        </form>
            </td>
        </tr>
        @endforeach
        </table> -->
        
        <table>
        @foreach ($mPost as $post)
        <tr>
            <td>{{$post->user_id}}</td>
            <td>{{$post->user_name}}</td>
            <td>{{$post->title}}</td>
            <td>{{$post->text}}</td>
            <td><a href="post-edit/{{$post->id}}">edit </a></td>
            <td><form action="{{route('deletePost',$post->id)}}" method="post">
            @method('DELETE')
            <input type="submit" value="">
            @csrf
        </form>
            </td>
        </tr>
        @endforeach
        </table>

        <form action="add-post" method="post">
            <input type="text" name="title" id="">
            <input type="text" name="text" id="">
            <input type="submit" value="">
            @csrf
        </form>
        <form action="logout" method="post">
            <input type="submit" value="">
            @csrf
        </form>
    </body>
</html>
