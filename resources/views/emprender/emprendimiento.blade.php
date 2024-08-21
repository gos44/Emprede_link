<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Nombre del enterprises</h1>

@if (session('success'))
    <div>{{ session('success') }}</div>
@endif

<form action="{{ route('emprender.store') }}" method="post" enctype="multipart/form-data">
    @csrf

    <label>
        enterprise_name:
        <br>
        <input type="text" name="enterprise_name">
    </label>
    <br>
    <label>
        description:
        <br>
        <input type="text" name="description">
    </label>
    <br>
    <label>
        specification:
        <br>
        <input type="text" name="specification">
    </label>
    <br>
    <label>
        categorie:
        <br>
        <input type="text" name="categorie">
    </label>
    <br>
  <br>
 
  
    <br>
    
    <button type="submit">Publicar</button>
</form>
</body>
</html>