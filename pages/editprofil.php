<?php
include '../config/koneksi.php';
session_start();

$id_session = $_SESSION['idmember'];

$sql = mysqli_query($db, "SELECT * FROM member WHERE idmember = $id_session");
$data = mysqli_fetch_assoc($sql);

$location = "../images/profil/";

if (isset($_SESSION['sesi'])) {
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <title>A.Calc</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="shortcut icon" href="../images/calc.png">
        <link rel="stylesheet" href="../style/profile.css">
    </head>

    <body style="background-color: #222831; color: #EEEEEE;">
        <nav class="navbar" style="background-color: #393E46;">
            <ul class="navbar-nav">
                <a class="navbar-brand kembali" href="../logein.php?p=profile">&#8592; Kembali</a>
            </ul>
        </nav>

        <!-- form edit -->
        <form action="../Logedin/proses/proses-editprofil.php" method="POST" enctype="multipart/form-data">
            <div class="container konatas">
                <?php
                $pp = "profile.png";
                if (!empty($data['foto'])) {
                    $pp = $data['foto'];
                }
                ?>
                <img id="potopropil" src="<?= $location . $pp ?>" alt="Photo profile" class="rounded-circle mx-auto d-block">
                <table class="profiletable">
                    <tr class="p-tr">
                        <td class="p-nama">Foto Profil </td>
                        <td class="p-samadengan"> : </td>
                        <td class="p-isi"><input class="potopropil" type="file" name="foto" style="padding: 3px;"></td>
                    </tr>
                    <tr class="p-tr">
                        <td class="p-nama">Nama </td>
                        <td class="p-samadengan"> : </td>
                        <td class="p-isi"><input type="text" name="nama" class="p-editinput" value="<?= $data['nama'] ?>" required></td>
                    </tr>
                    <tr class="p-tr">
                        <td class="p-nama">Jenis Kelamin </td>
                        <td class="p-samadengan"> : </td>
                        <td class="p-isi">
                            <?php
                            if ($data['jeniskelamin'] == "Laki-Laki") {
                            ?>
                                <select class="p-editinput" name="jk" required>
                                    <option value="Laki-Laki" selected>Laki-Laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            <?php
                            } else {
                            ?>
                                <select class="p-editinput" name="jk" required>
                                    <option value="Laki-Laki">Laki-Laki</option>
                                    <option value="Perempuan" selected>Perempuan</option>
                                </select>
                            <?php
                            }
                            ?>
                        </td>
                    </tr>
                    <tr class="p-tr">
                        <td class="p-nama">Kota Lahir </td>
                        <td class="p-samadengan"> : </td>
                        <td class="p-isi"><input type="text" name="tempatlahir" class="p-editinput" value="<?= $data['tempatlahir'] ?>"></td>
                    </tr>
                    <tr class="p-tr">
                        <td class="p-nama">Tanggal Lahir </td>
                        <td class="p-samadengan"> : </td>
                        <td class="p-isi"><input type="date" name="tanggallahir" class="p-editinput" value="<?= $data['tanggallahir'] ?>"></td>
                    </tr>
                    <tr class="p-tr">
                        <td class="p-nama">Alamat </td>
                        <td class="p-samadengan"> : </td>
                        <td class="p-isi"><textarea name="alamat" name="alamat" class="p-editinput"><?= $data['alamat'] ?></textarea></td>
                    </tr>
                    <tr class="p-tr">
                        <td class="p-nama">Email </td>
                        <td class="p-samadengan"> : </td>
                        <td class="p-isi"><input type="email" name="email" class="p-editinput" value="<?= $data['email'] ?>"></td>
                    </tr>
                    <tr class="p-tr">
                        <td class="p-nama">Password </td>
                        <td class="p-samadengan"> : </td>
                        <td class="p-isi"><input type="text" name="password" class="p-editinput" value="<?= $data['password'] ?>"></td>
                    </tr>

                </table>
                <input type="submit" name="edit" value="EDIT" type="button" class="btn btn-success float-right"></input>
                <span class="clearfix"></span>
            </div>
        </form>

        <div class="footer-copyright text-center py-3 mt-5" style="background-color: #171c22; ">© 2021 Copyright: Kelompok Ardha Maya Rafif</div>
        <!-- Footer -->
    </body>

    </html>
<?php
} else {
    echo "<script>
		alert('Anda Harus Login Dahulu!');
	</script>";
    header('location:index.php');
}
?>