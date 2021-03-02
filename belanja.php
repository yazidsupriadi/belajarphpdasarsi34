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
    <div class="bg-success p-5">
    <h1 class="text-center text-white">Belanja Online</h1>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-6">
            <form action="belanja.php" method="post" class="mt-3">
            
            <div class="form-group">
                    <label for="">Nama Customer</label>
                    <input type="text" name="customer" value="" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Jumlah Beli</label>
                    <input type="text" name="jumlah" value="" class="form-control">
                </div>

                
                <input type="submit" value="Simpan" name="proses" class="btn btn-success btn-sm btn-block">

            </form>
                    <?php
                    
                                        $proses = $_POST['proses'];
                                        $customer = $_POST['customer'];
                                        $jumlah = $_POST['jumlah'];
                                        
                
                    
                                        if (isset($_POST['customer']) 
                                        AND isset($_POST['jumlah']))
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
                    <div class="card-header bg-success text-white">
                    Result
                    </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Nama :<?=$customer?></li>
                    <li class="list-group-item">Jumlah : <?=$jumlah?></li>
                </ul>
                </div>
            </div>
        </div>
        
    </div>
</body>
</html>
