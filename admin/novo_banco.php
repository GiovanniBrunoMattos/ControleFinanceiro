<?php
require_once 'Controller/BancoCTRL.php';
require_once 'VO/BancoVO.php';

if (isset($_POST['cadastrar'])) {

    $vo = new BancoVO();
    $vo->SetNome(trim($_POST['nomebanco']));
    $vo->SetIdUsuario(1); //mudar depois
    $controller = new BancoCTRL();
    $msg = $controller->CadastrarBanco($vo);
}
$ctrl = new BancoCTRL();
$lista = $ctrl->ListarBancos(1);


if (isset($_GET['id'])) {

    $ctrl = new BancoCTRL();
    $consultar = $ctrl->ConsultarBanco($_GET['id']);
} elseif (isset($_POST['btnAlterar'])) {

    $vo = new BancoVO();
    $vo->SetNome(trim($_POST['nomebanco']));
    $vo->SetIdBanco(trim($_POST['id']));

    $ctrl = new BancoCTRL();
    $msg = $ctrl->AlterarBanco($vo);

    header('location: novo_banco.php');
    
}
elseif (isset ($_POST['btnCancelar'])){
    
    header('location: novo_banco.php');

}

elseif (isset ($_POST['btnExcluir'])){
    
    $ctrl = new BancoCTRL();
    $msg = $ctrl->ExcluirBanco($_POST['id']);

    header('location: novo_banco.php');
    
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
            <div id="page-wrapper" >
                <div id="page-inner">
                    <div class="row">
                        <div class="col-md-12">                            
                            <?php if (isset($_GET['id'])) { ?>
                                <h2>Alterar Banco</h2>
                                <h5>Alterar Banco Existente</h5>
                            <?php } else { ?>
                                <h2>Novo Banco</h2>   
                                <h5>Criar novo banco </h5>
                            <?php } ?>
                        </div>
                    </div>
                    <!-- /. ROW  -->
                    <?php
                    if (isset($msg)) {
                        echo $msg;
                    }
                    ?>

                    <hr />
                    <form method="POST" action="novo_banco.php">
                        <input type="hidden" value="<?= $_GET['id'] ?>" name="id">
                            <div class="form-group">
                                <label>Nome do Banco</label>
                                <input name="nomebanco" value="<?= isset($consultar) ? $consultar[0]['nome_banco'] : '' ?>" id="nomebanco" class="form-control" placeholder="Digite aqui..." />
                            </div>
                            <div class="form-group">
                                <label class="validacao" id="nbanco">Informe o nome do banco.</label>
                            </div>


                            <?php if (isset($_GET['id'])) { ?>
                                <button name="btnAlterar"  onclick="ValidarCampos(8)" class="btn btn-success">Alterar</button>
                                <button name="btnCancelar" onclick="ValidarCampos(8)" class="btn btn-danger">Cancelar</button>
                                <button name="btnExcluir" onclick="ValidarCampos(8)" class="btn btn-danger">Excluir</button>
                                 <?php } else {
                                ?>
                                <button name="cadastrar"  onclick="ValidarCampos(8)" class="btn btn-success">Cadastrar</button>
                            <?php } ?>    

                            <br><hr>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            Consultar Bancos
                                        </div>
                                        <div class="panel-body">
                                            <div class="table-responsive">
                                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                                    <thead>
                                                        <tr>
                                                            <th>Nome da Categoria</th>
                                                            <th>Ação</th>

                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php for ($i = 0; $i < count($lista); $i++) { ?>

                                                            <tr class="odd gradeX">
                                                                <td><?= $lista[$i]['nome_banco'] ?></td>
                                                                <td>
                                                                    <a href="novo_banco.php?id=<?= $lista[$i]['id_banco'] ?>" class="btn btn-warning btn-sm">Alterar</a>
                                                                    
                                                                </td>
                                                            </tr>
                                                        <?php } ?>
                                                    </tbody>
                                                </table>
                                            </div>

                                        </div>
                                    </div>
                                    </form>
                                    </div>

                                    <!-- /. PAGE INNER  -->
                                    </div>
                                    <!-- /. PAGE WRAPPER  -->
                                    </div>

                                    </body>
                                    </html>
