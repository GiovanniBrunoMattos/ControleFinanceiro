<?php

require_once 'Controller/CategoriaCTRL.php';
require_once 'VO/CategoriaVO.php';

if (isset($_GET['id'])) {

    $ctrl = new CategoriaCTRL();
    $consultar = $ctrl->ConsultarCategoria($_GET['id']);
}
else if(isset ($_POST['btnAlterar'])){
    
    $vo = new CategoriaVO();
    $vo->setNome(trim($_POST['nome']));
    $vo->setIdCategoria($_POST['id']);
    
    $ctrl = new CategoriaCTRL();
    $msg = $ctrl->AlterarCategoria($vo);
}
else if(isset($_POST['btnExcluir'])){
    
    $ctrl = new CategoriaCTRL();
    $msg = $ctrl->ExcluirCategoria($_POST['id']);
}

else{
    header('location: consultar_categoria.php');
}




?>
﻿<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
<?php
include_once '_head.php';
?>
    </head>
    <body>
        <div id="wrapper">
        <?php
        include_once '_topo.php';
        include_once '_menu.php';
        ?>
            <!-- /. NAV SIDE  -->
            <div id="page-wrapper" >
                <div id="page-inner">
                    <div class="row">
                        <div class="col-md-12">
                            <h2>Alterar Categoria</h2>   
                            <h5>Alterar suas categorias </h5>

                        </div>
                    </div>
                    <!-- /. ROW  -->
                    <?php
                            if (isset($msg)) {
                                echo $msg;
                            }
                    ?>
                    <hr />
                    <form method="POST" action="alterar_categoria.php">
                        <input type="hidden" value="<?= $_GET['id'] ?>" name="id">
                        <div class="form-group">
                            <label>Nome da Categoria</label>
                            <input id="nomecat" value="<?= isset($consultar) ? $consultar[0]['nome_categoria'] : '' ?>" class="form-control" name="nome" placeholder="" />
                        </div>
                        <div class="form-group">
                            <label class="validacao" id="ncategoria">Informe o nome da categoria.</label>
                        </div>
                        <button name="btnAlterar" onclick="ValidarCampos(3)" type="submit" class="btn btn-success">Alterar Categoria</button>
                        <button name="btnExcluir" onclick="ValidarCampos(3)" type="submit" class="btn btn-danger">Excluir Categoria</button>
                        
                    </form>
                </div>
                <!-- /. PAGE INNER  -->
            </div>
            <!-- /. PAGE WRAPPER  -->
        </div>


    </body>
</html>
