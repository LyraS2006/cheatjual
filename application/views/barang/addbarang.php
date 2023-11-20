<!-- <!DOCTYPE Html>
<Html>
<Head>
    <Title>Halaman Tambah</Title>
</Head>
<Body>
    <H3>Halaman Tambah barang</H3>
    <Form Action="" Method="Post">
    <Table>
        <Tr>
            <Td>Nama Barang</Td>
            <Td>:</Td>
            <Td><Input Type="Text"  Name="nama_barang"></Td>
        </Tr>
        <Tr>
            <Td>Harga</Td>
            <Td>:</Td>
            <Td><Input Type="Text" Name="harga"></Td>
        </Tr>
        <Tr>
            <Td>Stok</Td>
            <Td>:</Td>
            <Td><Input Type="Text" Name="stok"></Td>
        </Tr>
        <Tr>
            <Td>ID Supplier</Td>
            <Td>:</Td>
            <Td><Input Type="Text" Name="id_supplier"></Td>
        </Tr>
        <Tr>
            <Td Colspan="3"><Button Type="Submit">Tambah Barang</Button></Td>
        </Tr>
    </Table>
    </Form>
</Body>
</Html> -->
<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Silahkan Tambah
                </div>
                <div class="card-body">
                <Form Action="<?Php Echo Base_url('barang/tambah') ?>" Method="Post">
                        <div class="form-group">
                            <label for="nama_barang">Nama Barang</label>
                            <input type="text" class="form-control" id="nama_barang" name="nama_barang">
                            <small class="form-text text-danger"><?= form_error('nama_barang'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="harga">Harga</label>
                            <input type="text" class="form-control" id="harga" name="harga">
                            <small class="form-text text-danger"><?= form_error('harga'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="stok">Stok Barang</label>
                            <input type="text" class="form-control" id="stok" name="stok">
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
                        <button type="submit" class="btn btn-primary float-right" name="edit">tambah</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>