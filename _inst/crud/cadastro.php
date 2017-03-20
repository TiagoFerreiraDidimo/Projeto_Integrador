<!DOCTYPE html>
<!-- Create Tiago Ferreira-->
<html>
    <head>
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
                    <li class="btn-danger"><a href="Atualizar.php">Atualizar</a></li>
                    <li class="btn-danger"><a href="Lista.php" >Listar</a></li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8">
                <h4 class="h4"><b>Cadastro Usuário</b></h4>

            </div>

        </div>
        <div class="row">
            <fieldset>
                <div class="col-lg-8">
                    <form class="form-control-static" action="CRUDusuario.php" method="POST">
                        <h5 class="h5"><b>Nome:</b></h5><br/>
                        <input class="text-danger" type="text" name="nome"><br/>
                        <h5 class="h5"><b>Cpf:</b></h5><br/>
                        <input class="text-danger" type="text" name="cpf"><br/>
                        <h5 class="h5"><b>Email:</b></h5><br/>
                        <input class="text-danger" type="text" name="email"><br/>
                        <h5 class="h5"><b>Senha:</b></h5><br/>
                        <input class="text-danger" type="text" name="senha"><br/>
                        <h5 class="h5"><b>Telefone:</b></h5><br/>
                        <input class="text-danger" type="text" name="telefone"><br/>
                        <h5 class="h5"><b>Endereco:</b></h5><br/>
                        <input class="text-danger" type="text" name="endereco"><br/>
                        <br/>
                        <input class="btn-primary" type="submit" name="acao">
                      
                    </form>
                </div>
            </fieldset>
        </div>
    </body>
</html>

<!---------------------------------------------------------------------------------------------------->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
    <title>Form - Bootsnipp.com</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">

    </style>
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
</head>
<body>
<form class="form-horizontal">
    <fieldset>

        <!-- Form Name -->
        <legend>Form Name</legend>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="textinput">Naam Rechthebbende / Client *</label>
            <div class="col-md-4">
                <input id="textinput" name="textinput" placeholder="placeholder" class="form-control input-md" type="text">

            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="textinput">Naam Gemachtigde of Erfgenaam</label>
            <div class="col-md-4">
                <input id="textinput" name="textinput" placeholder="placeholder" class="form-control input-md" type="text">

            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="textinput">Naam Partner</label>
            <div class="col-md-4">
                <input id="textinput" name="textinput" placeholder="placeholder" class="form-control input-md" type="text">

            </div>
        </div>

        <!-- Multiple Radios (inline) -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="radios">Staat de partner ook onder beschermingsbewind?</label>
            <div class="col-md-4">
                <label class="radio-inline" for="radios-0">
                    <input name="radios" id="radios-0" value="Ja" checked="checked" type="radio">
                    Ja
                </label>
                <label class="radio-inline" for="radios-1">
                    <input name="radios" id="radios-1" value="Nee" type="radio">
                    Nee
                </label>
            </div>
        </div>

        <!-- Multiple Radios (inline) -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="radios">Staat de partner bij Krens Inkomsten-en Uitgavenbeheer onder beschermingsbewind?:     </label>
            <div class="col-md-4">
                <label class="radio-inline" for="radios-0">
                    <input name="radios" id="radios-0" value="Ja" checked="checked" type="radio">
                    Ja
                </label>
                <label class="radio-inline" for="radios-1">
                    <input name="radios" id="radios-1" value="Nee" type="radio">
                    Nee
                </label>
            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="textinput">Zo niet, vul hier de naam organisatie en/of bewindvoerder in</label>
            <div class="col-md-4">
                <input id="textinput" name="textinput" placeholder="placeholder" class="form-control input-md" type="text">

            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="textinput">Adres *</label>
            <div class="col-md-4">
                <input id="textinput" name="textinput" placeholder="placeholder" class="form-control input-md" type="text">

            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="textinput">Postcode en Woonplaats *</label>
            <div class="col-md-4">
                <input id="textinput" name="textinput" placeholder="placeholder" class="form-control input-md" type="text">

            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="textinput">Telefoonnummer *</label>
            <div class="col-md-4">
                <input id="textinput" name="textinput" placeholder="placeholder" class="form-control input-md" type="text">

            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="textinput">E-mailadres *</label>
            <div class="col-md-4">
                <input id="textinput" name="textinput" placeholder="placeholder" class="form-control input-md" type="text">

            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="textinput">Naam van uw bewindvoerder *</label>
            <div class="col-md-4">
                <input id="textinput" name="textinput" placeholder="placeholder" class="form-control input-md" type="text">

            </div>
        </div>

        <!-- Multiple Radios (inline) -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="radios">Hebt u uw klacht al bij uw bewindvoerder neergelegd?*</label>
            <div class="col-md-4">
                <label class="radio-inline" for="radios-0">
                    <input name="radios" id="radios-0" value="Ja" checked="checked" type="radio">
                    Ja
                </label>
                <label class="radio-inline" for="radios-1">
                    <input name="radios" id="radios-1" value="Nee" type="radio">
                    Nee
                </label>
            </div>
        </div>

        <!-- Multiple Radios (inline) -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="radios">Loopt deze klacht ook bij de rechtbank?*</label>
            <div class="col-md-4">
                <label class="radio-inline" for="radios-0">
                    <input name="radios" id="radios-0" value="Ja" checked="checked" type="radio">
                    Ja
                </label>
                <label class="radio-inline" for="radios-1">
                    <input name="radios" id="radios-1" value="Nee" type="radio">
                    Nee
                </label>
            </div>
        </div>

        <!-- Multiple Radios (inline) -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="radios">Welke dienst neemt u van de organisatie af?</label>
            <div class="col-md-4">
                <label class="radio-inline" for="radios-0">
                    <input name="radios" id="radios-0" value="Beschermingsbewind" checked="checked" type="radio">
                    Beschermingsbewind
                </label>
                <label class="radio-inline" for="radios-1">
                    <input name="radios" id="radios-1" value="Inkomstenbeheer" type="radio">
                    Inkomstenbeheer
                </label>
                <label class="radio-inline" for="radios-2">
                    <input name="radios" id="radios-2" value="Anders" type="radio">
                    Anders
                </label>
            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="textinput">Anders</label>
            <div class="col-md-4">
                <input id="textinput" name="textinput" placeholder="" class="form-control input-md" type="text">

            </div>
        </div>

        <!-- Multiple Radios (inline) -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="radios">Is het dossier inmiddels beëindigd/gesloten?*</label>
            <div class="col-md-4">
                <label class="radio-inline" for="radios-0">
                    <input name="radios" id="radios-0" value="Nee" checked="checked" type="radio">
                    Nee
                </label>
                <label class="radio-inline" for="radios-1">
                    <input name="radios" id="radios-1" value="Ja" type="radio">
                    Ja
                </label>
            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="textinput">Zo ja, met ingang van</label>
            <div class="col-md-4">
                <input id="textinput" name="textinput" placeholder="Zo ja, met ingang van" class="form-control input-md" type="text">

            </div>
        </div>

        <!-- Textarea -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="textarea">Vat hier uw klacht kort samen *</label>
            <div class="col-md-4">
                <textarea class="form-control" id="textarea" name="textarea">Vat hier uw klacht kort samen *</textarea>
            </div>
        </div>

    </fieldset>
</form>

<script type="text/javascript">

</script>
</body>
</html>

