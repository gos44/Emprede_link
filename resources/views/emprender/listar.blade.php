<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lista de Emprendedores</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <h1>Lista de Emprendedores</h1>

  <table id="enterprisings-table">
    <thead>
      <tr>
        <th style="background-color: #3498db; color: white;">ID</th>
        <th style="background-color: #3498db; color: white;">name</th>
        <th style="background-color: #3498db; color: white;">Apellido</th>
        <th style="background-color: #3498db; color: white;">Fecha de Nacimiento</th>
        <th style="background-color: #3498db; color: white;">Contraseña</th>
        <th style="background-color: #3498db; color: white;">Teléfono</th>
        <th style="background-color: #3498db; color: white;">Correo</th>
        <th style="background-color: #3498db; color: white;">Ubicación</th>
        <th style="background-color: #3498db; color: white;">Numero</th>
      </tr>
    </thead>

    <tbody>
      @foreach ($enterprisings as $enterprising)
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
            <a href="{{ route('enterprising.show', $enterprising->id) }}">Mostrar</a>
            <a href="{{ route('enterprising.edit', $enterprising->id) }}">Editar</a>
            <form action="{{ route('enterprising.destroy', $enterprising->id) }}" method="POST" style="display:inline;">
              @csrf
              @method('DELETE')
              <button type="submit" style="background:none; border:none; color:red; cursor:pointer;">Eliminar</button>
            </form>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>

  <div id="enterprising-details-modal" style="display: none;">
    <div class="modal-content">
      <span class="close-button" onclick="closeModal()">&times;</span>
      <h2>Detalles del Emprendedor</h2>
      <p id="enterprising-name"></p>
      <p id="enterprising-description"></p>
    </div>
  </div>

  <script src="script.js"></script>
</body>
</html>
