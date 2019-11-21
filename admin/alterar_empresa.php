<?php
require_once 'Controller/EmpresaCTRL.php';
require_once 'VO/EmpresaVO.php';

if (isset($_GET['id'])) {

    $ctrl = new EmpresaCTRL();
    $consultar = $ctrl->ConsultarEmpresa($_GET['id']);

    //print_r($consultar);
} elseif (isset($_POST['btnAlterar'])) {

    $vo = new EmpresaVO();
    $vo->SetNome(trim($_POST['nome']));
    $vo->SetEndereco(trim($_POST['endereco']));
    $vo->SetTelefone(trim($_POST['telefone']));
    $vo->SetIdEmpresa($_POST['id']);

    $ctrl = new EmpresaCTRL();
    $msg = $ctrl->AlterarEmpresa($vo);
} 
elseif(isset ($_POST['btnExcluir'])){
    
    $ctrl = new EmpresaCTRL();
    $msg = $ctrl->ExcluirEmpresa($_POST['id']);
} 

else {

    header('location: consultar_empresa.php');
}
?>
﻿

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
                            <h2>Alterar Empresa</h2>   
                            <h5>Aqui você altera suas empresas </h5>

                        </div>
                    </div>
                    <!-- /. ROW  -->
                    <?php
                    if (isset($msg)) {
                        echo $msg;
                    }
                    ?>
                    <hr />
                    <form method="POST" action="alterar_empresa.php">
                        <input type="hidden" value="<?= $_GET['id'] ?>" name="id" >
                            <div class="form-group">
                                <label>Nome da Empresa</label>
                                <input name="nome" id="nemp" value="<?= isset($consultar) ? $consultar[0]['nome_empresa'] : '' ?>" class="form-control" placeholder="Digite Aqui..." />
                            </div>
                            <div class="form-group">
                                <label class="validacao" id="nomeemp"> Informe o novo nome da empresa que deseja alterar. </label>
                            </div>
                            <div class="form-group">
                                <label>Endereço</label>
                                <input name="endereco" id="endemp" value="<?= isset($consultar) ? $consultar[0]['endereco_empresa'] : '' ?>" class="form-control" placeholder="Digite Aqui..." />
                            </div>
                            <div class="form-group">
                                <label class="validacao" id="enderecoemp"> Informe o endereço novo da empresa que deseja alterar.</label>
                            </div>
                            <div class="form-group">
                                <label>Telefone</label>
                                <input name="telefone" id="telemp" value="<?= isset($consultar) ? $consultar[0]['telefone_empresa'] : '' ?>" class="form-control" placeholder="Digite Aqui..." />
                            </div>
                            <div class="form-group">
                                <label class="validacao" id="telefoneemp"> Informe o novo telefone da empresa que deseja alterar.</label>
                            </div>
                            <button name="btnAlterar"onclick="ValidarCampos(4)" type="submit" class="btn btn-success">Alterar Empresa</button>
                            <button name="btnExcluir" onclick="ValidarCampos(4)" type="submit" class="btn btn-danger">Excluir Empresa</button>
                    </form>
                </div>

                <!-- /. PAGE INNER  -->
            </div>
            <!-- /. PAGE WRAPPER  -->
        </div>

    </body>
</html>
