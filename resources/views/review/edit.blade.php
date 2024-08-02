<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Actualizar</title>
</head>
<body>

    <form action="{{route('review.update', $review)}}"  method="POST">

        @csrf
        @method('put')
        <label>
            califique con : bueno regular y malo:
        <br>
        <input name="qualification" type="string" value="{{old('qualification',$review->qualification) }}">
        <br>
        </label>
        <br>
        <label>
            comentario:
        <br>
        <input name="comment" type="string" value="{{old('comment',$review->comment)}}">
        <br>
        </label>
       <br>
       
        <button  type="submit">enviar review</button>
       
    </form>
   
</body>
</html>

