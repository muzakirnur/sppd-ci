<?= $this->extend('layouts/template') ?>
<?= $this->section('content') ?>
<div class="w-50">
    <form action="<?= base_url('jabatan/edit/' . $jabatan['id']) ?>" method="post">
        <?= csrf_field(); ?>
        <div class="mb-3">
            <label for="jabatan">Nama Jabatan</label>
            <input type="text" name="jabatan" id="jabatan" class="form-control" value="<?= $jabatan['jabatan'] ?>">
        </div>
        <button type="submit" class="btn btn-success">Update</button>
    </form>
</div>
<?= $this->endsection() ?>