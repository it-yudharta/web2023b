<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h3>Masuk</h3>
    <form action="/login" method="POST">
        @csrf
        <div>
            <label>Email</label>
            <input type="text" name="email">
        </div>
        <br>
        <div>
            <label>Password</label>
            <input type="password" name="password">
        </div>
        <br>
        <input type="submit" value="Masuk">
    </form>
</body>
</html>
