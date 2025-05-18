@extends('layouts.template')

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Halo, apakabar!!!</h3>
        <div class="card=tools"></div>
    </div>
    <div class="card-body">
        Selamat datang semua, ini adalah halaman utama dari aplikasi ini.
    </div>
</div>
@endsection
<!-- <!DOCTYPE html>
<html>
<head>
    <title>Form Wilayah Indonesia</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>

    <h2>Pilih Provinsi dan Kota</h2>

    <form action="#" method="POST">
        @csrf
        <label for="provinsi">Provinsi:</label>
        <select name="provinsi" id="provinsi">
            <option value="">-- Pilih Provinsi --</option>
        </select>

        <br><br>

        <label for="kota">Kota/Kabupaten:</label>
        <select name="kota" id="kota">
            <option value="">-- Pilih Kota/Kabupaten --</option>
        </select>

        <br><br>

        <button type="submit">Submit</button>
    </form>

    <script>
        $(document).ready(function() {
            // Ambil data provinsi
            $.get('https://www.emsifa.com/api-wilayah-indonesia/api/provinces.json', function(data) {
                $.each(data, function(i, prov) {
                    $('#provinsi').append($('<option>', {
                        value: prov.id,
                        text : prov.name
                    }));
                });
            });

            // Ketika provinsi berubah
            $('#provinsi').on('change', function() {
                var provId = $(this).val();
                $('#kota').empty().append('<option value="">-- Pilih Kota/Kabupaten --</option>');

                if (provId) {
                    $.get(`https://www.emsifa.com/api-wilayah-indonesia/api/regencies/${provId}.json`, function(data) {
                        $.each(data, function(i, kota) {
                            $('#kota').append($('<option>', {
                                value: kota.id,
                                text : kota.name
                            }));
                        });
                    });
                }
            });
        });
    </script>

</body>
</html>
