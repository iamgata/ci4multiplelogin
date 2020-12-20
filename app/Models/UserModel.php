<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'tb_user';
    protected $allowedFields = ['name_user', 'email_user', 'password_user', 'level_user', 'image_user'];
    protected $useTimestamps = 'true';

    public function insertUser($datainsert)
    {
        $this->db->table($this->table)->insert($datainsert);
    }
}
