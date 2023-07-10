<?php

namespace App\Controllers;

use App\Models\BrandModels;
use App\Models\LaptopModels;
use App\Models\ReviewModel;
use App\Models\TimModel;


use App\Controllers\BaseController;


class Produk extends BaseController
{
    protected $brands;
    protected $product;
    protected $review;
    protected $timModel;

    public function __construct()
    {
        $this->product = new LaptopModels();
        $this->brands = new BrandModels();
        $this->review = new ReviewModel();
        $this->timModel = new TimModel();

        // $this->coba= new LaptopModels();
    }

    public function index()
    {
        $db = \Config\Database::connect();
        $model = new BrandModels;

        if ($this->request->getPost()) {
            $product = $this->product->like('nama', $this->request->getPost('cari'))
                ->paginate(9, 'product');
            // dd($product);
        } else {
            $product = $this->product->paginate(9, 'product');
        }

        // $builder =$db->table('brands');

        // $builder ->distinct('ram');
        // $builder->distinct('ram');
        // $builder->get();
        $brands = $model->getBrands();
        $cpulayar = $model->getCpuLayar();
        $kategori = $model->getKategori();
        $ramos = $model->getRamOs();
        $tiperam = $model->getTipeRam();

        $tim = $this->timModel->findAll();


        $data = [
            'product' => $product,
            'pager' => $this->product->pager,
            'tim' => $tim,

            'brands' => $brands,
            'cpulayar' => $cpulayar,
            'kategori' => $kategori,
            'ramos' => $ramos,
            'tiperam' => $tiperam,
        ];

        return view('v_produk', $data);
    }

    public function Cari()
    {
    }

    public function detail($id)
    {
        $review = $this->review->getWhere([
            'produkid' => $id
        ])->getResultArray();
        if ($review) {
            $jmlReview = $this->review->getWhere([
                'produkid' => $id
            ])->getNumRows();
            $total_bintang = 0;
            foreach ($review as $key => $value) {
                $total_bintang += $value['ranting'];
            }
            $review = floatval($total_bintang / $jmlReview);
        } else {
            $review = 0;
            $jmlReview = 0;
        }
        $data = [
            'review' => $review,
            'jmlReview' => $jmlReview,
            'product' => $this->product->getData($id)
        ];


        return view('v_detail', $data);
    }

    public function review()
    {
        $this->review->insert([
            'produkid' => $this->request->getPost('id'),
            'ranting' => $this->request->getPost('ranting'),
        ]);


        echo json_encode([
            'sukses' => 'Ranting sukses'
        ]);
    }
}
