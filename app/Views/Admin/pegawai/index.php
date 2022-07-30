<?= $this->extend('layouts/template') ?>
<?= $this->section('content') ?>
<?php if (session()->getFlashdata('success')) : ?>
    <div class="alert alert-success" role="alert">
        <?= session()->getFlashdata('success'); ?>
    </div>
<?php endif; ?>
<a href="/pegawai/tambah" class="btn btn-primary mb-2"><i class="fas fa-fw fa-plus"></i> Tambah Data Pegawai</a>
<table class="table">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">NIP</th>
            <th scope="col">Nama Pegawai</th>
            <th scope="col">Jabatan</th>
            <th scope="col">Pangkat</th>
            <th scope="col">Golongan</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $i = 1; ?>
        <?php foreach ($pegawai as $p) : ?>
            <tr>
                <th scope="row"><?= $i++ ?></th>
                <td><?= $p['nip'] ?></td>
                <td><?= $p['nama'] ?></td>
                <td><?= $p['jabatan'] ?></td>
                <td><?= $p['pangkat'] ?></td>
                <td><?= $p['golongan'] ?></td>
                <td>
                    <a href="<?= base_url('pegawai/edit/' . $p['id']) ?>" class="btn btn-primary"><i class="fas fa-fw fa-edit"></i></a>
                    <a href="<?= base_url('pegawai/delete/' . $p['id']) ?>" class="btn btn-danger delete-confirm"><i class="fas fa-fw fa-trash"></i></a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<?= $this->endsection() ?>