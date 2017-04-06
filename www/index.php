<!--  
/**
* Desarrollado por:
* Carlos Arturo rodriguez
* 
*/
 -->

<html lang="ES" ng-app="acumuladorApp">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<head>
	<title>Validar Mysqli</title>
<?php include 'bibliotecas.php'; ?>

	
	<meta charset="utf-8">
	
</head>
<body>
	<div class="container">
	<div ng-controller="acumuladorAppCtrl">	
		<div class="row">
			<div class="col-xs-12 col-md-12 col-lg-12 well"><center><h1>Verificación de existencia de funciones mysqli</h1></center></div>
		</div>	
		<div class="row">
			<div class="col-xs-12 col-md-4 col-lg-4">
			<label>Lista Funciones</label>
				<select ng-model="lista" ng-change="cargar_datos_php()"  class="form-control">
					<option>-----------Seleccione una función-----------</option>
					<option>mysqli_fetch_array</option>
					<option>mysqli_num_rows</option>
					<option>mysqli_connect</option>
					<option>mysqli_num_fields</option>
					<option>mysqli_fetch_assoc</option>
					
				</select>
			</div>
			<div class="col-xs-12 col-md-4 col-lg-4">
				<p ng-repeat="x in campos">
					{{x.resultado}}
				</p>
			</div>
		</div>
		
	</div>
	</div>
	
	
	
	



</body>
</html>

