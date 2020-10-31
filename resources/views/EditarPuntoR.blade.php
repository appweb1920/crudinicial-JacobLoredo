<!DOCTYPE html>
<html lang="en">
<head>
	@include('layouts.head')
    <title>Editar Punto de reciclaje</title>
</head>
<body>
	@include('layouts.appbar')
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