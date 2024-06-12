<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Todo</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f7f7f7;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            color: #350400;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            background-color: #fff;
            margin: 20px auto;
        }

        th, td {
            text-align: center;
            padding: 10px;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        th {
            background-color: #8a0b00;
            color: white;
        }

        button {
            padding: 8px 16px;
            background-color: #ff1500;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #ff8b80;
        }

        a {
            text-decoration: none;
            color: #ff6f61;
            transition: color 0.3s ease;
        }

        a:hover {
            color: #ff8b80;
        }
    </style>
</head>
<body>
    <h1>¡Hola desde la lista!</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Nombre del Emprendedor</th>
            <th>Apellido del Emprendedor</th>
            <th>Nombre del Emprendimiento</th>
            <th>Descripción General</th>
            <th>Nombre del Inversor</th>
            <th>Apellido del Inversor</th>
            <th>Chat</th>
            <th>Fecha</th>
            <th>Acción</th>
            <th>Eliminar</th>
        </tr>
        @foreach ($listodos as $listodo)
        <tr>
            <td>{{ $listodo->id }}</td>
            <td>{{ $listodo->name_entrepreneur }}</td>
            <td>{{ $listodo->entrepreneur_surname }}</td>
            <td>{{ $listodo->name_entrepreneurship }}</td>
            <td>{{ $listodo->surname_investor }}</td>
            <td>{{ $listodo->general_description }}</td>
            <td><a href="{{ route('show_consultar_todo.showtodo', $listodo->id) }}"><button type="button">Mostrar</button></a></td>
            <td>
                <form action="{{ route('destroy_consultartodo', $listodo->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>
