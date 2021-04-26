<?php namespace App\Models;

use CodeIgniter\Model;

class TiposModel extends  Model{
    protected $table = 'tipos_de_arquivo';
    protected $primaryKey = 'id';
    protected $returnType = 'object';

}
