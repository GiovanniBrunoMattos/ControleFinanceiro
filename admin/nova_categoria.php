<?php
require_once 'VO/CategoriaVO.php';
require_once 'Controller/CategoriaCTRL.php';

if (isset($_POST['gravar'])) {

    $vo = new CategoriaVO();
    $vo->setNome(trim($_POST['campocat']));
    $vo->setIdUsuario(1); //mudar depois
    $controller = new CategoriaCTRL();
    $msg = $controller->NovaCategoria($vo);
}
?>

<!DOCTYPE html>
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
                            <?php
                            if (isset($msg)) {
                                echo $msg;
                            }
                            ?>
                            <h2>Nova Categoria</h2>   
                            <h5>Aqui você insere suas categorias </h5>

                        </div>
                    </div>
                    <!-- /. ROW  -->

                    <hr />
                    <form method="POST" action="nova_categoria.php">
                        <div class="form-group">

                            <label>Nova Categoria</label>
                            <input name="campocat" id="campocat" class="form-control" placeholder="Digite aqui..." />

                        </div>
                        <div class="form-group">
                            <label class="validacao" id="campocategoria">Favor preencher o campo categoria</label>                                                   
                        </div>
                        <button name="gravar" onclick="ValidarCampos(1)" type="submit" class="btn btn-success">Gravar</button>
                    </form>

                </div>

                <!-- /. PAGE INNER  -->

            </div>
            <!-- /. PAGE WRAPPER  -->
        </div>


    </body>
</html>
