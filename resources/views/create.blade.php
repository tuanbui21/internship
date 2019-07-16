<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post" action="/store">
    @csrf
    <p>
        <label for="title =>'required|unique:posts|max:255'">Username</label><br>
        <input type="text" name="username" placeholder="Username">
        @if()<label></label>@endif
    </p>

    <p>
        <label for="email">Email</label><br>
        <input type="text" name="email" placeholder="abcx.@example.com">
    </p>

    <p>
        <label for="description">Address</label><br>
        <textarea cols="20" rows="10" name="address" placeholder="........."></textarea>
    </p>
    <p>
        <button type="submit">Submit</button>
    </p>
</form>

</body>
</html>