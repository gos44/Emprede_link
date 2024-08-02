<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Actualizar</title>
</head>
<body>

    <form action="{{route('enterprising.update', $enterprising)}}"  method="POST">

        @csrf
        @method('put')
        <label>
        Name:
        <br>
        <input type="text" name="name" value="{{old('Name',$enterprising->name) }}">
    </label>
    <br>
    <label>
        Lastname:
        <br>
        <input type="text" name="lastname" value="{{old('lastname',$enterprising->lastname) }}">
    </label>
    <br>
    <label>
        birth_date:
        <br>
        <input type="date" name="birth_date" value="{{old('birth_date',$enterprising->birth_date) }}">
    </label>
    <br>
    <label>
        Password:
        <br>
        <input type="password" name="password" value="{{old('password',$enterprising->password) }}">
    </label>
    <br>
    <label>
        phone:
        <br>
        <input type="number" name="phone" value="{{old('phone',$enterprising->phone) }}">
    </label>
    <br>
    <label>
        image:
        <br>
        <input type="text" name="image" value="{{old('image',$enterprising->image) }}">
    </label>
    <br>
    <label>
        email:
        <br>
        <input type="email" name="email" value="{{old('email',$enterprising->email) }}">
    </label>
    <br>
    <label>
        location:
        <br>
        <input type="text" name="location" value="{{old('location',$enterprising->location) }}">
    </label>
    <br>
    <label>
        number:
        <br>
        <input type="number" name="number" value="{{old('number',$enterprising->number) }}">
    </label>
    <br>
       
        <button  type="submit">Actualizar Curso</button>
       
    </form>
   
</body>
</html>