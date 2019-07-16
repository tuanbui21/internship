<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	@csrf
	<h2>{{ $user->username}}</h2>
	<p>{{ $user->email}}</p>
	<p>{{ $user->address}}</p>
	
</body>
</html>