<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Ubah Admin</h1>
    <form method="POST" action="<?= base_url('admin/administrator/edit_admin/' . $admin['id']) ?>">
        <div class="row">
            <div class="col-4">
                <?= $this->session->flashdata('pesan'); ?>

                <div class="form-group">
                    <label for="">Nama</label>
                    <input value="<?= $admin['nama'] ?>" type="text" name="nama" class="form-control">
                    <?= form_error("nama", "<div class='text-danger text-small'>", "</div>") ?>
                </div>
                <div class="form-group">
                    <label for="password">Kata Sandi</label>
                    <input type="text" class="form-control" id="password" name="password">
                    <div class="text-muted text-small font-weight-lighter">*isi bila ingin diganti</div>
                    <?= form_error('password', "<div class='text-danger text-small'> ", "</div>"); ?>
                </div>
                <div class="form-group">
                    <label for="">Nomor Telepon</label>
                    <input value="<?= $admin['no_tlp'] ?>" type="text" name="no_tlp" class="form-control">
                    <?= form_error("no_tlp", "<div class='text-danger text-small'>", "</div>") ?>
                </div>
                <div class="form-group">
                    <label for="">Kota</label>
                    <select class="form-control" name="kota" id="kota">
                        <?php foreach ($provinsi as $index => $p) : ?>
                            <optgroup label="<?= $p['provinsi'] ?>">
                                <?php foreach ($kota[$index] as $k) : ?>
                                    <option <?= $admin['id_kota'] == $k['id_kota'] ? 'selected' : '' ?> value="<?= $k['id_kota'] ?>"><?= $k['kota'] ?> (<?= $k['tipe'] ?>)</option>
                                <?php endforeach; ?>
                            </optgroup>
                        <?php endforeach; ?>
                    </select>
                    <?= form_error('kota', '<div class="text-danger text-small ml-2">', '</div>') ?>
                </div>
                <div class="form-group">
                    <label for="">Kode Pos</label>
                    <input value="<?= $admin['kode_pos'] ?>" type="text" name="kode_pos" class="form-control">
                    <?= form_error("kode_pos", "<div class='text-danger text-small'>", "</div>") ?>
                </div>
                <div class="form-group">
                    <label for="">Alamat</label>
                    <input value="<?= $admin['alamat'] ?>" type="text" name="alamat" class="form-control">
                    <?= form_error("alamat", "<div class='text-danger text-small'>", "</div>") ?>
                </div>

                <button type="submit" class="btn btn-success">Ubah</button>
            </div>
    </form>
</div>
</div>
<!-- /.container-fluid -->