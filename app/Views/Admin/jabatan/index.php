<?= $this->extend('layouts/template') ?>
<?= $this->section('content') ?>
<?php if (session()->getFlashdata('success')) : ?>
    <div class="alert alert-success" role="alert">
        <?= session()->getFlashdata('success'); ?>
    </div>
<?php endif; ?>
<a href="/jabatan/tambah" class="btn btn-primary mb-2"><i class="fas fa-fw fa-plus"></i> Tambah Jabatan</a>
<table class="table">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Jabatan</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $i = 1; ?>
        <?php foreach ($jabatans as $jabatan) : ?>
            <tr>
                <th scope="row"><?= $i++ ?></th>
                <td><?= $jabatan['jabatan'] ?></td>
                <td>
                    <a href="<?= base_url('jabatan/edit/' . $jabatan['id']) ?>" class="btn btn-primary"><i class="fas fa-fw fa-edit"></i></a>
                    <a href="<?= base_url('jabatan/delete/' . $jabatan['id']) ?>" class="btn btn-danger delete-confirm"><i class="fas fa-fw fa-trash"></i></a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<?= $this->endsection() ?>