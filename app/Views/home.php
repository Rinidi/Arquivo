<?php
require_once('template/head.php');
require_once('template/menu.php');
?>
<div class="container">
    <h1 class="titulo__bucador">Buscar Arquivos</h1>
    <form action="<?php echo base_url() ?>/public/Home/buscaArquivos" method="post">
        <div class="row">
            <div class="col-12 col-xl-3 col-lg-4 col-md-6 col-sm-10">
                <div class="form-group">
                    <label class="label__form" for="exampleFormControlSelect1">Tipo de arquivo</label>
                    <select name="tabela" class="form-control" id="exampleFormControlSelect1">
                        <option value="pedidos">Pedido de Providência</option>
                        <option value="sessoes">Atas das Sessões</option>
                        <option value="projeto_lei">Projeto de Lei</option>
                        <option value="projeto_executivo">Projeto do executivo</option>
                        <option value="RI">Requerimento de Informação</option>
                    </select>
                </div>
            </div>
            <div class="col-12 col-xl-3 col-lg-4 col-md-6 col-sm-10">
                <div class="form-group">
                    <label class="label__form" for="exampleFormControlSelect1">Ano</label>
                    <input name="ano" class="form-control" type="number" min="2009" max="2021" value="2021"
                           id="example-number-input">
                    <!--<select name="ano" class="form-control" id="exampleFormControlSelect1">
                        <option value="2021">2021</option>
                        <option value="2020">2020</option>
                        <option value="2019">2019</option>
                        <option value="2018">2018</option>
                        <option value="2017">2017</option>
                        <option value="2016">2016</option>
                        <option value="2015">2015</option>
                    </select>-->
                </div>
            </div>
            <!--<div class="col-12 col-xl-3 col-lg-4 col-md-6 col-sm-10">
                <div class="form-group">
                    <label class="label__form" for="exampleFormControlSelect1">Número</label>
                    <input name="numero" class="form-control" type="number" min="1" value="1" id="example-number-input">
                </div>
            </div>-->
        </div>
        <button type="submit" class="btn btn-primary">Buscar</button>
    </form>
</div>

<div class="container resultado">
    <?php
    if (isset($resultados)){
    if (!empty($resultados)){
    ?>
    <table class="table table-hover" style="border: 0.1px solid rgba(0,0,0,0.1)">
        <thead>
        <tr>
            <th scope="col"></th>
            <th scope="col">Nome</th>
            <th scope="col">Data</th>
            <th scope="col">Vereador</th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($resultados as $resultado): ?>
            <tr>
                <td>
                    <div style='font-size:2em; color:Tomato;'>
                        <i class='fas fa-file-pdf fa-1x'></i>
                    </div>
                </td>
                <td><?= $resultado['nome']; ?></td>
                <td><?= $resultado['data_publicacao']; ?></td>
                <td>Adilson de Paula</td>
                <td>
                    <a href='#' class='btn btn-info' target='_blank'>
                        <i class='fas fa-cloud-download-alt'></i>
                        Baixar
                    </a>
                </td>
            </tr>
        <?php
        endforeach;
        } else {
            echo "<h3>Nenhum Resultado Encontrado!</h3>";
        }
        }
        ?>
        </tbody>
    </table>
</div>


<!-- Teste de conexão com o banco
<div class="container">
    <h2>Teste de conexão</h2>
    <h4>Vereagores</h4>
    <table class="tabela">
        <tr>
            <td>Codigo Cargo</td>
            <td>Nome Cargo</td>
        </tr>

        <?php //foreach ($arquivos as $arquivo): ?>
        <tr>
            <td><?php //echo $arquivo->id?></td>
            <td><?php //echo $arquivo->nome?></td>
        </tr>
        <?php //endforeach;?>
    </table>
</div>-->
<?php
require_once('template/footer.php');
?>
