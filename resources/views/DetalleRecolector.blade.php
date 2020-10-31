<!DOCTYPE html>
<html lang="en">
	<head>
	<title>DetalleRecolector</title>
    @include('layouts.head')
</head>
<body>
	@include('layouts.appbar')
<div class="container">
		<div class="table-responsive">
			<div class="table-wrapper">
				<div class="table-title">
					<div class="row">
						<div class="col-xs-3">
							<h2>Detalle Recolector</b></h2>
						</div>
						<div class="col-xs-3" {{ Auth::user()->Tipo_Usuario == 2 || is_null( Auth::user()->Tipo_Usuario) ? 'hidden' : ''}}>
							<a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Nueva Relacion</span></a>
						</div>
						<div class="col-xs-3">
							<a href="./" class="btn btn-info" data-toggle="modal"><i class="material-icons">&#xE15C;</i> <span>	PuntosRecoleccion</span></a>						
						</div>
					</div>
				</div>
				<table class="table table-striped table-hover">
					<thead>
						<tr>
							<th>
								<span class="custom-checkbox">
									<input type="checkbox" id="selectAll">
									<label for="selectAll"></label>
								</span>
							</th>
                            <th>Id</th>
							<th>IdRecolector</th>
							<th>IdPuntoReciclaje</th>
							<th>Actions</th>
						</tr>
					</thead>
					<tbody>

					
                    @if (!is_null($Detalle_R))
    					@foreach ($Detalle_R as $R)
							<tr>
								<td>
									<span class="custom-checkbox">
										<input type="checkbox" id="checkbox1" name="options[]" value="1">
										<label for="checkbox1"></label>
									</span>
								</td>

                                <td>{{$R->id}}</td>
								<td>{{$R->id_punto_reciclaje}}</td>
								<td>{{$R->id_recolectores}}</td>
								
								<td {{ Auth::user()->Tipo_Usuario == 2 || is_null( Auth::user()->Tipo_Usuario) ? 'hidden' : ''}}>
									<a href="./EditarDR/{{$R->id}}" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
									<a href="./EliminarDR/{{$R->id}}" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
								</td>
							</tr>
    					@endforeach
    				@endif
    				
						
				
					</tbody>
				</table>
                <!-- Edit Modal HTML -->
	<div id="addEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form action="\DetalleRecolector" method="POST">
					@csrf
					<div class="modal-header">						
						<h4 class="modal-title">Agregar Punto</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						<div class="form-group">
							<label>Tipo de Basura</label>
							<label for="Puntos"></label>
                            <select id="Puntos" name="Puntos" >
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
                            <select id="Recolectores"  name="Recolector">
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
				</div>
		</div>
	</div>
</body>
</html>