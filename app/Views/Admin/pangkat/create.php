<?= $this->extend('layouts/template') ?>
<?= $this->section('content') ?>
<div class="w-50">
    <form action="<?= base_url('pangkat/tambah') ?>" method="post">
        <?= csrf_field(); ?>
        <div class="mb-3">
            <label for="pangakat">Nama Pangkat</label>
            <input type="text" name="pangkat" id="pangkat" class="form-control">
        </div>
        <div class="mb-3">
            <label for="golongan">Nama Golongan</label>
            <input type="text" name="golongan" id="golongan" class="form-control">
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
    </form>
</div>
<?= $this->endsection() ?>