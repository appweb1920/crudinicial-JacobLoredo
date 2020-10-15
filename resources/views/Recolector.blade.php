<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recolectores</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="{{asset('styles.min.css') }}">
</head>
<body>
<div class="container">
		<div class="table-responsive">
			<div class="table-wrapper">
				<div class="table-title">
					<div class="row">
						<div class="col-xs-6">
							<h2>Recolectores</b></h2>
						</div>
						<div class="col-xs-6">
							<a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Nuevo Recolector</span></a>
							<a href="./Recolector" class="btn btn-info" data-toggle="modal"><i class="material-icons">&#xE15C;</i> <span>Recolectores	</span></a>						
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
							<th>Nombre</th>
							<th>Dias de trabajo</th>
							
						</tr>
					</thead>
					<tbody>

					@if (!is_null($Recolector))
    					@foreach ($Recolector as $R)
							<tr>
								<td>
									<span class="custom-checkbox">
										<input type="checkbox" id="checkbox1" name="options[]" value="1">
										<label for="checkbox1"></label>
									</span>
								</td>

							
								<td>{{$R->Nombre}}</td>
								<td>{{$R->Dias}}</td>
								
								<td>
									<a href="./EditarPuntoR/{{$R->id}}" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
									<a href="./EliminarP/{{$R->id}}" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
								</td>
							</tr>
    					@endforeach
    				@endif
					</tbody>
				</table>
				
			</div>
		</div>        
    </div>
    <!-- Edit Modal HTML -->
	<div id="addEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form action="/Recolector" method="POST">
					@csrf
					<div class="modal-header">						
						<h4 class="modal-title">Agregar Recolector</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						<div class="form-group">
							<label>Nombre del recolector</label>
							<input type="text" class="form-control" required name='Nom_Recolector'>
						</div>
						<div class="form-group">
							<label>Dias de trabajo</label>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" name="Dias[]" type="checkbox" id="inlineCheckbox1" value="L">
                                <label class="form-check-label" for="inlineCheckbox1">L</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input"name="Dias[]" type="checkbox" id="inlineCheckbox2" value="M">
                                <label class="form-check-label" for="inlineCheckbox2">M</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" name="Dias[]" type="checkbox" id="inlineCheckbox3" value="Mi" >
                                <label class="form-check-label" for="inlineCheckbox3">Mi</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" name="Dias[]" type="checkbox" id="inlineCheckbox4" value="J" >
                                <label class="form-check-label" for="inlineCheckbox4">J</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" name="Dias[]" type="checkbox" id="inlineCheckbox5" value="V" >
                                <label class="form-check-label" for="inlineCheckbox5">V</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" name="Dias[]" type="checkbox" id="inlineCheckbox6" value="S" >
                                <label class="form-check-label" for="inlineCheckbox6">S</label>
                            </div><div class="form-check form-check-inline">
                                <input class="form-check-input" name="Dias[]" type="checkbox" id="inlineCheckbox7" value="D" >
                                <label class="form-check-label" for="inlineCheckbox7">D</label>
                            </div>

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