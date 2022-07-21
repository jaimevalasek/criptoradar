<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Página de login</title>
</head>
<body>
<h1>Página de login</h1>

<form method="post" action="{{ route('admin.login.do') }}">
    @csrf
    <input type="email" name="email" value="" placeholder="Email">
    <input type="password" name="password" placeholder="Senha">
    <input type="submit" value="Login">
</form>
</body>
</html>
