<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-2.1.4.js"></script><style type="text/css"></style>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>
    
    
    <title>Inserir Nova Area</title>
</head>

<body>
    <?php 
          include_once '../menu.php';
          include_once  'C:\xampp\htdocs\lpbcct2php2023\BLL\blltipoarea.php';
    ?>
    <div class="container indigo lighten-3 black-text col s12">
        <div class="center grey col s12">
            <h1>Inserir Nova Area</h1>
        </div>

        <div class="row">
            <form action="recinsarea.php" method="POST" id="frmInsArea" name="frmInsArea" class="col s12">

                <div class="input-field col s8">
                    <label for="lblNome" class="black-text bold">Informe o Nome:</label>
                    <input id="txt_nome" name="txtNome" type="text">
                </div>



                <div class="input-field col s8">
                    <label for="lbltipo" class="black-text bold">Informe o Tipo:</label>
                    <input id="txt_tipo" name="txtTipo" type="text"> 
                  <!--  <div class="input-field col s8">
                        <select id="slcTipo" name="slcTipoArea">
                            <option value="" disabled selected>Escolha um Tipo Area</option>
                            <?php  // carregar lista no select option
                                $bll = new \bll\bllTipoArea();
                                $lstTipoArea = $bll->Select();
                            ?>
                             <?php
					            foreach ($lstTipoArea as $tipoArea){
                             ?>
                                     <option value="<?php echo $tipoArea->getId(); ?>"><?php echo $tipoArea->getDescricao(); ?></option>
                             <?php
					             }
				             ?>
                        </select> 
                    </div>-->

                    
                </div>
                <div class="input-field col s8">
                    <label for="lblHectares" class="black-text bold">Informe o tamnho em Hectares:</label>
                    <input id="txt_Hectares" name="txtHectares" type="text">
                </div>

                <div class="grey darken-2 center col s12">
                    <br />
                    <button class="btn waves-effect waves-light green" type="submit" name="btnEnviar">Gravar
                        <i class="material-icons right">save</i>
                    </button>
                    <button class="btn waves-effect waves-light red" type="reset" name="btnLimpar">Limpar
                        <i class="material-icons right">clear_all</i>
                    </button>
                    <button class="btn waves-effect waves-light blue" type="button" name="btnVoltar" onclick="JavaScript:location.href='lstoperador2.php'">Voltar
                        <i class="material-icons right">arrow_back</i>
                    </button>
                    <br />
                    <br />
                </div>
            </form>
        </div>
    </div>
    <br>
    <br>
</body>
<!-- <?php include_once '../footer.php'?> -->
</html>



<script type="text/javascript">
window.onload=function(){
$(document).ready(function() {
    $('select').material_select();
});
}//]]> 

</script>