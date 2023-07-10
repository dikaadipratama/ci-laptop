<?php

namespace App\Models;

use CodeIgniter\Model;

class PopularModels extends Model
{
    public function getPopular(){
        return $this->db->table('produk')
        ->join('ranting', 'produk.id = review.produkid')
        ->get()->getResultArray();
    }
}