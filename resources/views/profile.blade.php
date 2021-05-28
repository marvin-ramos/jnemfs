<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="{{ url('/admin/sender') }}" method="post">
		@csrf
		<input type="text" name="text">
		<button type="Submit">Submit</button>
	</form>
</body>
</html>