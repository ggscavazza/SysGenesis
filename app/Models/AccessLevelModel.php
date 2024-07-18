<?php

namespace App\Models;

use CodeIgniter\Model;

class AccessLevelModel extends Model
{
    protected $table = 'access_levels';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'modules', 'permissions'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
}
