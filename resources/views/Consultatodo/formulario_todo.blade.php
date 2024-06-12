<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Lista Todo</title>
</head>
<body>
    <h1>Formulario Lista Todo</h1>
    <form action="{{ route('data_todo') }}" method="POST">
        @csrf
        <label>
            Ingrese el nombre del emprendedor:
            <br>
            <input type="text" name="name_entrepreneur">
        </label>
        <br><br>
        <label>
            Ingrese el apellido del emprendedor:
            <br>
            <input type="text" name="entrepreneur_surname">
        </label>
        <br><br>
        <label>
            Ingrese el nombre del emprendimiento:
            <br>
            <input type="text" name="name_entrepreneurship">
        </label>
        <br><br>
        <label>
            Ingrese la descripción general:
            <br>
            <input type="text" name="general_description">
        </label>
        <br><br>
        <label>
            Ingrese el nombre del inversor:
            <br>
            <input type="text" name="name_investor">
        </label>
        <br><br>
        <label>
            Ingrese el apellido del inversor:
            <br>
            <input type="text" name="surname_investor">
        </label>
        <br><br>
        <label>
            ¿Hay chat disponible?:
            <br>
            <input type="text" name="chat">
        </label>
        <br><br>
        <label>
            Ingrese la fecha:
            <br>
            <input type="date" name="date">
        </label>
        <br><br>
        <button type="submit">Enviar Formulario</button>
    </form>
</body>
</html>
listar_todo