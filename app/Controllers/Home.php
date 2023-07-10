<?php

namespace App\Controllers;

use App\Models\LaptopModels;

class Home extends BaseController
{
    protected $laptop;

    public function __construct(){
        $this->laptop = new LaptopModels();
    }

    public function index()
    {
        $data=[
            'laptop' => $this->laptop
                ->select("produk.*, AVG(ranting) as ranting")
                ->join('review', 'produk.id=review.produkid')
                ->groupBy('review.produkid')
                ->orderBy('ranting', 'DESC')
                ->limit(6)
                ->get()->getResultArray()
        ];

        // dd($data['laptop']);

        return view('index',$data);
    }
}
