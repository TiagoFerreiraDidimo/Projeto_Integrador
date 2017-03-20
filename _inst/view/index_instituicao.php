<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Administração Instituição</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../bootstrap/css/bootstrap.css" rel="stylesheet">
        <link href="../../icon/css/font-awesome.css" rel="stylesheet">
        <script type="text/javascript" src="../../jquery-3-1-1.min.js"></script>
        <link href="../bootstrap/css/estilo_instituicao.css" rel="stylesheet">
        <style type="text/css">
            .carregando{
                color:#666;
                display:none;
            }
        </style>
        <script type="text/javascript">
            $(document).ready(function () {
                $('a#perfil').click(function () {
                    $("#conteudo").load("perfil.php #div2");
                            
                });
                $('a#mudar').click(function () {
                    $("#conteudo").load("mudarLocalizacao.php #div2");
                });

            });
        </script>
<script type="text/javascript">
		$(function(){
			$('body')on("change","#cod_estados",function(){
                            alert($(this).val());
				if( $(this).val() ) {
					$('#cod_cidades').hide();
					$('.carregando').show();
					$.getJSON('cidades.ajax.php?search=',{cod_estados: $(this).val(), ajax: 'true'}, function(j){
						var options = '<option value=""></option>';	
						for (var i = 0; i < j.length; i++) {
							options += '<option value="' + j[i].cod_cidades + '">' + j[i].nome + '</option>';
						}	
						$('#cod_cidades').html(options).show();
						$('.carregando').hide();
					});
				} else {
					$('#cod_cidades').html('<option value="">– Escolha um estado –</option>');
				}
			});
		});
		</script>



    </head>
    <body>
        <div class="col-lg-2 col-md-2 col-sm-2 nav-location">
            <nav class="navbar">
                <ul class="ul-text-dec">
                    <li class="li-inst-menu"><strong><a href="index_instituicao.php" class="degrader">EasyDonation</a></strong>
                    <li class="li-inst-menu"><strong><a class="a-menu"><i class="fa fa-user-circle" aria-hidden="true"></i></a>  Home</strong>
                        <ul class="ul-sub">
                            <li class="li-sub"><a id="perfil" style="text-decoration: none">Atualizar Perfil</a></li>
                            <li class="li-sub"><a id="mudar" style="text-decoration: none">Mudar Localização</a></li>

                        </ul>
                    </li>
                    <li class="li-inst-menu"><strong><a class="a-menu"><i class="fa fa-handshake-o" aria-hidden="true"></i></a> Doações</strong>
                        <ul class="ul-sub">
                            <li class="li-sub">Cadastrar Doações</li>
                            <li class="li-sub">Atualizar Doações</li>
                            <li class="li-sub">Excluir Doações</li>
                        </ul>
                    </li>
                    <li class="li-inst-menu"><strong><a class="a-menu"><i class="fa fa-search" aria-hidden="true"></i></a>   Consultar</strong>
                        <ul class="ul-sub">
                            <li class="li-sub">Doações da Semana</li>
                            <li class="li-sub">Doações do Mês</li>
                            <li class="li-sub">Todas as Doaçoes</li>
                        </ul>
                    </li>
                    <li class="li-inst-menu"><strong><a class="a-menu"><i class="fa fa-users" aria-hidden="true"></i></a>  Parcerias</strong>
                        <ul class="ul-sub">
                            <li class="li-sub">Sobre</li>
                            <li class="li-sub">Estátistica</li>
                        </ul>
                    </li>
                    <li class="li-inst-menu"><strong><a class="a-menu"><i class="fa fa-cog" aria-hidden="true"></i></a>  Administração</strong>
                        <ul class="ul-sub">
                            <li class="li-sub">Quem somos</li>
                            <li class="li-sub">Atendimento</li>
                            <li class="li-sub">Sobre</li>
                        </ul>
                    </li>
                    <li class="li-inst-menu"><strong><a class="a-menu"><i class="fa fa-question-circle" aria-hidden="true"></i></a>  Ajuda</strong>
                        <ul class="ul-sub">
                            <li class="li-sub">Dúvidas</li>
                            <li class="li-sub">Chamada</li>
                        </ul>
                    </li>
                    <li class="li-inst-menu"><strong><a class="a-menu-sair"><i class="fa fa-power-off" aria-hidden="true"></i></a></strong></li>
                </ul>
            </nav>
        </div>
        <div class="col-lg-9 col-md-9 col-sm-9 corpo-location">
            <div id="conteudo">
                
		
            </div>
        </div>
        <div class="col-lg-1 col-md-1 col-sm-1 rodape-location"></div>
    </body>
</html>
