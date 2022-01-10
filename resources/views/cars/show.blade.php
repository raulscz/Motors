<!DOCTYPE html>
<html>
<head>
    <title>Car {{ $car->id }}</title>
</head>
<body>
    <form action="{{route('cars.create')}}" method="GET">
        <input type="submit" name="crear"><br><br>
    </form>
    <h1>Car {{ $car->id }}</h1>
    <ul>
        <li>Make: {{ $car->make }}</li>
        <li>Model: {{ $car->model }}</li>
        <li>Produced on: {{ $car->produced_on }}</li>
    </ul>
</body>
</html>