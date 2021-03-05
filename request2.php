<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Shop</title>
</head>
<body>
    <h1>Online shop</h1>

    <form action="request2.php" method="post">
    
    <label for="">Customer</label>
    <input type="text" name="customer" value="">
    <br>
    <label for="">Nama Barang</label>
    <select name="nama_barang" id="">
        <option value="">Pilih barang</option>
        <option value="Kulkas">Kulkas</option>
        <option value="TV">TV</option>
    </select>
    <br>
    <label for="">Jumlah beli</label>
    <input type="text" name="jumlah_beli" value="">

    <input type="submit" name="kirim" value="kirim">
    </form>

    <?php
        $customer = $_POST['customer'];
        $nama_barang = $_POST['nama_barang'];
        $jumlah_beli = $_POST['jumlah_beli'];
    ?>
    <p>Customer <?= $customer?> </p>
    <p>Nama Barang : <?= $nama_barang?> </p>
    <p>jumlah beli : <?= $jumlah_beli?></p>
</body>
</html>