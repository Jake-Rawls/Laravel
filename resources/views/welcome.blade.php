<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Testing | Laravel 6.x</title>
</head>
<body>
    <h2>Hello world!</h2>
    <form action="add_user" method="post">
        @csrf
        <input type="text" name="username">
        <input type="text" name="email">
        <input type="submit" value="Submit">
    </form>
</body>
</html>