<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Pangkat;
use CodeIgniter\HTTP\Request;

class PangkatController extends BaseController
{
    protected $pangkat;
    public function __construct()
    {
        $this->pangkat = new Pangkat();
    }

    public function index()
    {
        $data = [
            'title' => 'Daftar Pangkat & Golongan',
            'pangkats' => $this->pangkat->findAll()
        ];
        return view('admin/pangkat/index', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Tambah Pangkat dan Golongan'
        ];
        return view('admin/pangkat/create', $data);
    }

    public function store()
    {
        $this->pangkat->save([
            'pangkat' => $this->request->getVar('pangkat'),
            'golongan' => $this->request->getVar('golongan'),
        ]);

        return redirect()->to('/pangkat')->with('success', 'Data Berhasil ditambahkan');
    }

    public function edit($id)
    {
        $data = [
            'title' => 'Edit Pangkat & Golongan',
            'pangkat' => $this->pangkat->find($id)
        ];
        return view('admin/pangkat/edit', $data);
    }

    public function update($id)
    {
        $this->pangkat->update($id, [
            'pangkat' => $this->request->getVar('pangkat'),
            'golongan' => $this->request->getVar('golongan')
        ]);
        return redirect()->to('/pangkat')->with('success', 'Data Berhasil Diupdate');
    }

    public function delete($id)
    {
        $this->pangkat->delete($id);
        return redirect()->to('/pangkat')->with('success', 'Data Berhasil Dihapus');
    }
}
