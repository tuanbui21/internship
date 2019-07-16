<!DOCTYPE html>
<html>
<head>
	<title>
		QUAN LY  DANH SACH USER
	</title>
</head>
<body>
<form method="POST">
	<table border="1">
		<thead>
			<tr>
				<td>STT</td>
				<td>Username</td>
				<td>Email</td>
				<td>Address</td>
				<td>Chuc Nang</td>
			</tr>
		</thead>
		<tbody>
			<?php $stt=1; foreach ($user as $value) {?>
			<tr>
				<td>{{ $stt }}</td>
				<td><a href="detail/{{$value->id}}"> {{ $value->username }} </a> </td>
				<td>{{ $value->email }}</td>
				<td>{{ $value->address }}</td>
				<td>
					<a href="/edit/   {{ $value->id }}"  >Edit</a> 
					<a href="/delete/ {{ $value->id }}"  >Delete</a>
				</td>
			</tr>
		<?php $stt++; }?>
		</tbody>
		
		<a href="/create">THÊM NGƯỜI DÙNG MỚI</a>

	</table>
</form>
</body>
</html>