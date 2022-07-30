<?= $this->extend('layouts/template') ?>
<?= $this->section('content') ?>
<form action="<?= base_url('pegawai/tambah') ?>" method="post">
    <?= csrf_field(); ?>
    <div class="row">
        <div class="col-md-6">
            <div class="mb-3">
                <label for="nip">NIP</label>
                <input type="number" name="nip" id="nip" class="form-control">
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <label for="nama">Nama Pegawai</label>
                <input type="text" name="nama" id="nama" class="form-control">
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <label for="pangkat" class="form-label">Pangkat & Golongan</label>
                <select name="pangkat" id="pangkat" class="form-control">
                    <option selected>Pilih Pangkat & Golongan</option>
                    <?php foreach ($pangkat as $p) : ?>
                        <option value="<?= $p['id'] ?>"><?= $p['pangkat'] ?> || <?= $p['golongan'] ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <label for="nama">Jabatan</label>
                <select name="jabatan" id="jabatan" class="form-control">
                    <option selected>Pilih Jabatan</option>
                    <?php foreach ($jabatan as $j) : ?>
                        <option value="<?= $j['id'] ?>"><?= $j['jabatan'] ?> </option>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-success">Simpan</button>
</form>
<?= $this->endsection() ?>