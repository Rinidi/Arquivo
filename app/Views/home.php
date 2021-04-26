<?php
require_once('template/head.php');
require_once('template/menu.php');
?>
<div class="container">
    <h1 class="titulo__bucador">Buscar Arquivos</h1>
    <form action="buscar" method="post">
        <div class="row">
            <div class="col-12 col-xl-3 col-lg-4 col-md-6 col-sm-10">
                <div class="form-group">
                    <label class="label__form" for="exampleFormControlSelect1">Tipo de arquivo</label>
                    <select name="tipo" class="form-control" id="exampleFormControlSelect1">
                        <option value="" selected >Todos</option>

                        <!--Lógica para manter os dados submetidos no form-->
                        <?php foreach ($tipos as $tipo):?>
                            <?php if(isset($id_tipo_selecionado)):?>
                                <?php if($tipo->id==$id_tipo_selecionado):?>
                                    <option value="<?=$tipo->id;?>" selected="selected"><?=$tipo->nome;?></option>
                                <?php else:?>
                                    <option value="<?=$tipo->id;?>"><?=$tipo->nome;?></option>
                                <?php endif;?>
                            <?php else:?>
                                <option value="<?=$tipo->id;?>"><?=$tipo->nome;?></option>
                            <?php endif;?>
                        <?php endforeach;?>
                    </select>
                </div>
            </div>
            <div class="col-12 col-xl-3 col-lg-4 col-md-6 col-sm-10">
                <div class="form-group">
                    <label class="label__form" for="exampleFormControlSelect1">Ano</label>
                    <select name="ano" class="form-control">
                        <option value="" selected >Todos</option>

                        <!--Lógica para manter os dados submetidos no form-->
                        <?php foreach ($anos as $ano):?>
                            <?php if(isset($ano_selecionado)):?>
                                <?php if($ano==$ano_selecionado):?>
                                    <option value="<?=$ano;?>" selected="selected"><?=$ano;?></option>
                                <?php else:?>
                                    <option value="<?=$ano;?>"><?=$ano;?></option>
                                <?php endif;?>
                            <?php else:?>
                                <option value="<?=$ano;?>"><?=$ano;?></option>
                            <?php endif;?>
                        <?php endforeach;?>
                    </select>
                </div>
            </div>
<!--            <div class="col-12 col-xl-3 col-lg-4 col-md-6 col-sm-10">-->
<!--                <div class="form-group">-->
<!--                    <label class="label__form" for="exampleFormControlSelect1">Número</label>-->
<!--                    <select name="numero" class="form-control">-->
<!--                        <option value="" selected >Todos</option>-->
<!--                        Lógica para manter os dados submetidos no form-->
<!--                        --><?php //foreach ($numeros as $num):?>
<!--                            --><?php //if(isset($num_selecionado)):?>
<!--                                --><?php //if($num==$num_selecionado):?>
<!--                                    <option value="--><?//=$num;?><!--" selected="selected">--><?//=$num;?><!--</option>-->
<!--                                --><?php //else:?>
<!--                                    <option value="--><?//=$num;?><!--">--><?//=$num;?><!--</option>-->
<!--                                --><?php //endif;?>
<!--                            --><?php //else:?>
<!--                                <option value="--><?//=$num;?><!--">--><?//=$num;?><!--</option>-->
<!--                            --><?php //endif;?>
<!--                        --><?php //endforeach;?>
<!--                    </select>-->
<!--                </div>-->
<!--            </div>-->
            <div class="col-12 col-xl-3 col-lg-4 col-md-6 col-sm-10">
                <div class="form-group">
                    <label class="label__form" for="exampleFormControlSelect1">Preponentes</label>
                    <select name="prep" class="form-control" id="exampleFormControlSelect1">
                        <option value="" selected >Todos</option>

                        <!--Lógica para manter os dados submetidos no form-->
                        <?php foreach ($preponentes as $preponente):?>
                            <?php if(isset($id_prep_selecionado)):?>
                                <?php if($preponente->id==$id_prep_selecionado):?>
                                    <option value="<?=$preponente->id;?>" selected="selected"><?=$preponente->nome;?></option>
                                <?php else:?>
                                    <option value="<?=$preponente->id;?>"><?=$preponente->nome;?></option>
                                <?php endif;?>
                            <?php else:?>
                                <option value="<?=$preponente->id;?>"><?=$preponente->nome;?></option>
                            <?php endif;?>
                        <?php endforeach;?>
                    </select>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Buscar</button>
    </form>
</div>

<div class="container resultado">
    <?php
    if (isset($resultados)){
    if (!empty($resultados)){
    ?>
    <table class="table table-bordered" style="border: 0.1px solid rgba(0,0,0,0.1);text-align: center;">
        <thead>
        <tr>
            <th scope="col" style="width: 5%;"></th>
            <th scope="col">Nome</th>
            <th scope="col">Data</th>
            <th scope="col">Preponente</th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($resultados as $resultado): ?>
            <tr>
                <td class="res_col">
                    <div style='font-size:1.5em; color:Tomato;'>
                        <i class='fas fa-file-pdf fa-1x'></i>
                    </div>
                </td>
                <td class="res_col"><?= $resultado['nome']; ?></td>
                <td class="res_col"><?= formatar_data($resultado['data_publicacao']); ?></td>
                <td class="res_col"><?= $resultado['nome_preponente'];?></td>
                <td class="res_col">
                    <a type="button" data-toggle="collapse" data-target="#ver_mais_<?=$resultado['id'];?>" aria-expanded="false" aria-controls="collapseExample">
                        <img onclick='troca_imagem(this)'id="seta_baixo" src="../content/imagens/seta_baixo.png" class="seta">
                    </a>
                </td>
                <td class="res_col" style="display: none;"><?= $resultado['descricao'];?></td>
            </tr>
            <tr class="collapse" id="ver_mais_<?=$resultado['id'];?>">
                <td colspan="5">
                    <div class="row">
                        <div class="col col-xl-10 col-md-10 col-12">
                            <div class="resultado_descricao">
                                <h4>Descrição <?= $resultado['nome']; ?>:</h4>
                                <?= $resultado['descricao'];?>
                            </div>
                        </div>
                        <div class="col col-xl-2 col-md-2 col-12 botao_baixar">
                            <a href="<?php echo base_url('content/arquivos/'. $resultado['caminho'])?>" class='btn btn-primary' target='_blank' style=""><i class='fas'></i>Baixar</a>
                        </div>
                    </div>
                </td>
            </tr>
        <?php
        endforeach;
        } else {
            echo "<h3>Nenhum Resultado Encontrado!</h3>";
        }
        }
        ?>
        <?php if(isset($teste)){echo "<h3>$teste</h3>";}?>
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
