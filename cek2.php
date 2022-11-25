<?php include "db.php";
$queryUser = "SELECT * FROM tambah";
$execUser = mysqli_query($conn, $queryUser);
$dataUser = mysqli_fetch_all($execUser, MYSQLI_ASSOC);


$queryPesanan = "SELECT * FROM pemesanan";
$execPesanan = mysqli_query($conn, $queryPesanan);
$dataPemesanan = mysqli_fetch_all($execPesanan, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cek Data Pemesanan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style>
        h1 {
            height: 100%;
            width: 100%;
            text-align: center;
            line-height: 100%;

        }
    </style>
</head>

<body>
    <table cellspacing="3" cellpadding="3" class="table-primary">
        <?php if (isset($_POST['tombol'])) {
            @$id = $_POST['nama'];
            foreach ($dataPemesanan as $pemesanan) {
                if ($pemesanan['kode'] == $id) { ?>
                    <tr>
                        <td>
                            <h4>Nama Pemesan</h4>
                        </td>
                        <td>
                            <h5> : <?= $pemesanan['nama_pemesan'] ?></h5>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h4>Nomor Identitas</h4>
                        </td>
                        <td>
                            <h5> : <?= $pemesanan['no_identitas'] ?></h5>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h4>Nomor Telepon</h4>
                        </td>
                        <td>
                            <h5> : <?= $pemesanan['no_tlp'] ?></h5>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h4>Tujuan Wisata</h4>
                        </td>
                        <td>
                            <h5> : <?= $pemesanan['tempat_wisata'] ?></h5>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h4>Tanggal Kunjungan</h4>
                        </td>
                        <td>
                            <h5> : <?= $pemesanan['tanggal_kunjungan'] ?></h5>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h4>Pengunjung Dewasa</h4>
                        </td>
                        <td>
                            <h5> : <?= $pemesanan['pdewasa'] ?></h5>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h4>Pengunjung Anak</h4>
                        </td>
                        <td>
                            <h5> : <?= $pemesanan['panak'] ?></h5>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h4>Total Harga</h4>
                        </td>
                        <td>
                            <h5> : <?= $pemesanan['total_harga'] ?></h5>
                        </td>
                    </tr>
                <?php } ?>
            <?php } ?>
        <?php } ?>

    </table>



</body>

</html>