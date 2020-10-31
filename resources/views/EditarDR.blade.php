<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Editar Detalle-Recolector</title>
    @include('layouts.head')
</head>
<body>
    @include('layouts.appbar')
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