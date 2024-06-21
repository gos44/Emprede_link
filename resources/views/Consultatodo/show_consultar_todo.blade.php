<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar Consultar Todo</title>
</head>
<body>
    <h1>Detalle del Ítem</h1>
    <p>ID: {{$listodo->id}}</p>
    <p>Nombre del Emprendedor: {{$listodo->name_entrepreneur}}</p>
    <p>Apellido del Emprendedor: {{$listodo->entrepreneur_surname}}</p>
    <p>Nombre del Emprendimiento: {{$listodo->name_entrepreneurship}}</p>
    <p>Descripción General: {{$listodo->general_description}}</p>
    <p>Nombre del Inversor: {{$listodo->name_investor}}</p>
    <p>Apellido del Inversor: {{$listodo->surname_investor}}</p>
    <p>Chat: {{$listodo->chat}}</p>
    <p>Fecha: {{$listodo->date}}</p>
</body>
</html>
