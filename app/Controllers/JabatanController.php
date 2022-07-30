<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Jabatan;

class JabatanController extends BaseController
{
    protected $jabatan;
    public function __construct()
    {
        $this->jabatan = new Jabatan;
    }

    public function index()
    {
        $data = [
            'title' => 'Data Jabatan',
            'jabatans' => $this->jabatan->findAll(),
        ];
        return view('admin/jabatan/index', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Tambah Jabatan'
        ];
        return view('admin/jabatan/create', $data);
    }

    public function store()
    {
        $this->jabatan->save([
            'jabatan' => $this->request->getVar('jabatan')
        ]);
        return redirect()->to('/jabatan')->with('success', 'Data Berhasil ditambah');
    }

    public function edit($id)
    {
        $data = [
            'title' => 'Edit Jabatan',
            'jabatan' => $this->jabatan->find($id)
        ];
        return view('admin/jabatan/edit', $data);
    }

    public function update($id)
    {
        $this->jabatan->update($id, [
            'jabatan' => $this->request->getVar('jabatan'),
        ]);
        return redirect()->to('/jabatan')->with('success', 'Data Berhasil Diupdate');
    }

    public function delete($id)
    {
        $this->jabatan->delete($id);
        return redirect()->to('/jabatan')->with('success', 'Data Berhasil Dihapus');
    }
}
