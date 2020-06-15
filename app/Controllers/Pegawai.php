<?php namespace App\Controllers;

class Pegawai extends BaseController
{
	public function index()
	{
        $pegawaiModel = new \App\Models\PegawaiModel();
        $pegawai = $pegawaiModel->findAll();

        return view('pegawai/index', [
            'pegawai' => $pegawai
        ]);
    }
    
    public function create()
    {
        helper('form');

        if($this->request->getMethod() == 'post'){
            $pegawai = [
                'nama' => $this->request->getPost('nama'),
                'nip' => $this->request->getPost('nip'),
                'alamat' => $this->request->getPost('alamat'),
                'telepon' => $this->request->getPost('telepon'),
            ];
            
            $pegawaiModel = new \App\Models\PegawaiModel();
            if($pegawaiModel->insert($pegawai)){
                session()->setFlashdata('success', 'Data berhasil disimpan');
                return redirect()->to('/pegawai/index');
            }

        }

        return view('pegawai/create');
    }

    public function update($id)
    {
        helper('form');

        $pegawaiModel = new \App\Models\PegawaiModel();
        $pegawai = $pegawaiModel->find($id);
        if(empty($pegawai)){
            session()->setFlashdata('error', 'Data tidak ditemukan');
            return redirect()->to('/pegawai/index');
        }

        if($this->request->getMethod() == 'post'){
            $pegawai = [
                'nama' => $this->request->getPost('nama'),
                'nip' => $this->request->getPost('nip'),
                'alamat' => $this->request->getPost('alamat'),
                'telepon' => $this->request->getPost('telepon'),
            ];
            
            if($pegawaiModel->update($id, $pegawai)){
                session()->setFlashdata('success', 'Data berhasil disimpan');
                return redirect()->to('/pegawai/index');
            }

        }

        return view('pegawai/update', [
            'pegawai' => $pegawai
        ]);
    }

    public function delete($id)
    {
        helper('form');

        $pegawaiModel = new \App\Models\PegawaiModel();
        if($pegawaiModel->delete($id)){
            session()->setFlashdata('success', 'Data berhasil dihapus');
            return redirect()->to('/pegawai/index');
        }

    }

}
