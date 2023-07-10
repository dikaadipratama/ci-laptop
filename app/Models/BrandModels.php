<?php

namespace App\Models;

use CodeIgniter\Database\BaseBuilder;

class BrandModels
{
    protected $db;

    public function __construct()
    {
        $this->db = db_connect();
    }

    public function getBrands()
    {
        $builder = $this->db->table("brands");
        $data = $builder->get()->getResult();
        return $data;
    }

    public function getCpuLayar()
    {
        $builder = $this->db->table("cpu_layar");
        $data = $builder->get()->getResult();
        return $data;
    }

    public function getKategori()
    {
        $builder = $this->db->table("kategori");
        $data = $builder->get()->getResult();
        return $data;
    }

    public function getRamOs()
    {
        $builder = $this->db->table("ram_os");
        $data = $builder->get()->getResult();
        return $data;
    }

    public function getTipeRam()
    {
        $builder = $this->db->table("tpr");
        $data = $builder->get()->getResult();
        return $data;
    }
}
