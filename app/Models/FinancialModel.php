<?php

namespace App\Models;

use CodeIgniter\Model;

class FinancialModel extends Model
{
    protected $table = 'financial';
    protected $primaryKey = 'id';
    protected $allowedFields = ['customer_id', 'amount', 'description', 'due_date', 'status'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
}
