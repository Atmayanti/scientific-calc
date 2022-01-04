<?php
$id_session = $_SESSION['idmember'];

$sql = mysqli_query($db, "SELECT * FROM member WHERE idmember = $id_session");
$data = mysqli_fetch_assoc($sql);

$location = "images/profil/";

?>
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
            <td class="p-nama">Nama </td>
            <td class="p-samadengan"> : </td>
            <td class="p-isi"><?= $data['nama'] ?></td>
        </tr>
        <tr class="p-tr">
            <td class="p-nama">Jenis Kelamin </td>
            <td class="p-samadengan"> : </td>
            <td class="p-isi"><?= $data['jeniskelamin'] ?></td>
        </tr>
        <tr class="p-tr">
            <td class="p-nama">Kota Lahir </td>
            <td class="p-samadengan"> : </td>
            <td class="p-isi"><?= $data['tempatlahir'] ?></td>
        </tr>
        <tr class="p-tr">
            <td class="p-nama">Tanggal Lahir </td>
            <td class="p-samadengan"> : </td>
            <td class="p-isi"><?= $data['tanggallahir'] ?></td>
        </tr>
        <tr class="p-tr">
            <td class="p-nama">Alamat </td>
            <td class="p-samadengan"> : </td>
            <td class="p-isi"><?= $data['alamat'] ?></td>
        </tr>
        <tr class="p-tr">
            <td class="p-nama">Email </td>
            <td class="p-samadengan"> : </td>
            <td class="p-isi"><?= $data['email'] ?></td>
        </tr>
        <tr class="p-tr">
            <td class="p-nama">Password </td>
            <td class="p-samadengan"> : </td>
            <td class="p-isi"><?= $data['password'] ?></td>
        </tr>

    </table>
    <a href="pages/editprofil.php" type="button" class="btn tomboledit">Edit Profil</a>
    <span class="clearfix"></span>
</div>