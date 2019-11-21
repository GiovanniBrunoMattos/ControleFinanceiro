<?php
require_once 'Controller/EmpresaCTRL.php';

$ctrl = new EmpresaCTRL();
$lista = $ctrl->ListarEmpresas(1);

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
                            <h2>Consultar Empresa</h2>   
                            <h5>Lista de todas empresas caso deseje alterar, clique no botão "Alterar" </h5>

                        </div>
                    </div>
                    <!-- /. ROW  -->
                    <hr />
                    <div class="row">
                        <div class="col-md-12">
                            <!-- Advanced Tables -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Minhas Empresas
                                </div>
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                            <thead>
                                                <tr>
                                                    <th>Nome da Empresa</th>
                                                    <th>Endereço</th>
                                                    <th>Telefone</th>
                                                    <th>Ação</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php for ($i = 0; $i < count($lista); $i++) { ?>

                                                    <tr class = "odd gradeX">
                                                        <td> <?= $lista[$i]['nome_empresa'] ?></td>
                                                        <td> <?= $lista[$i]['endereco_empresa'] ?></td>
                                                        <td> <?= $lista[$i]['telefone_empresa'] ?> </td>
                                                        <td>
                                                            <a href = "alterar_empresa.php?id=<?= $lista[$i]['id_empresa']?>" class = "btn btn-warning btn-sm">Alterar</a>
                                                        </td>
                                                    </tr>
                                                <?php } ?>



                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                            </div>
                            <!--End Advanced Tables -->
                        </div>
                    </div>
                </div>
                <!-- /. PAGE INNER  -->
            </div>
            <!-- /. PAGE WRAPPER  -->
        </div>


    </body>
</html>


