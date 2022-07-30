<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Jabatan;
use App\Models\Pangkat;
use App\Models\Pegawai;

class PegawaiController extends BaseController
{
    protected $pegawai, $jabatan, $pangkat;
    public function __construct()
    {
        $this->pegawai = new Pegawai();
        $this->jabatan = new Jabatan();
        $this->pangkat = new Pangkat();
    }
    public function index()
    {
        $data = [
            'title' => 'Data Pegawai',
            'pegawai' => $this->pegawai->getAllData()
        ];
        return view('admin/pegawai/index', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Tambah Data Pegawai',
            'jabatan' => $this->jabatan->findAll(),
            'pangkat' => $this->pangkat->findAll(),
        ];
        return view('admin/pegawai/create', $data);
    }

    public function store()
    {
        $this->pegawai->save([
            'nip' => $this->request->getVar('nip'),
            'nama' => $this->request->getVar('nama'),
            'jabatan_id' => $this->request->getVar('jabatan'),
            'pangkat_id' => $this->request->getVar('pangkat'),
        ]);
        return redirect()->to('/pegawai')->with('success', 'Data Pegawai Berhasil Ditambahkan');
    }

    public function edit($id)
    {
        $data = [
            'title' => 'Edit Data Pegawai',
            'pegawai' => $this->pegawai->getById($id),
            'jabatan' => $this->jabatan->findAll(),
            'pangkat' => $this->pangkat->findAll(),
        ];
        $data['pegawai'] = $data['pegawai']['0'];
        return view('admin/pegawai/edit', $data);
    }

    public function update($id)
    {
        $this->pegawai->update($id, [
            'nip' => $this->request->getVar('nip'),
            'nama' => $this->request->getVar('nama'),
            'jabatan_id' => $this->request->getVar('jabatan'),
            'pangkat_id' => $this->request->getVar('pangkat'),
        ]);
        return redirect()->to('/pegawai')->with('success', 'Data Berhasil Diupdate');
    }

    public function delete($id)
    {
        $this->pegawai->delete($id);
        return redirect()->to('/pegawai')->with('success', 'Data Berhasil Dihapus');
    }
}
