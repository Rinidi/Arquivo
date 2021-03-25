<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
    {
		$pedidosModel = new \App\Models\PedidosModel();
		$data['arquivos'] = $pedidosModel->find();
        echo view('home', $data);
	}

    public function buscaArquivos()
    {
        $table = $this->request->getPost('tabela');
        $ano = $this->request->getPost('ano');
        $db = \Config\Database::connect();
        $query = $db->
        query('SELECT id, nome, arquivo, data_publicacao FROM pedidos WHERE YEAR(data_publicacao) = ' . $ano . ' ORDER BY nome');
        $resultados = $query->getResultArray();
        $data['resultados'] =  $resultados;

        echo view('home', $data);
        /*$pedidosModel = new \App\Models\PedidosModel();
        $data['pedidos'] = $pedidosModel->where('')*/
	}
}
