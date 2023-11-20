<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    silahkan ubah
                </div>
                <div class="card-body">
                    <form action="<?Php echo base_url('barang/update') ?>" method="post">
                        <input type="hidden" name="id_barang" value="<?= $data_barang['id_barang'] ?>">
                        <div class="form-group">
                            <label for="nama_barang">Nama Barang</label>
                            <input type="text" class="form-control" id="nama_barang" name="nama_barang" value="<?= $data_barang['nama_barang']; ?>">
                            <small class="form-text text-danger"><?= form_error('nama_barang'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="harga">Harga</label>
                            <input type="text" class="form-control" id="harga" name="harga" value="<?= $data_barang['harga']; ?>">
                            <small class="form-text text-danger"><?= form_error('harga'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="stok">Stok Barang</label>
                            <input type="text" class="form-control" id="stok" name="stok" value="<?= $data_barang['stok']; ?>">
                            <small class="form-text text-danger"><?= form_error('stok'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="id_supplier">Nama Supplier</label>
                            <select name="id_supplier" id="id_supplier" class="form-control">
                                <?php foreach ($supplier as $s) : ?>
                                    <?php if ($s['nama_supplier'] == $data_barang['nama_supplier']) : ?>
                                        <option value="<?= $s['id_supplier']; ?>" selected><?= $s['nama_supplier']; ?></option>
                                    <?php else : ?>
                                        <option value="<?= $s['id_supplier']; ?>"><?= $s['nama_supplier']; ?></option>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </select>
                            <small class="form-text text-danger"><?= form_error('id_supplier'); ?></small>
                        </div>
                        <button type="submit" class="btn btn-primary float-right" name="edit">Ganti Data</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>