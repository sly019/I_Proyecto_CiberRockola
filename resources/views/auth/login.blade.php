<!-- resources/views/auth/login.blade.php -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rockola</title>
<link rel="stylesheet" href="/css/bootstrap.css">
</head>
<div id="cuerpo_login">
<form method="POST" action="/auth/login">
    {!! csrf_field() !!}

    <div id ="form-group">
        Email
        <input type="email" name="email" value="{{ old('email') }}">
    </div>

    <div id ="form-group">
        Password
        <input type="password" name="password" id="password">
    </div>

    <div>
        <input type="checkbox" name="remember"> Recordar
    </div>
    <div>
        <button type="submit">Login</button>
    </div>
</form>
<input type="button" onclick=" location.href='http://localhost:8000/auth/register' " value="Register"/> 
</div>