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
    <form action="regUser" method="post">
            Имя пользователя<br>
            <input type="text" name="userName" id=""><br>
            Email<br>
            <input type="text" name="email" id=""><br>
            Пароль<br>
            <input type="text" name="password" id=""><br><br>
            <input type="submit" value="Зарегистрироваться">
            @csrf
    </body>
</html>
