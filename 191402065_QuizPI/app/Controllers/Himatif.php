<?php
namespace App\Controllers;
use CodeIgniter\Restful\ResourceController;

class Himatif extends ResourceController
{
    protected $modelName = 'App\Models\HimatifModel';
    protected $format = 'json';

    public function __construct()
    {
        $this->validation = \Config\Services::validation();
    }

    public function index()
    {
        return $this->respond($this->model->findAll());
    }

    public function create()
    {
        $divisi = $this->request->getPost('divisi');
        $jumlah_anggota = $this->request->getPost('jumlah_anggota');
        $keterangan_divisi = $this->request->getPost('keterangan_divisi');
        $progja_unggulan = $this->request->getPost('progja_unggulan');
        
        $inputdata = array(
            'divisi' => $divisi,
            'jumlah_anggota' => $jumlah_anggota,
            'keterangan_divisi' => $keterangan_divisi,
            'progja_unggulan' => $progja_unggulan,
            
        );
        
        $validate = $this->validation->run($inputdata , 'tambahdivisi');
        $query = $this->model->insert($inputdata);

        if ($query) {
         return $this->respondCreated($inputdata);
        }
    }

    public function put()
    {
        $id = $this->request->getPut('id');
        $divisi = $this->request->getPut('divisi');
        $jumlah_anggota = $this->request->getPut('jumlah_anggota');
        $keterangan_divisi = $this->request->getPut('keterangan_divisi');
        $progja_unggulan = $this->request->getPut('progja_unggulan');

        $updatedata = array(
            'divisi' => $divisi,
            'jumlah_anggota' => $jumlah_anggota,
            'keterangan_divisi' => $keterangan_divisi,
            'progja_unggulan' => $progja_unggulan,
        );

        $query = $this->model->update($id, $updatedata);
        $validate = $this->validation->run($updatedata, 'update_divisi');

        if ($query) {
            return $this->respondCreated($updatedata);
        }
    }
}

?>
