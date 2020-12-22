<?php

namespace App\Models;
use CodeIgniter\Model;
class CrudModel extends Model {
    protected $table = 'tbl_users';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'email', 'gender'];

}
?>