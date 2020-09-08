<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <h3>Login</h3>
    <form method="POST">
        @csrf
        <input type="text" name="username" id=""> <br>
        <input type="text" name="password" id=""> <br>
        <button type="submit">Login</button>
    </form>
</body>

</html>
