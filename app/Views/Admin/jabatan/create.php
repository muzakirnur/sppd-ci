<?= $this->extend('layouts/template') ?>
<?= $this->section('content') ?>
<div class="w-50">
    <form action="<?= base_url('jabatan/tambah') ?>" method="post">
        <?= csrf_field(); ?>
        <div class="mb-3">
            <label for="jabatan">Nama Jabatan</label>
            <input type="text" name="jabatan" id="jabatan" class="form-control">
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
    </form>
</div>
<?= $this->endsection() ?>