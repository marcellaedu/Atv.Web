<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validação Cliente</title>
</head>
<body>
    <h2>Validação Cliente</h2>
    <form action="" method="POST" onsubmit="return validar();">
        <input type="text" name="nome" id="nome" placeholder="Informe o nome"><br><br>
        <input type="text" name="endereco" id="endereco" placeholder="Informe o endereço"><br><br>
        <button type="submit">Enviar</button>
    </form>

    <div id="divMsg" style="color: brown;">
        
    </div>

<script src="frontValidacao.js"></script>    
</body>
</html>