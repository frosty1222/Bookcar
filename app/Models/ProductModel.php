<?php

namespace App\Models;
use CodeIgniter\Model;
class ProductModel extends Model {
   protected $table = 'product';
   protected $primaryKey = 'id';
   protected $returnType = 'array';
   protected $allowedFields = ['name','image','price','sale_price','description','category_id'];
   protected $useTimestamps = false;
   protected $createdField  = 'created_at';
   protected $updatedField  = 'updated_at';
   protected $deletedField  = 'deleted_at';

   protected $validationRules    = [];
   protected $validationMessages = [];
   protected $skipValidation     = false;
}