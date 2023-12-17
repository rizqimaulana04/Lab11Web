<div class="container">
    <?php require('header.php'); ?>
    <h2>Data Mahasiswa</h2>
    <a class="tambah" href="form_input.php">Tambah</a>
    <div class="main">
        <table>
        <tr>
            <th>No</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Aksi</th>
        </tr>
        <?php if($result): ?>
        <?php while($row = mysqli_fetch_array($result)): ?>
        <tr>
            <td><?= $row['id'];?></td>
            <td><?= $row['nim'];?></td>
            <td><?= $row['nama'];?></td>
            <td><?= $row['alamat'];?></td>
            <td>
                <a href="ubah.php?id=<?= $row['id'];?>">Ubah</a>
                <a href="hapus.php?id=<?= $row['id'];?>">Hapus</a> 
            </td>
        </tr>
        <?php endwhile; else: ?>
        <tr>
            <td colspan="7">Belum ada data</td>
        </tr>
        <?php endif; ?>
        </table>
    </div>
    <br>
    <br>

    <?php require('mobil.php'); ?>

    <br>
    <br>
    <?php require('footer.php'); ?>
</div>

