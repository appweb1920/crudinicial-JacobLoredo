<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="{{asset('styles.min.css') }}">
    <title>Editar Punto de reciclaje</title>
</head>
<body>
    <!-- Edit Modal HTML -->
				<form action="/ActualizarP/{{$PuntoR->id}}" method = 'POST'>
                @csrf
					<div class="modal-header">						
						<h4 class="modal-title">Editar Punto de reciclaje</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						<div class="form-group">
							<label>Tipo de Basura</label>
							<input type="text" class="form-control" required name='Tbasural' value='{{$PuntoR->TipoBasura}}'>
						</div>
						<div class="form-group">
							<label>Direccion</label>
							<input type="text" class="form-control" required name ='DireccionL'value='{{$PuntoR->direccion}}'>
						</div>
						<div class="form-group">
							<label>Horario de apertura</label>
							<input type="number" min="1" max="24"class="form-control" required name ='HaperturaL'value='{{$PuntoR->HorarioApertura}}'>
						</div>
						<div class="form-group">
							<label>Horario de Cierre</label>
							<input type='number'min="1" max="24" class="form-control" required name ='HcierreL'value='{{$PuntoR->HorarioCierre}}'>
						</div>
					<div class="modal-footer">
                        <a class="btn btn-default" href="/" role="button">Cancel</a>
						<input type="submit" class="btn btn-info" value="Guardar">
					</div>
				</form>
		
</body>
</html>