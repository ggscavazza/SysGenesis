<?php

namespace App\Models;

use App\Models\UserModel;

class ProfileModel extends UserModel
{
    protected $table = 'profiles';
    protected $allowedFields = [
        'user_id', 
        'name', 
        'surname', 
        'cpf', 
        'rg', 
        'profession', 
        'position', 
        'company', 
        'phone', 
        'email', 
        'password'
    ];
    protected $useTimestamps = true;
}
