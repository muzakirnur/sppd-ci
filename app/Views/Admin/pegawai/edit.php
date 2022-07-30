<?= $this->extend('layouts/template') ?>
<?= $this->section('content') ?>
<form action="<?= base_url('pegawai/edit/' . $pegawai['id']) ?>" method="post">
    <?= csrf_field(); ?>
    <div class="row">
        <div class="col-md-6">
            <div class="mb-3">
                <label for="nip">NIP</label>
                <input type="number" name="nip" id="nip" class="form-control" value="<?= $pegawai['nip'] ?>">
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <label for="nama">Nama Pegawai</label>
                <input type="text" name="nama" id="nama" class="form-control" value="<?= $pegawai['nama'] ?>">
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <label for="pangkat" class="form-label">Pangkat & Golongan</label>
                <select name="pangkat" id="pangkat" class="form-control">
                    <option selected value="<?= $pegawai['pangkat_id'] ?>"><?= $pegawai['pangkat'] ?> || <?= $pegawai['golongan'] ?></option>
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
                    <option selected value="<?= $pegawai['jabatan_id'] ?>"><?= $pegawai['jabatan'] ?></option>
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