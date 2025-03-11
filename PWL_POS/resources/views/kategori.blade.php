<!DOCTYPE html>
<html lang="en">
<head>
    <title>Data Kategori Barang</title>
</head>
<body>
    <h1>Data Level Pengguna</h1>
    <table border="1" cellpading="2" cellspacing="0" >
        <tr>ID</tr>
        <th>Kode Kategori</th>
        <th>Nama Kategori</th>
        @foreach ( $data as $d )
        <tr>
            <td>{{ $d->kategori_id }}</td>
            <td>{{ $d->kategori_kode }}</td>
            <td>{{ $d->kategori_nama }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>

