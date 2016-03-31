<!DOCTYPE html>
<html>
<head>
	<title>:) students</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
  <h2>Students</h2>            
  <table class="table table-striped">
    <thead>
      <tr>
        <th>rollno</th>
        <th>lat</th>
        <th>long</th>
        <th>timediff</th>
        <th>location</th>
        <th>department</th>
      </tr>
    </thead>
    <tbody>
@foreach($students as $student)
      <tr>
        <td>{{$student->rollno}}</td>
        <td>{{$student->lat}}</td>
        <td>{{$student->long}}</td>
        <td>{{floor((time()-$student->updated)/60)}}</td>
        <td>{{$student->location}}</td>
        <td>{{$student->dept}}</td>

      </tr>
@endforeach
    </tbody>
  </table>
</div>


</body>
</html>