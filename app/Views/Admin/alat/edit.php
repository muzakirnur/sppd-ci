<?= $this->extend('layouts/template') ?>
<?= $this->section('content') ?>
<div class="w-50">
    <form action="<?= base_url('alat/edit/' . $alat['id']) ?>" method="post">
        <?= csrf_field(); ?>
        <div class="mb-3">
            <label for="alat">Nama Alat Angkut</label>
            <input type="text" name="alat" id="alat" class="form-control" value="<?= $alat['nama'] ?>">
        </div>
        <button type="submit" class="btn btn-success">Update</button>
    </form>
</div>
<?= $this->endsection() ?>