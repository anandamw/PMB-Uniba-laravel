<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <div style="display: flex; align-items: center; justify-content: space-evenly">
        <h1>Halaman User / PROFILE PMB</h1>
        <h1>
            @guest
                <a href="login">Login</a>
            @else
                <a href="logout">Logout</a>
            @endguest

        </h1>
    </div>
</body>

</html>
