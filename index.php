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
</head>

<body style="background-color: #222831; color: #EEEEEE;">
    <!--NAVBAR-->
    <nav class="navbar navbar-expand-lg" style="position: sticky; background-color: #393E46;">
        <!-- Brand -->
        <a class="navbar-brand col-sm-7" href="index.php?p=beranda" style="color: #EEEEEE;" title="Home"> <img src="images/calc.png" alt="logo" style="height: 5%; width: 5%; margin: 1% 3% 1% 5%;">A Calc</a>
        <!-- Links -->
        <ul class="nav justify-content-end" style="width:35%">
            <!-- Dropdown -->
            <li class="nav-item">
                <a class="nav-link" href="#kontak" style="color: #EEEEEE;">Kontak Kami</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#tentangKami" style="color: #EEEEEE;">Tentang Kami</a>
            </li>
            <li class="nav-item">
                <button type="button" class="btn" style="border: 3px solid #00ADB5; color: #00ADB5; margin-left: 15px;" data-toggle="modal" data-target="#login">Masuk</button>
            </li>
        </ul>
        <hr>
    </nav>

    <!--LOGIN-->
    <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content" style="background-color: #393E46;">
                <div class="modal-header">
                    <h4>Masuk</h4>
                </div>
                <div class="modal-body">
                    <form action="Logedin/proses/cek_login.php" method="post">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" name="email" placeholder="Masukkan email Anda">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" name="password" placeholder="Masukkan password Anda">
                        </div>
                        <br>
                        <button class="btn" style="color: #EEEEEE; background-color: #00ADB5; width: 100%;" name="submit">Masuk</button>
                    </form>
                    <br>
                    <div class="text-center">
                        Belum punya akun?
                        <a href="index.php?p=register">
                            <span style="color: #00ADB5;">Daftar Sekarang</span>
                        </a>
                    </div>
                </div>
                <div class="modal-footer"></div>
            </div>
        </div>
    </div>

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