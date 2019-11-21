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
                            <h2>Consultar Movimentos</h2>   
                            <h5>Consultas de Movimentos </h5>

                        </div>
                    </div>
                    <!-- /. ROW  -->
                    <hr />


                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Data Inicial</label>
                            <input class="form-control" type="date" placeholder="PLease Enter Keyword" />
                        </div>

                        <div class="form-group">
                            <label>Tipos</label>
                            <select class="form-control">
                                <option>Entrada</option>
                                <option>Saída</option>
                                <option>Entrada/Saída</option>
                            </select>
                        </div>

                    </div>


                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Data Final</label>
                            <input class="form-control" type="date" placeholder="PLease Enter Keyword" />
                        </div>
                        <br>
                        <div class="form-group">
                            <button class="btn btn-success">Pesquisar</button>
                        </div>
                    </div>




                    <div class="col-md-12">





                        <br><hr>

                                <div class="row">
                                    <div class="col-md-12">
                                        <!-- Advanced Tables -->
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                Advanced Tables
                                            </div>
                                            <div class="panel-body">
                                                <div class="table-responsive">
                                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                                        <thead>
                                                            <tr>
                                                                <th>Rendering engine</th>
                                                                <th>Browser</th>
                                                                <th>Platform(s)</th>
                                                                <th>Engine version</th>
                                                                <th>CSS grade</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>

                                                            </tr>
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
