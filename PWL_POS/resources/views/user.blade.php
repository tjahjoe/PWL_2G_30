<!DOCTYPE html>
<html lang="en">
<head>
    <title>Data User</title>
</head>
<body>
    <h1>Data User</h1>
    <table border="1" cellpading="2" cellspacing="0" >
        <tr>ID</tr>
        <th>Username</th>
        <th>Nama</th>
        <th>ID Level Pengguna</th>
        @foreach ( $data as $d )
        <tr>
            <td>{{ $d->user_id }}</td>
            <td>{{ $d->username }}</td>
            <td>{{ $d->nama }}</td>
            <td>{{ $d->level_id }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>