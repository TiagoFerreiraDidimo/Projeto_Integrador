<!DOCTYPE html>
<html>
    <head>
        <!-- Create Tiago Ferreira-->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge, chrome=1">
        <link  rel="stylesheet" href="css/bootstrap.css">
        <script  src="js/bootstrap.js"></script>
        <script src="jquery-3.1.0.min.js"></script>
        <title>Easy Donation</title>
    </head>
    <body>
        <div class="row">
            <div class="col-lg-4">
                <ul class="nav-divider">
                    <li class="btn-danger"><a href="cadastro.php">Cadastro</a></li>
                    <li class="btn-danger"><a href="Atualizar.php" >Atualizar</a></li>
                    <li class="btn-danger"><a href="Lista.php" >Listar</a></li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8">
                <h4 class="h4"><b>Atualize suas Informações</b></h4>

            </div>

        </div>
        <div class="row">
            <fieldset>
                <div class="col-lg-8">
                    <form class="form-control-static" action="CRUDusuario.php" method="POST">
                         <h5 class="h5"><b>Cpf:</b></h5><br/>
                         <input class="text-danger" type="text" name="cpf"><br/><h6 class="h6"> Através do CPF atualize as informações.</h6>
                        <br/>
                        <br/>
                        
                        <h5 class="h5"><b>Nome:</b></h5><br/>
                        <input class="text-danger" type="text" name="nome"><br/>
                       
                        <h5 class="h5"><b>Email:</b></h5><br/>
                        <input class="text-danger" type="text" name="email"><br/>
                        <h5 class="h5"><b>Senha:</b></h5><br/>
                        <input class="text-danger" type="text" name="senha"><br/>
                        <h5 class="h5"><b>Telefone:</b></h5><br/>
                        <input class="text-danger" type="text" name="telefone"><br/>
                        <h5 class="h5"><b>Endereco:</b></h5><br/>
                        <input class="text-danger" type="text" name="endereco"><br/>
                        <br/>
                      
                        <input class="btn-primary" type="submit" name="atualizar" value="Update">
                    </form>
                </div>
            </fieldset>
        </div>
    </body>
</html>
