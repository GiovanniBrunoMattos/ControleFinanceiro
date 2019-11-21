<?php

require_once 'Controller/UsuarioCTRL.php';
require_once 'VO/UsuarioVO.php';
if (isset($_POST['finalizar'])) {


    //vai passar as informações para as variaveis
    $vo = new UsuarioVO();
    $vo->SetNome(trim($_POST['cadnome']));
    $vo->SetSenha(trim($_POST['cadsenha']));
    $vo->SetEmail(trim($_POST['cademail']));
    $vo->SetAdm(0);
    $vo->SetStatus(1);
    $controller = new UsuarioCTRL();
    $msg = $controller->CadastrarUsuario($vo);
}
?>﻿
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <?php
        include_once '_head.php';
        ?>

    </head>
    <body>
        <div class="container">
            <div class="row text-center  ">
                <div class="col-md-12">
                    <br /><br />
                    <?php
                    if (isset($msg)) {
                        echo $msg;
                    }
                    ?>
                    <h2> Financeiro : Cadastro</h2>

                    <h5>( Faça seu cadastro para acessar o sistema )</h5>
                    <br />
                </div>
            </div>
            <div class="row">

                <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <strong>  Preencha os campos abaixo </strong>  
                        </div>
                        <div class="panel-body">
                            <form method="POST" action="cadastro.php "role="form">

                                <br/>
                                <div class="form-group input-group">
                                    <span class="input-group-addon"><i class="fa fa-circle-o-notch"  ></i></span>
                                    <input name="cadnome" id="cadnome" type="text" class="form-control" placeholder="Seu Nome" />
                                </div>
                                <div class="form-group">
                                    <label class="validacao" id="cnome">Favor preencher o campo nome.</label>
                                </div>

                                <div class="form-group input-group">
                                    <span class="input-group-addon">@</span>
                                    <input name="cademail" id="cademail" type="text" class="form-control" placeholder="Seu e-mail" />
                                </div>
                                <div class="form-group">
                                    <label class="validacao" id="cemail">Favor preencher o campo e-mail.</label>
                                </div>
                                <div class="form-group input-group">
                                    <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                    <input name="cadsenha" id="cadsenha" type="password" class="form-control" placeholder="Crie uma senha" />
                                </div>
                                <div class="form-group">
                                    <label class="validacao" id="csenha">Favor preencher o campo senha.</label>
                                </div>
                                <div class="form-group input-group">
                                    <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                    <input name="cadrsenha" id="cadrsenha" type="password" class="form-control" placeholder="Repita sua senha" />
                                </div>
                                <div class="form-group">
                                    <label class="validacao" id="crsenha">Favor repita sua senha.</label>
                                </div>

                                <button name="finalizar" onclick="return ValidarCampos(10)" class="btn btn-success ">Finalizar</button>
                                <hr />
                                Já possui conta ?  <a href="login.php" >Faça seu login</a>
                            </form>
                        </div>

                    </div>
                </div>


            </div>
        </div>


    </body>
</html>
