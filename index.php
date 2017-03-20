
<!--

modal page
Full Width Tabs

icones
https://icons8.com/-->

<!DOCTYPE html>

<html lang="pt-br">

<head>
    <meta charset="utf-8">

    <title>
        &Epsilon;&alpha;s&upsih; Do&eta;&alpha;tio&eta; | Brasil
    </title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="easydonation/img/br.png">

    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">

    <link href="easydonation/css/navbar.css" rel="stylesheet">

    <link href="easydonation/css/footer.css" rel="stylesheet">

    <!-- Modern-business CSS-->
    <link href="easydonation/css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="easydonation/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
</head>

<body>

<!--menu de navegação-->

<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Menu</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="degrader" href="index.html">&Epsilon;&alpha;s&upsih; Do&eta;&alpha;tio&eta;</a>
        </div>
        <div id="navbar" class=" navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="nav-li-houver"><a href="getting-started.php">Quem somos</a></li>
                <li class="nav-li-houver"><a href="getting-started.php">O que fazemos</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="login.html">Instituição</a></li>
                <li><a href="_inst/estado_ajax/index.php">Contato</a></li>
            </ul>
        </div>
    </div>
</nav>



<!--Corpo da página-->

<div class="container">

    <div class="row">
        <div class="col-lg-12">
            <br>
            <ol class="breadcrumb ">
                <li><a href="index.php">Início</a>
                </li>
                <li class="active">Doações</li>
            </ol>
        </div>
    </div><!--(FIM)conteúdo horizontal----->




    <div class="container">
        <div class="row">
            <div class="col-md-3">


                <!--pesquisa por doações-->

                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Instituições e doações">
      <span class="input-group-btn">
          <button class="btn btn-info btn" type="button"><i class="glyphicon glyphicon-search"></i></button>
      </span>
                </div><!-- /fim de pesquisa -->


                <style>
                    .menuvertical .li{
                        background: #ffb160;
                        color: #122b40;
                    }
                </style>

                <br>
                <div class="panel panel-default  "><!--borda do menu vertical-->

                    <ul class="nav nav-pills nav-stacked  menuvertical">
                        <li class="active al text-center"><a>Categorias</a></li>
                        <li><a href="roupas-calcados.html"><img src="easydonation/img/icons/camisa.png">  Roupa Masculina</a></li>
                        <li><a href="#"><i class="#"></i>Categoria</a></li>
                        <li><a href="#"><i class="#"></i>Categoria</a></li>
                        <li><a href="#"><i class="#"></i>Categoria</a></li>
                        <li><a href="#"><i class="#"></i>Categoria</a></li>
                        <li><a href="#"><i class="#"></i>Categoria</a></li>
                        <li><a href="#"><i class="#"></i>Categoria</a></li>
                        <li><a href="#"><i class="#"></i>Categoria</a></li>
                        <li><a href="#"><i class="#"></i>Categoria</a></li>
                    </ul>
                </div>
            </div>




            <div class="col-md-9">

                <!--formulário-->

                <form class="form-horizontal" action="#" method="#">
                    <fieldset>

                        <!-- Selecão de Estados -->

                        <div class="form-group">
                            <label class="col-xs-1"></label>
                            <div class=" col-xs-3">
                                <select id="estado" name="estados" class="form-control">
                                    <option value="estado">Selecione seu estado</option>
                                    <option value="ac">AC-Acre</option>
                                    <option value="al">AL-Alagoas</option>
                                    <option value="am">AM-Amazonas</option>
                                    <option value="ap">AP-Amapá</option>
                                    <option value="ba">BA-Bahia</option>
                                    <option value="ce">CE-Ceará</option>
                                    <option value="df">DF-Distrito Federal</option>
                                    <option value="es">ES-Espírito Santo</option>
                                    <option value="go">GO-Goiás</option>
                                    <option value="ma">MA-Maranhão</option>
                                    <option value="mt">MT-Mato Grosso</option>
                                    <option value="ms">MS-Mato Grosso do Sul</option>
                                    <option value="mg">MG-Minas Gerais</option>
                                    <option value="pa">PA-Pará</option>
                                    <option value="pb">PB-Paraíba</option>
                                    <option value="pr">PR-Paraná</option>
                                    <option value="pe">PE-Pernambuco</option>
                                    <option value="pi">PI-Piauí</option>
                                    <option value="rj">RJ-Rio de Janeiro</option>
                                    <option value="rn">RN-Rio Grande do Norte</option>
                                    <option value="ro">RO-Rondônia</option>
                                    <option value="rs">RS-Rio Grande do Sul</option>
                                    <option value="rr">RR-Roraima</option>
                                    <option value="sc">SC-Santa Catarina</option>
                                    <option value="se">SE-Sergipe</option>
                                    <option value="sp">SP-São Paulo</option>
                                    <option value="to">TO-Tocantins</option>
                                </select>
                            </div>

                            <button type="submit" class="btn btn-default pull-left">Procurar</button>

                        </div>
                    </fieldset>
                </form>
            </div>

            <!--Conteúdo do lado direito -->

            <div class="col-md-9">

                <p></p>
                <div class="col-sm-4 col-lg-4 col-md-4">
                    <div class="thumbnail">
                        <a href="produto.html" target="_top"><img src="http://placehold.it/320x150" alt=""  > </a>
                    </div>
                </div>

                <div class="col-sm-4 col-lg-4 col-md-4">
                    <div class="thumbnail">
                        <a href="produto.html" target="_top"><img src="http://placehold.it/320x150" alt=""  > </a>
                    </div>
                </div>

                <div class="col-sm-4 col-lg-4 col-md-4">
                    <div class="thumbnail">
                        <a href="produto.html" target="_top"><img src="http://placehold.it/320x150" alt=""  > </a>
                    </div>
                </div>

                <div class="col-sm-4 col-lg-4 col-md-4">
                    <div class="thumbnail">
                        <a href="produto.html" target="_top"><img src="http://placehold.it/320x150" alt=""  > </a>
                    </div>
                </div>

                <div class="col-sm-4 col-lg-4 col-md-4">
                    <div class="thumbnail">
                        <a href="produto.html" target="_top"><img src="http://placehold.it/320x150" alt=""  > </a>
                    </div>
                </div>

                <div class="col-sm-4 col-lg-4 col-md-4">
                    <div class="thumbnail">
                        <a href="produto.html" target="_top"><img src="http://placehold.it/320x150" alt=""  > </a>
                    </div>
                </div>

                <div class="col-sm-4 col-lg-4 col-md-4">
                    <div class="thumbnail">
                        <a href="produto.html" target="_top"><img src="http://placehold.it/320x150" alt=""  > </a>
                    </div>
                </div>

                <div class="col-sm-4 col-lg-4 col-md-4">
                    <div class="thumbnail">
                        <a href="produto.php" target="_top"><img src="http://placehold.it/320x150" alt=""  > </a>
                    </div>
                </div>

                <div class="col-sm-4 col-lg-4 col-md-4">
                    <div class="thumbnail">
                        <a href="produto.php" target="_top"><img src="http://placehold.it/320x150" alt=""  > </a>
                    </div>
                </div>

                <div class="col-sm-4 col-lg-4 col-md-4">
                    <div class="thumbnail">
                        <a href="produto.php" target="_top"><img src="http://placehold.it/320x150" alt=""  > </a>
                    </div>
                </div>

                <div class="col-sm-4 col-lg-4 col-md-4">
                    <div class="thumbnail">
                        <a href="produto.php" target="_top"><img src="http://placehold.it/320x150" alt=""  > </a>
                    </div>
                </div>

                <div class="col-sm-4 col-lg-4 col-md-4">
                    <div class="thumbnail">
                        <a href="produto.php" target="_top"><img src="http://placehold.it/320x150" alt=""  > </a>
                    </div>
                </div>



                <!--Tem que ver isso direito de paginação-->
                <div class="col-md-9 ">
                    <nav aria-label="Page navigation ">
                        <ul class="pagination">
                            <li>
                                <a href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li>
                                <a href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>


            </div><!--Final do conteúdo-->
        </div>
    </div>
