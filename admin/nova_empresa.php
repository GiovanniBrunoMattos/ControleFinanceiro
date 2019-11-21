<?php
require_once 'VO/EmpresaVO.php';
require_once 'Controller/EmpresaCTRL.php';

if (isset($_POST['gravar'])) {

    $vo = new EmpresaVO();
    $vo->SetNome(trim($_POST['nome']));
    $vo->SetEndereco(trim($_POST['endereco']));
    $vo->SetTelefone(trim($_POST['telefone']));
    $vo->SetIdUsuario(1); // mudar depois
    $controller = new EmpresaCTRL();
    $msg = $controller->CadastrarEmpresa($vo);
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
                            <?php
                            
                            if(isset($msg)){
                                echo $msg;
                            }
                            
                            ?>
                            <h2>Nova Empresa</h2>   
                            <h5>Aqui você cadastra suas empresas </h5>

                        </div>
                    </div>
                    <!-- /. ROW  -->
                    <hr />
                    <form method="POST" action="nova_empresa.php">
                        <div class="form-group">
                            <label>Nome da Empresa</label>
                            <input name="nome" id="nome" class="form-control" placeholder="Digite Aqui..." />
                        </div>
                        <div class="form-group">
                            <label class="validacao" id="camponome">Favor informe o nome da empresa</label>
                        </div>
                        <div class="form-group">
                            <label>Endereço</label>
                            <input name="endereco" id="endereço" class="form-control" placeholder="Digite Aqui..." />
                        </div>
                        <div class="form-group">
                            <label class="validacao" id="campoendereço">Favor informe o endereço da empresa</label>
                        </div>
                        <div class="form-group">
                            <label>Telefone</label>
                            <input name="telefone" id="telefone" class="form-control" placeholder="Digite Aqui..." />
                        </div>
                        <div class="form-group">
                            <label class="validacao" id="campotelefone">Favor informe o telefone da empresa</label>
                        </div>
                        <button name="gravar" onclick="ValidarCampos(2)" type="submit" class="btn btn-success">Gravar</button>
                    </form>
                </div>
                <!-- /. PAGE INNER  -->
            </div>
            <!-- /. PAGE WRAPPER  -->
        </div>

    </body>
</html>
