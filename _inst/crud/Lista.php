<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge, chrome=1">
        <link  rel="stylesheet" href="css/bootstrap.css">
        <script  src="js/bootstrap.js"></script>
        <script src="jquery-3.1.0.min.js"></script>
        <!-- Create Tiago Ferreira-->
        <title>Easy Donation</title>
    </head>
    <body>
        
        <div class="row">
            <div class="col-lg-8">
                <h4 class="h4"><b>Lista</b></h4>

            </div>

        </div>
        <div class="row">
            <div class="col-lg-8">
                <?php
                include '../../_admin/conection_data_base.php';
                $buscarInstituicao = $conn->query("SELECT * FROM easy_instituicao");
                foreach ($buscarInstituicao as $row) {
                    print utf8_encode($row["inst_nome"]) . "-" . $row["inst_CI"] . "<br/>";
                }?>
                <form action="CRUDInstituicao.php" method="POST">
                    <h5 class="h5"><b>CI:</b></h5><br/>
                    <input class="text-danger" type="text" name="ci"><br/><h6 class="h6"> Através do CI delete Instituicao.</h6>
                    <br/>
                    <input class="btn-primary" type="submit" name="delete_instituicao" value="Del">
                </form>
            </div>
        </div>
    </body>
</html>
