<?php

namespace App\Models;

use CodeIgniter\Database\Query;
use CodeIgniter\Model;

class LaptopModels extends Model
{
    protected $table = 'produk';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama', 'brand', 'kategori', 'harga', 'nama_ram', 'hdd', 'cpu', 'desk_cpu', 'gpu', 'uk_layar', 'os', 'gambar'];

    public function getLaptop($laptop = false)
    {
        if ($laptop == false) {
            return $this->paginate(6);
        }

        return $this->where(['laptop' => $laptop])->first();
    }

    public function getData($product = false)
    {
        if ($product == false) {
            return $this->table($this->table)->get()->getResultArray();
        }

        return $this->table($this->table)->getWhere(['id' => $product])->getRowArray();
    }
}
