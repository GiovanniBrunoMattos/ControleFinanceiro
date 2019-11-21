<?php

require_once 'Controller/ContaCTRL.php';
require_once 'VO/ContaVO.php';
require_once 'Controller/BancoCTRL.php';

if(isset($_POST['cadastrar'])){
    
    $vo = new ContaVO();
    $vo->SetAgencia(trim($_POST['agencia']));
    $vo->SetNumero(trim($_POST['numero']));
    $vo->SetValor(trim($_POST['valor']));
    $vo->SetIdUsuario(1);
    $vo->SetIdBanco(1);
    $controller = new ContaCTRL();
    $msg=$controller->CadastrarConta($vo);
           
    }
    $ctrl = new BancoCTRL();
    $lista = $ctrl->ListarBancos(1);

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
            <div id="page-wrapper" >
                <div id="page-inner">
                    <div class="row">
                        <div class="col-md-12">
                            <?php
                            if(isset($msg)){
                            echo $msg;    
                            }
                                                                                   
                            ?>
                            <h2>Nova Conta</h2>   
                            <h5>Dados para criar nova conta </h5>

                            <!-- Nome do Banco, Nº da Agencia, Nº da Conta, Valor -->

                        </div>
                    </div>
                    <!-- /. ROW  -->
                    <hr />
                    <form method="POST" action="nova_conta.php">
                    <div class="form-group">
                        <label>Nome do Banco</label>
                        
                        <select class="form-control">
                            <?php for ($i = 0; $i < count($lista); $i++) { ?>
                            <option><?= $lista[$i]['nome_banco']?></option>
                            
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Número da Agência</label>
                        <input name="agencia" id="numagencia" class="form-control" placeholder="Digite aqui..." />
                    </div>
                    <div class="form-group">
                        <label class="validacao" id="nagencia">Digite o número da agência.</label>
                    </div>
                    <div class="form-group">
                        <label>Número da Conta</label>
                        <input name="numero" id="numconta" class="form-control" placeholder="Digite aqui..." />
                    </div>
                    <div class="form-group">
                        <label class="validacao" id="nconta">Digite o número da conta.</label>
                    </div>
                    <div class="form-group">
                        <label>Valor</label>
                        <input name="valor" id="valor" class="form-control" placeholder="Digite aqui..." />
                    </div>
                    <div class="form-group">
                        <label class="validacao" id="val">Digite o valor que tem na conta.</label>
                    </div>
                        <button name="cadastrar" onclick="ValidarCampos(7)" class="btn btn-success">Cadastrar</button>
                    <br><hr>
                            
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Consultar Contas
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
                                                <tr class="odd gradeX">
                                                    <td>Nome da Categoria</td>
                                                    <td>
                                                        <a href="alterar_categoria.php" class="btn btn-warning btn-sm">Alterar</a>
                                                    </td>

                                                    
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

