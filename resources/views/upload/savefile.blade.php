<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Upload File</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="row">
	<div class="col-lg-offset-4 col-lg-4">
		<center><h2>Upload File</h2></center>
		<form action="/file" method="post" enctype="multipart/form-data">
			<input type="File" name="img">
			<br>
			{{csrf_field()}}
			<input type="submit" name="submit" value="Upload">
		</form>
	</div>

	</div>
	<div class="row col-lg-offset-4 col-lg-4">
        <h3>show file</h3>
        <br>
		<img src="{{asset('/storage/moon.jpg')}}"  alt="">
	</div>
</body>
</html>