<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lista de Emprendimientos</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <h1>Lista de Emprendimientos</h1>

  <table id="enterprises-table">
    <thead>
      <tr>
        <th style="background-color: #3498db; color: white;">ID</th>
        <th style="background-color: #3498db; color: white;">Nombre del Emprendimiento</th>
        <th style="background-color: #3498db; color: white;">Acciones</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($enterprises as $enterprise)
        <tr>
          <td>{{ $enterprising->id }}</td>
          <td>{{ $enterprising->name }}</td>
          <td>{{ $enterprising->last_name }}</td>
          <td>{{ $enterprising->birth_date }}</td>
          <td>{{ $enterprising->password }}</td>
          <td>{{ $enterprising->phone }}</td>
          <td>{{ $enterprising->gmail }}</td>
          <td>{{ $enterprising->location }}</td>
          <td>{{ $enterprising->number }}</td>
         
          <td>
            <a href="{{ route('enterprise.show', $enterprise->id) }}">Mostrar</a>
            <a href="{{ route('enterprise.edit', $enterprise->id) }}">Editar</a>
            <form action="{{ route('enterprise.destroy', $enterprise->id) }}" method="POST" style="display:inline;">
              @csrf
              @method('DELETE')
              <button type="submit" style="background:none; border:none; color:red; cursor:pointer;">Eliminar</button>
            </form>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>

</body>
</html>
