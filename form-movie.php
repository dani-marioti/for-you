<?php
    include "seguranca.php";
    include "conexao.php";
    $erro = FALSE;

    if ($_FILES) {
        $userId = $_SESSION['usu'];
        $directory = 'imagens/uploadMovie/';
        $movieName = $_FILES['movie']['name'];
        $tmp_name = $_FILES["movie"]["tmp_name"];
        $file = $directory.basename($movieName);
        
        $sql = 'insert into movie (id_usuario, movie_name) VALUES ('.$userId.', "'.$movieName.'")';
        $resultado = $conexao->query($sql);
        $msg = "";

        if ($resultado === TRUE AND move_uploaded_file($tmp_name, $file)) {
            $msg = "Vídeo cadastrado com sucesso!";
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
    <?php if ($_FILES and $resultado === TRUE) { ?>
        <br/>
        <video src="imagens/uploadMovie/<?php echo $movieName ?>" width="80" />
        <h3><?php echo $msg; ?></h3>
        <hr/>
    <?php } ?>

    <form enctype="multipart/form-data" action="form-movie.php" method="post">
        <h4>Selecione o vídeo a ser compartilhado:</h4>
        <input name='movie' type='file' accept="movie/avi, movie/mp4" />
        <p><input type="submit" value="Postar" /></p>
    </form>

    <br/>
    <a href="principal.php">Página principal</a>
</body>
</html>