<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.head')

    <title>Punto de Reciclaje</title>
</head>
<body>
	@include('layouts.appbar')
<div>
<div class="container">
		<div class="table-responsive">
			<div class="table-wrapper">
				<div class="table-title">
					<div class="row">
						<div class="col-xs-3">
							<h2>Punto de reciclaje</b></h2>
						</div>
						
						<div class="col-xs-3"  {{ Auth::user()->Tipo_Usuario == 2 || is_null( Auth::user()->Tipo_Usuario) ? 'hidden' : ''}}>
							<a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons" >&#xE147;</i> <span>Nuevo Punto</span></a>
						</div>
						<div class="col-xs-3"  >
							<a href="./Recolector" class="btn btn-info" data-toggle="modal"><i class="material-icons">&#xE15C;</i> <span>Recolectores	</span></a>	
						</div>
						<div class="col-xs-3"  >
							<a href="./DetalleRecolector" class="btn btn-info" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Detalle_Recolector</span></a>					
					
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
							<th>TipoBasura</th>
							<th>Address</th>
							<th>HorarioApertura</th>
							<th>HorarioCierre</th>
							<th>Actions</th>
						</tr>
					</thead>
					<tbody>

					@if (!is_null($PReciclaje))
    					@foreach ($PReciclaje as $P)
							<tr>
								<td>
									<span class="custom-checkbox">
										<input type="checkbox" id="checkbox1" name="options[]" value="1">
										<label for="checkbox1"></label>
									</span>
								</td>

							
								<td>{{$P->TipoBasura}}</td>
								<td>{{$P->direccion}}</td>
								<td>{{$P->HorarioApertura}}</td>
								<td>{{$P->HorarioCierre}}</td>
								<td {{ Auth::user()->Tipo_Usuario == 2 || is_null( Auth::user()->Tipo_Usuario) ? 'hidden' : ''}}>
									<a href="./EditarPuntoR/{{$P->id}}" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
									<a href="./EliminarP/{{$P->id}}" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
								</td>
							</tr>
    					@endforeach
    				@endif
						
				
					</tbody>
				</table>
				<div class="clearfix">
					<div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
					<ul class="pagination">
						<li class="page-item disabled"><a href="#">Previous</a></li>
						<li class="page-item"><a href="#" class="page-link">1</a></li>
						<li class="page-item"><a href="#" class="page-link">2</a></li>
						<li class="page-item active"><a href="#" class="page-link">3</a></li>
						<li class="page-item"><a href="#" class="page-link">4</a></li>
						<li class="page-item"><a href="#" class="page-link">5</a></li>
						<li class="page-item"><a href="#" class="page-link">Next</a></li>
					</ul>
				</div>
			</div>
		</div>        
    </div>
	<!-- Edit Modal HTML -->
	<div id="addEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form action="\" method="POST">
					@csrf
					<div class="modal-header">						
						<h4 class="modal-title">Agregar Punto</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						<div class="form-group">
							<label>Tipo de Basura</label>
							<input type="text" class="form-control" required name='Tbasural'>
						</div>
						<div class="form-group">
							<label>Direccion</label>
							<input type="text" class="form-control" required name ='DireccionL'>
						</div>
						<div class="form-group">
							<label>Horario de apertura</label>
							<input type="number" min="1" max="24"class="form-control" required name ='HaperturaL'>
						</div>
						<div class="form-group">
							<label>Horario de Cierre</label>
							<input type='number'min="1" max="24" class="form-control" required name ='HcierreL'>
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
	
	<!-- Delete Modal HTML -->
	
</body>
</html>