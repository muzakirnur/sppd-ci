<?= $this->extend('layouts/template') ?>
<?= $this->section('content') ?>
<?php if (session()->getFlashdata('success')) : ?>
    <div class="alert alert-success" role="alert">
        <?= session()->getFlashdata('success'); ?>
    </div>
<?php endif; ?>
<a href="/alat/tambah" class="btn btn-primary mb-2"><i class="fas fa-fw fa-plus"></i> Tambah Alat</a>
<table class="table">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Alat</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $i = 1; ?>
        <?php foreach ($alats as $alat) : ?>
            <tr>
                <th scope="row"><?= $i++ ?></th>
                <td><?= $alat['nama'] ?></td>
                <td>
                    <a href="<?= base_url('alat/edit/' . $alat['id']) ?>" class="btn btn-primary"><i class="fas fa-fw fa-edit"></i></a>
                    <a href="<?= base_url('alat/delete/' . $alat['id']) ?>" class="btn btn-danger delete-confirm"><i class="fas fa-fw fa-trash"></i></a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<?= $this->endsection() ?>