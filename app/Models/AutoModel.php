<?php

namespace App\Models;

use CodeIgniter\Model;

class Automodel extends Model
{
    protected $table ='category';
    protected $primaryKey = 'id';
    protected $returnType = 'array';
    protected $allowedFields = ['product_name', 'status','image'];
    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}
