<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <?php
        $nama = $_POST['nama'];
    ?>

</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2 p-3 border-end ">
                <?php include 'menu.php'; ?>
            </div>
            <div class="col-md-10 p-4">
                <table class="table table-striped table-hover table-bordered">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>Alamat</th>
                        <th>Aksi</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Afilza</td>
                        <td>Laki-laki</td>
                        <td>Taman jernih stt</td>
                        <td>hapus</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>budi</td>
                        <td>Laki-laki</td>
                        <td>SPN</td>
                        <td>hapus</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Siti</td>
                        <td>Perempuan</td>
                        <td>SPN</td>
                        <td>hapus</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td><?php echo($nama) ?></td>
                    </tr>
                </table>
            </div>
        </div>  
    </div>
</body>
</html>