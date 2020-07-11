<?php
    include "seguranca.php";
    include "conexao.php";
    $erro = FALSE;

    if ($_POST) {
        $userId = $_SESSION['usu'];       
        $sql = 'insert into music (id_usuario, music_name) VALUES ('.$userId.', "'.$musicName.'")';
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

    <form enctype="multipart/form-data" action="form-music.php" method="post">
        <h4>O que você está escutando?</h4>
        <input name="campo-musica" type="text" class="musicaPost" placeholder="Música" />
        <p><input type="submit" value="Postar" /></p>
    </form>

    <br/>
    <a href="principal.php">Página principal</a>
</body>
</html>