<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post" action="/update/{{$user->id}}">
	@method('PATCH')
    @csrf
    <p>
        <label for="title">Username</label><br>
        <input type="text" name="username" placeholder="{{ $user->username}}">
    </p>

    <p>
        <label for="email">Email</label><br>
        <input type="text" name="email"  placeholder="{{ $user->email}}">
    </p>

    <p>
        <label for="description">Address</label><br>
        <textarea cols="20" rows="10" name="address"  placeholder="{{ $user->address}}"></textarea>
    </p>
    <p>
        <button type="submit">Submit</button>
    </p>
</form>

</body>
</html>