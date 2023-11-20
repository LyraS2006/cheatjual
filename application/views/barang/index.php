<div class="container mt-3">
    <br>
    <form class="example" action="" method="get">
        <div>
            <input type="search" name="nama_barang" placeholder="Search.." value="<?=$search?>" required maxlength="32" />
        </div>
        <div>
            <input type="submit" class="button button-primary" value="Cari">
        </div>
    </form>

    <table class="table table-hover table table-bordered table-striped">
        <thead class="fw-bold text-white bg-warning">
            <tr align="center">
                <th scope="col">Id Barang</th>
                <th scope="col">Nama Barang</th>
                <th scope="col">Harga</th>
                <!-- <th scope="col">Stok</th>
                <th scope="col">Id Supplier</th> -->
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach ($barang as $brg) : ?>
                <tr>
                    <td align="center"><?= $no++ ?></td>
                    <td><?= $brg['nama_barang'] ?></td>
                    <td>Rp. <?= number_format($brg['harga'], 3, '.', '.');  ?></td>
                    <!-- <td><?= $brg['stok'] ?></td>
                    <td><?= $brg['id_supplier'] ?></td>       -->
                    <td align="center">
                        <a href="<?= base_url(); ?>barang/ganti/<?= $brg['id_barang']; ?>"><button type="button" class="btn btn-outline-secondary">Edit</button> </a>
                        <a href="<?= base_url(); ?>barang/hapus/<?= $brg['id_barang']; ?>" onclick="return confirm('Yakin?');"><button type="button" class="btn btn-outline-danger">Hapus</button></a>
                        <a href="<?= base_url(); ?>barang/detail/<?= $brg['id_barang']; ?>"><button type="button" class="btn btn-outline-warning">Detail</button></a>
                    </td>

                </tr>
            <?php endforeach; ?>

        </tbody>
    </table>

</div>