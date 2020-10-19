<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Recolector</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    
    
    <link rel="stylesheet" href="{{asset('styles.min.css') }}">
</head>
<body>
				<form action="/ActualizarR/{{$RecolectorR->id}}" method="POST">
					@csrf
					<div class="modal-header">						
						<h4 class="modal-title">Agregar Recolector</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						<div class="form-group">
							<label>Nombre del recolector</label>
							<input type="text" class="form-control" required name='Nom_Recolector' value={{$RecolectorR->Nombre}}>
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
		
		
</body>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script>
$(document).ready(function() {
    let dias = "{{$RecolectorR->Dias}}"
    let splitdias = dias.split(",");
    splitdias.forEach(element => {
        if (element!=="") {
            if(element=="L"){
                $("#"+"inlineCheckbox1").prop('checked', true);  
            }
            if(element=="M"){
                $("#"+"inlineCheckbox2").prop('checked', true);  
            }
            if(element=="Mi"){
                $("#"+"inlineCheckbox3").prop('checked', true);  
            }
            if(element=="J"){
                $("#"+"inlineCheckbox4").prop('checked', true);  
            }
            if(element=="V"){
                $("#"+"inlineCheckbox5").prop('checked', true);  
            }
            if(element=="S"){
                $("#"+"inlineCheckbox6").prop('checked', true);  
            }
            if(element=="D"){
                $("#"+"inlineCheckbox7").prop('checked', true);  
            }
        }
    });

  
});
</script>
</html>