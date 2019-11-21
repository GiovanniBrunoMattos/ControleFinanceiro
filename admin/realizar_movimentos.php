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
                            <h2>Realizar Movimentos</h2>   
                            <h5>Insira dados da movimentação</h5>

                        </div>
                    </div>
                    <!-- /. ROW  -->
                    <hr />
                    <div class="form-group">
                        <label>Tipo da Movimentação</label>
                        <select class="form-control">
                            <option>Entrada</option>
                            <option>Saída</option>

                        </select>
                    </div>
                    <div class="form-group">
                        <label>Empresa</label>
                        <select class="form-control">
                            <option>Selecione..</option>
                            <option>Saída</option>

                        </select>
                    </div>
                    <div class="form-group">
                        <label>Categoria</label>
                        <select class="form-control">
                            <option>Selecione..</option>
                            <option>Saída</option>

                        </select>
                    </div>
                    <div class="form-group">
                        <label>Conta</label>
                        <select class="form-control">
                            <option>Selecione..</option>
                            <option>Saída</option>

                        </select>
                    </div>
                    
                    
                    <div class="form-group">
                        <label>Valor</label>
                        <input id="valormov" class="form-control" placeholder="Digite aqui..." />
                    </div>
                    <div class="form-group">
                        <label class="validacao" id="valmov">Informe o valor do movimento.</label>
                    </div>
                    <div class="form-group">
                        <label>Data</label>
                        <input class="form-control" type="date" placeholder="Digite aqui..." />
                    </div>
                    <div class="form-group">
                        <label>Observações</label>
                        <textarea class="form-control" rows="3"></textarea>
                    </div>
                    <button onclick="ValidarCampos(9)" class="btn btn-success">Gravar</button>

                </div>
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
        </div>

    </body>
</html>

