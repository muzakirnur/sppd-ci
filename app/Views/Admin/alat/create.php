<?= $this->extend('layouts/template') ?>
<?= $this->section('content') ?>
<div class="w-50">
    <form action="<?= base_url('alat/tambah') ?>" method="post">
        <?= csrf_field(); ?>
        <div class="mb-3">
            <label for="nama">Nama Alat Angkut</label>
            <input type="text" name="nama" id="nama" class="form-control">
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
    </form>
</div>
<?= $this->endsection() ?>