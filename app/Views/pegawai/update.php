<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pegawai</title>

    <style>
        body {
            font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
        }

        #container {
            width: 80%;
            margin: 0 auto;
        }

        input[type=text],
        select {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            height: 40px;
        }

        input[type=submit] {
            width: 100%;
            background-color: #DD4814;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type=submit]:hover {
            background-color: #bd3b0d;
        }

    </style>

</head>

<body>

    <div id="container">

        <h1>Update Pegawai</h1>

        <?= form_open('pegawai/create') ?>
            <label for="name">Nama Lengkap</label>
            <input type="text" id="nama" name="nama" placeholder="Isikan Nama Pegawai" autocomplete="off" value="<?= set_value('nama', $pegawai->nama) ?>">

            <label for="nip">NIP</label>
            <input type="text" id="nip" name="nip" placeholder="Isikan NIP Pegawai" autocomplete="off" value="<?= set_value('nip', $pegawai->nip) ?>">

            <label for="alamat">Alamat</label>
            <input type="text" id="alamat" name="alamat" placeholder="Isikan Alamat Pegawai" autocomplete="off" value="<?= set_value('alamat', $pegawai->alamat) ?>">

            <label for="telepon">Telepon</label>
            <input type="text" id="telepon" name="telepon" placeholder="Isikan No Telp Pegawai" autocomplete="off" value="<?= set_value('telepon', $pegawai->telepon) ?>">

            <input type="submit" value="Submit">
        <?= form_close() ?>


        <a href="<?= site_url('pegawai/index') ?>">Cancel</a>


    </div>

</body>

</html>