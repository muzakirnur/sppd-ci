<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AlatAngkut;

class AlatAngkutController extends BaseController
{
    protected $alatAngkut;
    public function __construct()
    {
        $this->alatAngkut = new AlatAngkut();
    }

    public function index()
    {
        $data = [
            'title' => 'Data Alat Angkut',
            'alats' => $this->alatAngkut->findAll()
        ];
        return view('admin/alat/index', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Tambah Jabatan'
        ];
        return view('admin/alat/create', $data);
    }

    public function store()
    {
        $this->alatAngkut->save([
            'nama' => $this->request->getVar('nama')
        ]);
        return redirect()->to('/alat')->with('success', 'Data Berhasil ditambah');
    }

    public function edit($id)
    {
        $data = [
            'title' => 'Edit alat Angkut',
            'alat' => $this->alatAngkut->find($id)
        ];
        return view('admin/alat/edit', $data);
    }

    public function update($id)
    {
        $this->alatAngkut->update($id, [
            'nama' => $this->request->getVar('alat'),
        ]);
        return redirect()->to('/alat')->with('success', 'Data Berhasil Diupdate');
    }

    public function delete($id)
    {
        $this->alatAngkut->delete($id);
        return redirect()->to('/alat')->with('success', 'Data Berhasil Dihapus');
    }
}
