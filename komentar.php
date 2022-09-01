<?php
include('koneksi.php');
include('header.php');
?>

<div class="container p-5">
    <div class="page-header">
        <h3>Daftar Komentar</h3>
    </div>
    <br /><br>
    <a type="button" class="btn btn-warning" href="cetak.php"><i class="bi bi-printer"></i></a>
    <br /><br>
    <table class="table bg-white">
        <tr class="text-start">
            <th class="text-center" width="1%">No</th>
            <th>Name</th>
            <th>Email</th>
            <th>Subject</th>
            <th>Message</th>
            <th class="text-center" width="20%">Option</th>
        </tr>
        <?php
        $no = 1;
        $sql = $koneksi->query("select * from komentar");
        while ($data = $sql->fetch_assoc()) {

        ?>
            <tr>
                <td class="text-center"><?= $no; ?></td>
                <td><?= $data['name'] ?></td>
                <td><?= $data['email'] ?></td>
                <td><?= $data['subject'] ?></td>
                <td><?= $data['message'] ?></td>
                <td class="text-center">
                    <a class="btn btn-warning btn-sm" href="balas.php?id=<?= $data['name'] ?>"><i class="bi bi-reply-all"></i></a>
                    <a class="btn btn-danger btn-sm" href="hapus.php?name=<?= $data['name'] ?>" onclick="return confirm('apakah anda yakin ingin menghapus data?')"><i class="bi bi-trash"></i></a>
                </td>
            </tr>
            <?php $no++;  ?>
        <?php  } ?>
    </table>
</div>