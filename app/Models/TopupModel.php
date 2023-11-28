<?php

namespace App\Models;

use CodeIgniter\Model;

class TopupModel extends Model
{
    // ...
    protected $table      = 'topup';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;
    protected $allowedFields = ['nominal', 'keterangan'];
}