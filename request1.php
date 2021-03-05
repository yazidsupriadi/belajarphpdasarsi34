<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Penilaian</title>
</head>
<body>
    <h1>Form Penilaian</h1>
    <!--
    Request :
    get
    post-->
    <form action="request1.php" method="get">

        <label for="">Nama</label>
        <input type="text" name="nama" value="">

        <select name="mata_kuliah" id="">
            <option value="">Nama Mata kuliah</option>
            <option value="Pemrograman Web">Pemrograman web</option>
            <option value="Basis Data">Basis Data</option>
        </select>
        
        <label for="">Nilai Tugas</label>
        <input type="text" name="nilai_tugas" value="">

        <label for="">Nilai UTS</label>
        <input type="text" name="nilai_uts" value="">

        <label for="">Nilai UAS</label>
        <input type="text" name="nilai_uas" value=""> 
        <input type="submit" name="kirim" value="kirim">
    </form>

    <?php
        $nama = $_GET['nama'];
        $nilai_tugas = $_GET['nilai_tugas'];
        $mata_kuliah = $_GET['mata_kuliah'];
        $nilai_uts = $_GET['nilai_uts'];
        $nilai_uas = $_GET['nilai_uas'];
        
        $kirim = $_GET['kirim'];

        $total_nilai = ($nilai_tugas + $nilai_uas + $nilai_uts)/3;

        echo $nama;
        
        echo "<br>";
        echo $mata_kuliah;
        echo "<br>";
        echo $nilai_tugas;
        
        echo "<br>";
        echo $nilai_uts;
        echo "<br>";
        echo $nilai_uas;
        echo "<br>";
    ?>

    <p>Nama Mahasiswa = <?= $nama?></p>
    <p>Nama Mata Kuliah : <?= $mata_kuliah?></p>
    <p>Nilai Tugas : <?= $nilai_tugas?></p>
    <p>Nilai UTS : <?= $nilai_uts?></p>
    <p>Nilai UAS : <?= $nilai_uas?></p>
    <p>Total Nilai : <?= $total_nilai?></p>
</body>
</html>