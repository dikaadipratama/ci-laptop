<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductModel extends Model
{
    protected $table = 'produk';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama', 'harga'];

    public function filterByPriceRange($minHarga, $maxHarga)
    {
        return $this->where('harga >=', $minHarga)
            ->where('harga <=', $maxHarga)
            ->findAll();
    }
}
