<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Asociar Emprendedores e Inversionistas</title>
</head>
<body>
    <h1>Asociar Emprendedores e Inversionistas</h1>
    <form action="{{ route('interest.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        
        <br>
        <h1>Emprendedores:</h1>
        <select name="enterprising_id">
            @foreach($enterprisings as $enterprising)
                <option value="{{ $enterprising->id_enterprising }}">{{ $enterprising->id_enterprising }} - {{ $enterprising->Nombre_de_empresa }}</option>
            @endforeach
        </select>
        <br>
        <h1>Inversionistas:</h1>
        <select name="investors_id">
            @foreach($investors as $investors)
                <option value="{{ $investors->id_investor }}">{{ $investors->id_investor }} - {{ $investors->name }} {{ $investors->Apellido }}</option>
            @endforeach
        </select>
        
        <br><br>
        <button type="submit">Asociar</button>
    </form>
</body>
</html>