<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <table>
        <thead>
            <th><a href="/">Home</a></th>
            <th><a href="/about" class="active">About</a></th>
            <th><a href="/blog">Blog</a></th>
            <th><a href="/contact">Contact</a></th>
        </thead>
    </table>
    <center>
        <h1>{{ $title }} Page</h1>
        <h3>Made by {{ $name }} </h3>
        <img src="images/fre3.jpeg" alt="fre3" width="400">
    </center>
</body>

</html>
