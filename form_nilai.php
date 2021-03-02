<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Form Nilai</title>
</head>
<body>
    <div class="bg-primary p-5">
    <h1 class="text-center text-white">Nilai Mahasiswa</h1>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-6">
            <form action="form_nilai.php" method="get" class="mt-3">
            
            <div class="form-group">
                    <label for="">Nama</label>
                    <input type="text" name="nama" value="" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Nilai UTS</label>
                    <input type="text" name="nilai_uts" value="" class="form-control">
                </div>

                
                <div class="form-group">
                    <label for="">Nilai UAS</label>
                    <input type="text" name="nilai_uas" value="" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="">NILAI TUGAS</label>
                    <input type="text" name="nilai_tugas" value="" class="form-control">
                </div>
                <input type="submit" value="Simpan" name="proses" class="btn btn-primary btn-sm btn-block">

            </form>
                    <?php
                                        $proses = $_GET['proses'];
                                        $nama = $_GET['nama'];
                                        $nilai_uts = $_GET['nilai_uts'];
                                        $nilai_uas = $_GET['nilai_uas'];
                                        $nilai_tugas = $_GET['nilai_tugas'];
                                    
                    
                    if (isset($_GET['nama']) 
                    AND isset($_GET['nilai_tugas'])
                    AND isset($_GET['nilai_uas'])
                    AND isset($_GET['nilai_uts']))
                    {
                    
                    
                    }
                    else
                    {
                    echo "Maaf, anda harus mengakses halaman ini dari form.html";
                    }
                    ?>

            </div>
            <div class="col-6 mt-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-header bg-primary text-white">
                    Result
                    </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Nama :<?=$nama?></li>
                    <li class="list-group-item">Nilai UTS : <?=$nilai_uts?></li>
                    <li class="list-group-item">Nilai UAS : <?=$nilai_uas?></li>
                    <li class="list-group-item">Nilai Tugas <?=$nilai_tugas?></li>
                </ul>
                </div>
            </div>
        </div>
        
    </div>
</body>
</html>
