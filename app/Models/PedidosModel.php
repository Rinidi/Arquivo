<?php namespace App\Models;

use CodeIgniter\Model;

class PedidosModel extends  Model{
    protected $table = 'cargos';
    protected $primaryKey = 'id';
    protected $nome = 'nome';
    protected $arquivo = 'arquivo';
    protected $datPublicacao = 'data_publicacao';
    protected $returnType = 'object';
}
