<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <h1>Data Level Pengguna</h1>
    <table border="1" cellpading="2" cellspacing="0" >
        <tr>ID</tr>
        <th>Kode Level</th>
        <th>Nama Level</th>
        @foreach ( $data as $d )
        <tr>
            <td>{{ $d->level_id }}</td>
            <td>{{ $d->level_kode }}</td>
            <td>{{ $d->level_nama }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>