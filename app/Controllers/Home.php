<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index($dados = [])
    {
        // Instancia dos models usados
		$arquivos_model = new \App\Models\ArquivosModel();
        $tipos_model = new \App\Models\TiposModel();
        $prep_model = new \App\Models\PreponentesModel();

        // Busca de ano e numeros usando model ArquivosModel
		$dados['numeros'] = $arquivos_model->findColumn('numero');
        $anos = $arquivos_model->findColumn('YEAR(data_publicacao)');
		$dados['anos'] = array_unique($anos);

		// Busca de tipos usando model TiposModel
        $dados['tipos'] = $tipos_model->findAll();

        // Busca de preponentes usando model PreponentesModel
        $dados['preponentes'] = $prep_model->findAll();
        echo view('home', $dados);
	}

    public function buscar()
    {
        $i = 0;
        // Conexão com banco
        $db = \Config\Database::connect();

        // Recebimendo dos dados passados pelo formulário
        $tipo = $this->request->getPost('tipo');
        $ano = $this->request->getPost('ano');
        $num = $this->request->getPost('numero');
        $prep = $this->request->getPost('prep');

        // Armazenando os valores selecionados para retornar à função
        $dados['num_selecionado'] = $num;
        $dados['ano_selecionado'] = $ano;
        $dados['id_tipo_selecionado'] = $tipo;
        $dados['id_prep_selecionado'] = $prep;

        $consulta_sql= 'SELECT arquivos.*, preponentes.nome as nome_preponente FROM arquivos LEFT JOIN preponentes ON arquivos.id_preponente = preponentes.id WHERE';

        // Testa se todos os campos estão vazios e retorna uma mensagem
        if(empty($tipo) && empty($num) && empty($ano) && empty($prep)){
            $consulta_sql = 'Por favor selecione ao menos 1 filtro';
            $dados['teste'] = $consulta_sql;
            $this->index($dados);
            return;
        }

        // Testa campo por campo para elaboração da Query
        // Utilação do contador para veriricar se alguma clausula ja foi adicionada
        if(!empty($tipo)){
            $consulta_sql .= ' arquivos.id_tipo= ' . $tipo;
            $i++;
        }
        if(!empty($num)){
            if($i>0){ $consulta_sql.= ' AND'; }
            $consulta_sql .= ' arquivos.numero= ' .  $num;
            $i++;
        }
        if(!empty($ano)){
            if($i>0){ $consulta_sql.= ' AND'; }
            $consulta_sql .= ' YEAR(arquivos.data_publicacao)= ' . $ano;
            $i++;
        }
        if(!empty($prep)){
            if($i>0){ $consulta_sql.= ' AND'; }
            $consulta_sql .= ' arquivos.id_preponente= ' . $prep;
        }
        $i = 0;

        $consulta_sql .= ' ORDER BY arquivos.id_tipo';

        // Execução da Query montada acima
        $query = $db->query($consulta_sql);
        $resultados = $query->getResultArray();

        $dados['resultados'] =  $resultados;
        $this->index($dados);

	}
}
