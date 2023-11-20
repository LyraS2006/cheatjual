<div class="container mt-3">
    <br>
    <table class="table table-hover table table-bordered table-striped">
        <thead class="fw-bold text-white bg-warning" >
            <tr align="center">
                <th scope="col">Id Barang</th>
                <th scope="col">Nama Barang</th>
                <th scope="col">Harga</th>
                <th scope="col">Stok</th>
                <th scope="col">Id Supplier</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
                <tr>
                    <td align="center"><?= $row['id_barang'] ?></td>
                    <td><?= $row['nama_barang'] ?></td>
                    <td>Rp. <?=number_format($row['harga'],3,'.','.');  ?></td>
                    <td><?= $row['stok'] ?></td>
                    <td><?= $row['id_supplier'] ?></td>      
                    <td align="center">
                    <a href="<?= base_url(); ?>barang/index/"><button type="button" class="btn btn-outline-warning">Back</button></a>
                </td>
                    
                </tr>

        </tbody>
    </table>

</div>