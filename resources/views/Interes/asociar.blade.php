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
        
        <h2>Emprendedores:</h2>
        <select name="enterprising_id">
            @foreach($enterprisings as $enterprising)
                <option value="{{ $enterprising->id_enterprising }}">{{ $enterprising->id_enterprising }} - {{ $enterprising->Nombre_de_empresa }}</option>
            @endforeach
        </select>
        
        <h2>Inversionistas:</h2>
        <select name="investors_id">
            @foreach($investors as $investor)
                <option value="{{ $investor->id_investor }}">{{ $investor->id_investor }} - {{ $investor->name }} {{ $investor->Apellido }}</option>
            @endforeach
        </select>
        
        <br><br>
        <button type="submit">Asociar</button>
    </form>
</body>
</html>