</div>







<!----------- Footer ------------>

<footer class="footer-bs">
    <div class="row">
        <div class="col-md-3 footer-brand animated fadeInLeft">
            <h2>&Epsilon;&alpha;s&upsih; Do&eta;&alpha;tio&eta;</h2>
            <p>Descrição</p>
            <p>© 2017, Todos os direitos reservados</p>
        </div>
        <div class="col-md-4 footer-nav animated fadeInUp">
            <h4>Quem somos &#8212;</h4>
            <div class="col-md-6">
                <ul class="pages">
                    <li><a href="#">Easy Donation no Brasil</a></li>
                    <li><a href="#">História do Easy Donation</a></li>
                </ul>
            </div>
            <div class="col-md-6">
                <ul class="list">
                    <li><a href="contato.php">Contato</a></li>
                    <li><a href="#">Ajude com o seu blog</a></li>
                    <li><a href="#">Divulgue</a></li>
                    <li><a href="#">Seja um colaborador</a></li>
                    <li><a href="#">Voluntários</a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-2 footer-social animated fadeInDown">
            <h4>Social</h4>
            <ul>
                <li><a href="#"><img src="easydonation/img/icons/Facebook.png"> Facebook</a></li>
                <li><a href="#"><img src="easydonation/img/icons/Twitter.png"> Twitter</a></li>
                <li><a href="#"><img src="easydonation/img/icons/instagran.png"> Instagram</a></li>
                <li><a href="#"><img src="easydonation/img/icons/YouTube.png"> Youtube</a></li>
            </ul>
        </div>
        <div class="col-md-3 footer-ns animated fadeInRight">
            <h4>Receba notícias</h4>
            <p>Infome seu email e receba nossas notícias.</p>
            <p>
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search for...">
                      <span class="input-group-btn">
                        <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-envelope"></span></button>
                      </span>
            </div><!-- /input-group -->
            </p>
        </div>
    </div>
</footer>

</div>
<script type="text/javascript">

</script>


<!-- jQuery -->
<script src="easydonation/js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="easydonation/js/bootstrap.min.js"></script>

<!-- Contact Form JavaScript -->
<!-- Do not edit these files! In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
<script src="easydonation/js/jqBootstrapValidation.js"></script>
<script src="easydonation/js/contact_me.js"></script>

</body>

</html>