<?php
    include "seguranca.php";
    include "conexao.php";
    $erro = FALSE;

    if ($_POST) {
        $userId = $_SESSION['usu'];       
        $sql = 'insert into locations (id_usuario, location_name) VALUES ('.$userId.', "'.$locationName.'")';
        $resultado = $conexao->query($sql);
        $msg = "";

        if ($resultado === TRUE) {
            $msg = "Localização cadastrada com sucesso!";
        } else {
            echo "Erro: ".$sql."<br>".$conexao->error;
        }
    }
?>

<html>
<head>
    <title>FY</title>
</head>

<body>
    <?php if ($_POST and $resultado === TRUE) { ?>
        <br/>       
        <h3><?php echo $msg; ?></h3>
        <hr/>
    <?php } ?>

    <form enctype="multipart/form-data" action="form-location.php" method="post">
        <h4>O que você está lendo?</h4>
        <input name="campo-localização" type="text" class="publicationPost" placeholder="Localização" />
        <p><input type="submit" value="Postar" /></p>
    </form>

    <br/>
    <a href="principal.php">Página principal</a>
</body>
</html>