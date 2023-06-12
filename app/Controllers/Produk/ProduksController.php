<?php

namespace App\Controllers\Produk;

use App\Controllers\BaseController;
use App\Models\ProdukModel;

class ProduksController extends BaseController
{
    protected $produks;
    protected $helpers = ['form'];

    public function __construct()
    {
        $produks = new ProdukModel();

        $this->produks = $produks;
    }

    public function index()
    {
        return view('produk/index');
    }

    public function create()
    {
        $data = [
            'title' => 'Tambah Produk',
        ];

        return view('produk/create', $data);
    }

    public function store()
    {
        // mendefinisikan mode update atau insert
        $mode = "insert";
        if ($this->request->getVar('id_produk')) {
            $mode = "update";
            $id_produk = $this->request->getVar('id_produk');
        }

        $nama_produk = $this->request->getVar('nama_produk');
        $harga = $this->request->getVar('harga');
        $kategori = $this->request->getVar('kategori');
        $status = $this->request->getVar('status');

        $rules = [
            'nama_produk' => 'required|regex_match[/^([a-zA-Z]|[0-9]|\s)+$/]',
            'harga' => 'required|numeric',
            'kategori' => 'required',
            'status' => 'required',
        ];

        if (!$this->validate($rules)) {
            if ($mode == "insert") {
                return redirect()->to('/createproduk')->with('validation', $this->validator)->withInput();
            }else if($mode == "update") {
                session()->setFlashdata('validation', $this->validator);
                return "400";
            }
        }else {
            $data = [
                'nama_produk' => $nama_produk,
                'harga' => $harga,
                'kategori' => $kategori,
                'status' => $status,
            ];

            if($mode == "update") {
                $data['id_produk'] = $id_produk;
            }
            
            if ($this->produks->save($data)) {
                if($mode == "insert") {
                    return redirect()->to('/')->with('message', 'berhasil menambahkan produk!');
                }
                if($mode == "update") {
                    return '200';
                }
            }
        }
    }

    public function delete()
    {
        $id = $this->request->getVar("id");
        $this->produks->delete($id);
    }

    public function show()
    {
        $id = $this->request->getVar("id");
        $data = $this->produks->find($id);

        echo json_encode($data);
    }
    
    public function destroySession($key)
    {
        session_destroy($key);
        return true;
    }

    public function loadData()
    {
        $data = $this->produks->where('status','bisa dijual')->orderBy('id_produk', 'DESC')->findAll();

        echo json_encode($data, true);
    }


    public function getDataFromApi()
    {
        
        // jika tabel produk sudah terisi maka tampilkan pemberitahuan, jika belum maka masukkan data dari API
        if (!$this->produks->findAll()) {
            // ambil data dari ajax lokasi di script.js
            $data = $this->request->getVar('data');
            // masukan data ke tabel produk satu persatu
            foreach ($data as $value) {
                // print_r($value);
                $this->produks->insert($value);
            }
        }
        // else {
        //     // KEPERLUAN DEVELOPMENT
        //     // echo 'data sudah masuk ';
        // }
    }
}
