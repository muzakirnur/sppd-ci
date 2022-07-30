<?= $this->extend('layouts/template') ?>
<?= $this->section('content') ?>
<div class="w-50">
    <form action="<?= base_url('pangkat/edit/' . $pangkat['id']) ?>" method="post">
        <?= csrf_field(); ?>
        <div class="mb-3">
            <label for="pangakat">Nama Pangkat</label>
            <input type="text" name="pangkat" id="pangkat" class="form-control" value="<?= $pangkat['pangkat'] ?>">
        </div>
        <div class="mb-3">
            <label for="golongan">Nama Golongan</label>
            <input type="text" name="golongan" id="golongan" class="form-control" value="<?= $pangkat['golongan'] ?>">
        </div>
        <button type="submit" class="btn btn-success">Update</button>
    </form>
</div>
<?= $this->endsection() ?>