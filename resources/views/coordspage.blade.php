<!DOCTYPE html>
<html>
<head>
	<title>coords</title>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Coordinates</h2>            
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Venue</th>
        <th>lat</th>
        <th>long</th>
        <th>radius</th>
      </tr>
    </thead>
    <tbody>
    @foreach($coords as $coord)
      <tr>
        <td>{{$coord->venue}}</td>
        <td>{{$coord->lat}}</td>
        <td>{{$coord->long}}</td>
        <td>{{$coord->radius}}</td>
      </tr>
     @endforeach
    </tbody>
  </table>
</div>

</body>
</html>