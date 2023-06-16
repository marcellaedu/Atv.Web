<?php
    $msgErro = "";
    $msgSucesso = "";
    $subm = isset($_POST['Submetido'])? $_POST['Submetido']:null;

    $nome = "";
    $end = "";

    if($subm){
        $nome = isset($_POST['nome'])? trim($_POST['nome']):null;
        $end = isset($_POST['end'])? trim($_POST['end']) :null;

        if(! $nome){
            $msgErro = "<br>Informe o nome!";
        } else if(! $end){
            $msgErro = "<br>Informe o endereço!";
        } else{
        $msgSucesso = "<br>Formulário validade com sucesso!";
        $nome = "";
        $end = "";
    }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validação Servidor</title>
</head>
<body>
    <h2>Validação Servidor</h2>
    <form action="" method="POST">
        <input type="text" name="nome" id="nome" placeholder="Informe o nome" value="<?= $nome ?>"><br><br>
        <input type="text" name="end" id="end" placeholder="Informe o endereço" value="<?= $end ?>"><br><br>
        <button type="submit">Enviar</button>

        <input type="hidden" name="Submetido" value="1">
    </form>

    <div id="divMsg" style="color: brown;">
        <?php echo $msgErro; ?>
    </div>
    <div id="divMsgSucesso" style="color:cadetblue;">
        <?php echo $msgSucesso; ?>
    </div>
  
</body>
</html>