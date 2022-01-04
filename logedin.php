<?php
include 'config/koneksi.php';
session_start();

if (isset($_SESSION['sesi'])) {


    $id_session = $_SESSION['idmember'];

    $sql = mysqli_query($db, "SELECT * FROM member WHERE idmember = $id_session");
    $data = mysqli_fetch_assoc($sql);
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
        <link rel="shortcut icon" href="images/calc.png">
        <link rel="stylesheet" href="style/style-login.css">
        <link rel="stylesheet" href="style/kalkulator.css">
        <link rel="stylesheet" href="style/profile.css">
        <script src="style/JS.js"></script>
    </head>

    <body style="background-color: #222831; color: #EEEEEE;">
        <nav class="navbar navbar-expand-sm" style="position: sticky; background-color: #393E46;">
            <img src="images/calc.png" alt="logo" style="height: 3%; width: 3%; margin: 1% 1% 1% 3%;">
            <div class="col-7" id="nama-user">
                <h4>Hai <?php echo $_SESSION['sesi'] . "<br>"; ?></h4>
            </div>
            <!-- Links -->
            <ul class="navbar-nav">
                <!-- Dropdown -->
                <li class="nav-item">
                    <a class="nav-link" style="color: #EEEEEE;" href="logedin.php?p=beranda">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="color: #EEEEEE;" href="#">Chat</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="color: #EEEEEE;" href="#">Notifikasi</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" style="color: #EEEEEE;" href="#" id="navbardrop" data-toggle="dropdown">
                        Kalkulator
                    </a>
                    <div class="dropdown-menu" style="background-color: #393E46; color: #EEEEEE;">
                        <a class="dropdown-item" style="color: #EEEEEE;" href="logedin.php?p=kalkulator">Kalkulator Scientific</a>
                        <a class="dropdown-item" style="color: #EEEEEE;" href="#">Penukaran Mata Uang</a>
                        <a class="dropdown-item" style="color: #EEEEEE;" href="#">Konversi Unit</a>
                    </div>
                </li>
                <?php
                $pp = "profile.png";
                $dir = "images/profil/";
                if (!empty($data['foto'])) {
                    $pp = $data['foto'];
                }
                ?>
                <li class="nav-item dropdown">
                    <a href="#" id="navbardrop" data-toggle="dropdown" style="color: #EEEEEE;">
                        <img src="<?= $dir . $pp ?>" style="margin-left: 10px; margin-top: 5px; height: 50px;" alt="profil" class="rounded-circle">
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" style="background-color: #393E46;">
                        <a class="dropdown-item" style="color: #EEEEEE;" href="logedin.php?p=profile">Profil</a>
                        <a class="dropdown-item" style="color: #EEEEEE;" href="Logout.php">Keluar</a>
                    </div>
                </li>
            </ul>
            <hr>
        </nav>

        <!--Scan Directory Pages-->
        <section>
            <?php
            $pages_dir = 'pages';
            if (!empty($_GET['p'])) {
                $pages = scandir($pages_dir, 0);
                unset($pages[0], $pages[1]);
                $p = $_GET['p'];
                if (in_array($p . '.php', $pages)) {
                    include($pages_dir . '/' . $p . '.php');
                } else {
                    echo 'Halaman Tidak Ditemukan';
                }
            } else {
                include($pages_dir . '/beranda.php');
            }
            ?>
        </section>


        <!-- Footer -->
        <footer class="page-footer font-small" style="background-color: #393E46;">
            <!-- Footer Links -->
            <div class="container py-4 text-center text-md-left mt-5">
                <!-- Grid row -->
                <div class="row mt-3">
                    <!-- Grid column -->
                    <div class="col-6">
                        <!-- Content -->
                        <h6 class="text-uppercase font-weight-bold">A.Calc</h6>
                        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                        <p>Calculator scientific membantu perhitungan-perhitungan rumit dengan berbagai fitur.<br>
                            Terimakasih telah mengunjungi website kami.
                            Hubungi kami untuk memberikan kritik dan saran melalui media social yang tertera.
                        </p>
                    </div>


                    <!-- Grid column -->
                    <div class="col-3">

                        <!-- Links -->
                        <h6 class="text-uppercase font-weight-bold">Kebijakan</h6>
                        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                        <p>
                            <a href="#" class="kebijakan" style="color: #EEEEEE;">Kebijakan Privasi</a>
                        </p>
                        <p>
                            <a href="#" class="kebijakan" style="color: #EEEEEE;">Syarat dan Ketentuan Umum</a>
                        </p>
                    </div>
                    <!-- Grid column -->
                    <div class="col-3" id="kontak">
                        <!-- Links -->
                        <h6 class="text-uppercase font-weight-bold" id="kontak">Kontak</h6>
                        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                        <p>
                            <i class="fa fa-facebook-square"><a href="#" class="kontak" style="color: #EEEEEE;">&nbsp; &nbsp; &nbsp;A.Calc</a></i>
                        </p>
                        <p>
                            <i class="fa fa-envelope-square"><a href="mailto:me.atmayanti@gmail.com" class="kontak" style="color: #EEEEEE;">&nbsp; &nbsp; &nbsp;ACalc@gmail.com</a></i>
                        </p>
                        <p>
                            <i class="fa fa-instagram"><a href="#" class="kontak" style="color: #EEEEEE;">&nbsp; &nbsp; &nbsp;A.Calc</a></i>
                        </p>
                        <p>
                            <i class="fa fa-twitter-square"><a href="#" class="kontak" style="color: #EEEEEE;">&nbsp; &nbsp; &nbsp;A.Calc</a></i>
                        </p>
                    </div>
                    <!-- Grid column -->

                </div>
                <!-- Grid row -->

            </div>
            <!-- Footer Links -->

            <!-- Copyright -->
            <div class="footer-copyright text-center py-3" style="background-color: #222831;">© 2022 Copyright: Information Technology</div>
            <!-- Copyright -->

        </footer>
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