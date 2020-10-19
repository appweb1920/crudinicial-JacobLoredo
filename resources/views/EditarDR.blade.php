<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Detalle-Recolector</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="{{asset('styles.min.css') }}">
</head>
<body>
    
<form action="/ActualizarDr/{{$DetalleR->id}}" method="POST">
					@csrf
					<div class="modal-header">						
						<h4 class="modal-title">Agregar Punto</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						<div class="form-group">
							<label>Tipo de Basura</label>
							<label for="Puntos"></label>
                            <select id="Puntos" name="Puntos" value ="{{$DetalleR->id_punto_reciclaje }}">
                            @if (!is_null($Punto))
    					        @foreach ($Punto as $P)
                                <option value="{{$P->id}}">{{$P->id}}.-{{$P->TipoBasura}}</option>
                                @endforeach
                            @endif
                               
                            </select>
						</div>
						
						<div class="form-group">
							<label>Recolector</label>
							<label>Tipo de Basura</label>
							<label for="Recolectores"></label>
                            <select id="Recolectores"  name="Recolector" value ="{{$DetalleR->id_recolectores}}">
                            @if (!is_null($Recolector))
    					        @foreach ($Recolector as $R)
                                <option value="{{$R->id}}">{{$R->id}}.-{{$R->Nombre}}</option>
                                @endforeach
                            @endif
                               
                            </select>
						</div>				
					</div>
                    <div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						<input type="submit" class="btn btn-success" value="Agregar">
					</div>
				</form>
</body>
</html>