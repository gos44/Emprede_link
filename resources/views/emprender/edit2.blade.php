<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Actualizar</title>
</head>
<body>

    <form action="{{route('enterprises.update', $enterprises)}}"  method="POST">

        @csrf
        @method('put')
        <label>
        Name:
        <br>
        <input type="text" name="enterprise_name" value="{{old('enterprise_name',$enterprises->enterprise_name) }}">
    </label>
    <label>
        description:
        <br>
        <input type="text" name="description" value="{{old('description',$enterprises->description) }}">
    </label>
    <label>
        specification:
        <br>
        <input type="text" name="specification" value="{{old('specification',$enterprises->specification) }}">
    </label>
    <label>
        categorie:
        <br>
        <input type="text" name="categorie" value="{{old('categorie',$enterprises->categorie) }}">
    </label>

    
    <br>
    <label>
       
    
        
       
        <button  type="submit">Actualizar Curso</button>
       
    </form>
   
</body>
</html>