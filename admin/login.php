<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <?php
        include_once '_head.php';
        ?>
    </head>
    <body>
        <div class="container">
            <div class="row text-center ">
                <div class="col-md-12">
                    <br /><br />
                    <h2> Financeiro : Login</h2>

                    <h5>( Faça seu login )</h5>
                    <br />
                </div>
            </div>
            <div class="row ">

                <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <strong>   Entre com seus dados </strong>  
                        </div>
                        <div class="panel-body">
                            <form role="form">
                                <br />
                                
                                <div class="form-group input-group">
                                    <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
                                    <input id="email" type="text"  class="form-control" placeholder="Seu email " />
                                </div>
                                <div class="form-group">
                                    <label class="validacao" id="campoemail">Favor preencher o campo e-mail</label>
                                </div>
                               
                                <div class="form-group input-group">
                                    <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                    <input id="senha" type="password" class="form-control"  placeholder="Sua senha" />
                                </div>
                                <div class="form-group">
                                    <label class="validacao" id="camposenha">Favor preencher o campo senha</label>
                                </div>

                                <button class="btn btn-primary" onclick=" return ValidarCampos(0)" >Acessar</button>
                                <hr />
                                Não tem cadastro ? <a href="cadastro.php" >Clique aqui </a> 
                            </form>
                        </div>

                    </div>
                </div>


            </div>
        </div>


    </body>
</html>

