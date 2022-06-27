<?php

namespace App\Models;

use CodeIgniter\Model;

class TrailModel extends Model
{
    protected $table = 'driving_trial';
    protected $primaryKey = 'id';
    protected $returnType = 'array';
    protected $allowedFields = ['brand','full_name','phone','email','avatar'];
    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation  = false;
}
