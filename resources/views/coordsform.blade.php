<!DOCTYPE html>
<html>
<head>
	<title>coords form</title>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
<div style="margin-left:20%;margin-right:20%;margin-top:2%;">
	<form role="form" method="POST" action="{{env('SERVER_ROOT', 'http://localhost:8000').'/form'}}">
		<div class="form-group">
			<label for="lat">Lat: </label>
			<input type="text" class="form-control" id="lat" name="lat">
		</div>
		<div class="form-group">
			<label for="long">Lat: </label>
			<input type="text" class="form-control" id="long" name="long">
		</div>
		<div class="form-group">
			<label for="radius">Radius : </label>
			<input type="text" class="form-control" id="radius" name="radius">
		</div>

		<div class="radio">
		  <label><input type="radio" name="venue" value="eeeaudi">eeeaudi</label>
		</div>
		<div class="radio">
		  <label><input type="radio" name="venue" value="informals">informals</label>
		</div>

		<button type="submit" class="btn btn-default">Submit</button>
	</form>
<div>
</body>
</html>