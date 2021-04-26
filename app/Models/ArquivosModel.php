<?php namespace App\Models;

use CodeIgniter\Model;

class ArquivosModel extends  Model{
    protected $table = 'arquivos';
    protected $primaryKey = 'id';
    protected $returnType = 'object';

}
