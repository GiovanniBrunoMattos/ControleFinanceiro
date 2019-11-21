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
                            <h2>Meus Dados</h2>   
                            <h5>Aqui você altera seus dados </h5>

                        </div>
                    </div>
                    <!-- /. ROW  -->
                    <hr />
                    <div class="form-group">
                        <label>Nome</label>
                        <input id="altnome" class="form-control" placeholder="Digite Aqui..." />
                    </div>
                    
                    <div class="form-group">
                        <label class="validacao" id="anome">Digite o novo nome.</label>
                    </div>
                    <div class="form-group">
                        <label>E-mail</label>
                        <input id="altemail" class="form-control" placeholder="Digite Aqui..." />
                    </div>
                    
                    <div class="form-group">
                        <label class="validacao" id="aemail">Digite o novo e-mail.</label>
                    </div>
                

                    <button onclick="ValidarCampos(5)" type="submit" class="btn btn-success">Gravar</button>
                </div>
                <!-- /. PAGE INNER  -->
            </div>
            <!-- /. PAGE WRAPPER  -->
        </div>

    </body>
</html>
