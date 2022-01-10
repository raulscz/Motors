<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
    		<meta http-equiv="X-UA-Compatible" content="IE=edge">
    		<meta name="viewport" content="width=device-width, initial-scale=1.0">
    		<title>Mostrar Coches</title>
	</head>
	<body>
    		<div>
        		<table>
            		<tr>
               			<th>ID</th>
                		<th>MAKE</th>
                		<th>MODEL</th>
                		<th>PRODUCED_ON</th>
                        <th>CREATED_AT</th>
                        <th>UPDATED_AT</th>
            		</tr>
            		@foreach($car as $coches)
                	<tr>
                    		<td>{{$coches->id}}</td>
                    		<td>{{$coches->make}}</td>
                    		<td>{{$coches->model}}</td>
                    		<td>{{$coches->produced_on}}</td>
                            <td>{{$coches->created_at}}</td>
                            <td>{{$coches->updated_at}}</td>
                	</tr>
            		@endforeach
        		</table>
    		</div>
	</body>
	</html>