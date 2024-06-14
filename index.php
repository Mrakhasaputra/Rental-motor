<style>
        body{
            display:flex;
            justify-content:center;
            flex-direction:column;
        }
</style>
<style>
    body {
        display: flex;
        justify-content: center;
        flex-direction: column;
        font-family: Arial, sans-serif;
        background-color: #f0f0f0;
        margin: 0;
        padding: 0;
    }
    form {
        background: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0,0,0,0.1);
        width: 300px;
        margin: 20px auto;
    }
    label {
        display: block;
        margin-bottom: 6px;
        font-weight: bold;
    }
    input[type="text"], select {
        width: 100%;
        padding: 8px;
        margin-bottom: 12px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }
    input[type="submit"] {
        background-color: #4CAF50;
        color: white;
        padding: 10px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        width: 100%;
    }
    input[type="submit"]:hover {
        background-color: #45a049;
    }
    .result {
        background: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0,0,0,0.1);
        width: 300px;
        margin: 20px auto;
        text-align: center;
    }
</style>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rental Motor</title>
</head>
<body>
    <center>
        <form method="post" action="">
            <label for="nama">Nama Pelanggan : </label>
            <input type="text" name="nama" required>

            <label for="waktu">Lama Waktu Rental (Per Hari) :</label>
            <input type="text" name="waktu" required>

            <label for="jenis">Jenis Motor :</label>
            <select name="jenis">
                <option value="Nmax">Nmax</option>
                <option value="Aerox">Aerox</option>
                <option value="Zx25r">Zx25R</option>
                <option value="Vario">Vario</option>
            </select>
<br>
            <input type="submit" name="kirim">
        </form>
        </center>
</body>
</html>



<?php

include 'ProsesRentalMotor.php';

$proses = new Rental();
$proses->setHarga(110000, 100000, 150000, 90000);

if (isset($_POST['kirim'])) {
    $proses->Nama = $_POST['nama'];
    $proses->Waktu = $_POST['waktu'];
    $proses->Jenis = $_POST['jenis'];

    $proses->CetakRental();
}
?>