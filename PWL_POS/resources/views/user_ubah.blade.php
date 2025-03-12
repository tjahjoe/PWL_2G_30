<body>
    <h1>Form Tambahan Data User</h1>
    <a href="{{ url('http://localhost/PWL_2G_30/PWL_POS/public/user') }}">Kembali</a>
    <br><br>
    <form method="post" action="tambah_simpan">
        {{ csrf_field() }}
        {{ method_field('GET') }}

        <label>Username</label>
        <input type="text" name="username" placeholder="Masukkan Username">
        <br>
        <label>Nama</label>
        <input type="text" name="nama" placeholder="Masukkan Nama">
        <br>
        <label>Password</label>
        <input type="password" name="password" placeholder="Masukkan Password">
        <br>
        <label>level ID</label>
        <input type="number" name="level_id" placeholder="Masukkan ID Level">
        <br><br>
        <input type="submit" class="btn btn-success" value="Simpan">
    </form>
</body>