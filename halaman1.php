<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2 p-3 border-end ">
                <?php include 'menu.php'; ?>
            </div>

            <div class="col-md-10 p-4">
                <h1 class="text-center">Form Pendaftaran Siswa SMA XX</h1>
                <hr>
                <form action="halaman2.php" method="POST">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-6">
                                <h4>Informasi Data Diri Siswa</h4>
                                <hr>  
                                <div class="row">
                                    <div class="col-md-9">
                                        <div class="form-group">
                                            <label for="">Nama Lengkap: </label>
                                            <input type="text" class="form-control" name="nama">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="">Nama Panggilan: </label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Tanggal Lahir: </label>
                                            <input type="date" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="">Jenis Kelamin:</label>
                                        <select name="jenis_kelamin" id="" class="form-control">
                                            <option value="" selected disabled>-=Pilih Jenis Kelamin=-</option>
                                            <option value="Laki-Laki">Laki-Laki</option>
                                            <option value="Perempuan">Perempuan</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="">Alamat Lengkap: </label>
                                    <textarea name="alamat" id="" class="form-control"></textarea>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">E-Mail:</label>
                                            <input type="email" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Nomor Handphone:</label>
                                            <input type="tel" class="form-control" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="">Tinggi Badan:</label>
                                            <input type="number" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="">Berat Badan:</label>
                                            <input type="number" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="">Golongan Darah:</label>
                                            <select name="" id="" class="form-control">
                                                <option value="" selected disabled>-=Pilih Golongan=-</option>
                                                <option value="">A</option>
                                                <option value="">B</option>
                                                <option value="">O</option>
                                                <option value="">AB</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <h4>Informasi Ayah</h4>
                                <hr>
                                <div class="row">
                                    <div class="col-md-9">
                                        <div class="form-group">
                                            <label for="">Nama Lengkap:</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="status">Masih Hidup:</label>
                                            <select name="" id="" class="form-control">
                                                <option value="" selected disabled>-=Status=-</option>
                                                <option value="">Masih Hidup</option>
                                                <option value="">Wafat</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="">Alamat Lengkap:</label>
                                            <textarea name="" id="" class="form-control"></textarea>
                                        </div>
                                    </div> 
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="status">Pekerjaan:</label>
                                            <select name="" id="" class="form-control">
                                                <option value="" selected disabled>-=Pilih Pekerjaan=-</option>
                                                <option value="">ASN</option>
                                                <option value="">Wiraswasta</option>
                                                <option value="">Petani</option>
                                                <option value="">Buruh</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Penghasilan (Rp.):</label>
                                            <input type="Number" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <h4>Informasi Ibu</h4>
                                <hr>
                                <div class="row">
                                    <div class="col-md-9">
                                        <div class="form-group">
                                            <label for="">Nama Lengkap:</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="status">Masih Hidup:</label>
                                            <select name="" id="" class="form-control">
                                                <option value="" selected disabled>-=Status=-</option>
                                                <option value="">Masih Hidup</option>
                                                <option value="">Wafat</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="">Alamat Lengkap:</label>
                                            <textarea name="" id="" class="form-control"></textarea>
                                        </div>
                                    </div> 
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="status">Pekerjaan:</label>
                                            <select name="" id="" class="form-control">
                                                <option value="" selected disabled>-=Pilih Pekerjaan=-</option>
                                                <option value="">ASN</option>
                                                <option value="">Wiraswasta</option>
                                                <option value="">Petani</option>
                                                <option value="">Buruh</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Penghasilan (Rp.):</label>
                                            <input type="Number" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h4>Informasi Pendidikan Sebelumnya</h4>
                                <hr> 
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">NISN: </label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">NSBN: </label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="">Nama Sekolah: </label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="">Alamat Lengkap Sekolah: </label>
                                    <textarea name="" id="" class="form-control"></textarea>
                                </div>
                                <hr>
                                <h4>Informasi Wali</h4>
                                <hr>
                                <div class="row">
                                    <div class="col-md-9">
                                        <div class="form-group">
                                            <label for="">Nama Lengkap:</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="status">Hubungan:</label>
                                            <select name="" id="" class="form-control">
                                                <option value="" selected disabled>-=Status=-</option>
                                                <option value="">Keluarga</option>
                                                <option value="">Kolega</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="">Alamat Lengkap:</label>
                                            <textarea name="" id="" class="form-control"></textarea>
                                        </div>
                                    </div> 
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="status">Pekerjaan:</label>
                                            <select name="" id="" class="form-control">
                                                <option value="" selected disabled>-=Pilih Pekerjaan=-</option>
                                                <option value="">ASN</option>
                                                <option value="">Wiraswasta</option>
                                                <option value="">Petani</option>
                                                <option value="">Buruh</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <h4>Pernyataan</h4>
                                <hr>
                                <p style="text-align: justify;">Dengan Ini saya menyatakan bahwasannya informasi yang saya berikan bersifat <b>VALID</b> dan <b>BENAR</b> keabsahanya, baik dimata hukum maupun di ruang sosial. jika di kemudian hari di dapatkan bahwasannya data yang saya berikan tidak benar, maka saya bersedia akan konsekuensi yang akan di berikan</p>
                                <hr>
                                <div class="d-md-flex justify-content-md-end">
                                    <button class="btn btn-primary ">Daftar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>