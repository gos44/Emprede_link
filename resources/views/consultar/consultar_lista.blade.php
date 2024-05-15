<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
        <h1>FORMULARIO lista</h1>
    
        <form action="{{route('data_lista')}}"  method="POST" >
           
            @csrf


            <label>
                Ingrese el nombre emprededor:
                <br>
                <input type="string" name="name_entrepreneur">
            </label>
            <br><br>
            <label>
                Ingrese el apellido emprededor: 
                <br>
                <input type="string" name="entrepreneur_surname">
            </label>
            <br><br>
            <label>
                Ingrese el nombre inversor: 
                <br>
                <input type="string" name="name_entrepreneurship">
            </label>
            <br><br>
            <label>
                Ingrese el apellido inversor: 
                <br>  <br>
                <input type="string" name="surname_investor">
            </label>
            <br>  <br>
            <label>
                Ingrese el descripcion:
                <br>
                <input type="text" name="general_description">
            </label>
           
            <br><br><br>
    
            <button type="submit">Enviar Formulario:</button>
           
       
        </form>
    
    </body>
    </html>

