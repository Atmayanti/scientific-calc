        <!-- REGISTER PAGE -->
        <div class="container-fluid" style="background-image: url('images/reg-pict.jpg'); background-size: cover; padding-top:40px; padding-bottom:40px ">
            <div class="container d-flex">
                <div class="col-6" style="margin-left: 50%;">
                    <h2>Registrasi Pengguna</h2>
                    <p style="border-bottom: 4px solid #00ADB5; margin-right: 1%;"></p>
                    <form action="Logedin/proses/member-create-proses.php" method="post" class="form" enctype="multipart/form-data">
                        <div class="input-field">
                            <label for="foto">Upload Foto Profil</label>
                            <input class="form-control" type="file" name="foto" style="padding: 3px;">
                        </div>
                        <div class="input-field">
                            <label for="nama">Nama</label>
                            <input class="form-control" type="text" placeholder="Masukkan Nama Lengkap" name="nama" required>
                        </div>
                        <div class="input-field">
                            <label for="jk">Jenis Kelamin</label>
                            <select class="form-control" name="jk" required>
                                <option class="form-control" value="Laki-Laki" selected>Laki-Laki</option>
                                <option class="form-control" value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                        <div class="input-field">
                            <label for="tempatlahir">Tempat Lahir</label>
                            <input class="form-control" type="text" placeholder="Masukkan Tempat Lahir" name="tempatlahir">
                        </div>
                        <div class="input-field">
                            <label for="tanggallahir">Tanggal Lahir</label>
                            <input class="form-control" type="date" placeholder="Masukkan Tanggal Lahir" name="tanggallahir">
                        </div>
                        <div class="input-field">
                            <label for="alamat">Alamat</label>
                            <textarea class="form-control" type="number" placeholder="Masukkan Alamat" name="alamat"></textarea>
                        </div>
                        <div class="input-field">
                            <label for="email">Email</label>
                            <input class="form-control" type="email" placeholder="Masukkan Email" name="email" required>
                        </div>
                        <div class="input-field">
                            <label for="password">Password</label>
                            <input class="form-control" type="password" placeholder="Masukkan Password" name="password" required>
                        </div>
                        <br>
                        <input type="submit" name="daftar" value="Daftar" class="btn" style="color: #EEEEEE; background-color: #00ADB5; width: 100%;">
                    </form>
                </div>
            </div>
        </div>

        <br>
        <br>
        <!-- REGISTER END -->