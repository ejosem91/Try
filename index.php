<!DOCTYPE html>
<html ng-app="inscription">
<head>
	<title>
		Registro de Persona 
	</title>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.5/angular.min.js"></script>
	<script src="boo/js/anguIns.js" type="text/javascript"></script>

	<link rel="stylesheet" type="text/css" href="boo/css/bootstrap.css">
	
</head>
<body ng-controller="cteIns">

<div class="container">

<h1>Registro de persona</h1>
<form >
	

<label>Nombre:</label>
<input ng-model="inscription.name" class="form-control" type="text" name="name"> </input>
<br>
<label>Apellidos:
</label>
<input ng-model="inscription.lastName" class="form-control" type="text" name ="lastName"></input>	
<br>
<button ng-click="save()" class="btn btn-success" action="submit">
	Save 
</button>
</form>

<table class="table table-hover" ng-init="select()">
	<thead>
		<tr>
			<th>ID</th>
			<th>NAME</th>
			<th>LAST NAME</th>
		</tr>
		<tbody>
			<tr ng-repeat="x in users">
				<td>{{x.id}}</td>	
				<td>{{x.name}}</td>
				<td>{{x.lastName}}</td>
			</tr>
		</tbody>
	</thead>
  
</table>



</div>


</body>
</html>