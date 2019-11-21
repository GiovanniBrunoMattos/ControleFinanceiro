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
                            <h2>Mudar Senha</h2>   
                            <h5>Aqui você altera sua senha </h5>

                        </div>
                    </div>
                    <!-- /. ROW  -->
                    <hr />
                    <div class="form-group">
                        <label>Nova Senha</label>
                        <input id="novsenha" class="form-control" placeholder="Digite Aqui..." />
                    </div>
                    <div class="form-group">
                        <label class="validacao" id="nsenha">Digite a nova senha.</label>
                    </div>
                    <div class="form-group">
                        <label>Repita a senha</label>
                        <input id="repsenha" class="form-control" placeholder="Digite Aqui..." />
                    </div>
                    <div class="form-group">
                        <label class="validacao" id="rsenha">Repita a nova senha.</label>
                    </div>

                    <button onclick="ValidarCampos(6) "type="submit" class="btn btn-success">Gravar</button>
                </div>
                <!-- /. PAGE INNER  -->
            </div>
            <!-- /. PAGE WRAPPER  -->
        </div>

    </body>
</html>
