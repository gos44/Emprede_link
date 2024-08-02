<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Enterprising</h1>

@if (session('success'))
    <div>{{ session('success') }}</div>
@endif

<form action="{{ route('emprender.store') }}" method="post" enctype="multipart/form-data">
    @csrf

    <label>
        Name:
        <br>
        <input type="text" name="name">
    </label>
    <br>
    <label>
        last_name:
        <br>
        <input type="text" name="last_name">
    </label>
    <br>
    <label>
        Fecha de nacimiento:
        <br>
        <input type="date" name="birth_date">
    </label>
    <br>
    <label>
        Password:
        <br>
        <input type="password" name="password">
    </label>
    <br>
    <label>
        phone:
        <br>
        <input type="number" name="phone">
    </label>
    <br>
    <label>
        Image:
        <br>
        <input type="text" name="image">
    </label>
    <br>
    <label>
        email:
        <br>
        <input type="email" name="email">
    </label>
    <br>
    <label>
        location:
        <br>
        <input type="text" name="location">
    </label>
    <br>
    <label>
        number:
        <br>
        <input type="number" name="number">
    </label>
    <br>
    <button type="submit">Iniciar sesión</button>
</form>
</body>
</html>