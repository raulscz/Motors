<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Crear</title>
</head>
<body>
    <form action="{{url('cars.create')}}" method="POST">
        @csrf
        {{method_field('POST')}}
        <p>Nombre del coche:</p>
        <input type="text" name="make" id="make" placeholder="Marca del Coche">
        <br>
        <p>Modelo del coche:</p>
        <input type="text" name="model" id="model" placeholder="Modelo del coche">
        <br>
        <p>Producido:</p>
        <input type="date" name="produced_on" id="produced_on">
        <br><br>
        <input type="submit" name="Crear">
    </form>
</body>
</html>