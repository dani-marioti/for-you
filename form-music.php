<?php
    include "seguranca.php";
    include "conexao.php";
    $erro = FALSE;

    if ($_FILES) {
        $userId = $_SESSION['usu'];
        $directory = 'imagens/upload/';
        $imageName = $_FILES['image']['name'];
        $tmp_name = $_FILES["image"]["tmp_name"];
        $file = $directory.basename($imageName);
        
        $sql = 'insert into post (id_usuario, image_name) VALUES ('.$userId.', "'.$imageName.'")';
        $resultado = $conexao->query($sql);
        $msg = "";

        if ($resultado === TRUE AND move_uploaded_file($tmp_name, $file)) {
            $msg = "Post cadastrado com sucesso!";
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
        <img src="imagens/upload/<?php echo $imageName ?>" width="80" />
        <h3><?php echo $msg; ?></h3>
        <hr/>
    <?php } ?>

    <form enctype="multipart/form-data" action="form-image.php" method="post">
        <h4>O que você está escutando?</h4>
        <input name='image' type='file' accept="image/png, image/jpeg" />
        <p><input type="submit" value="Postar" /></p>
    </form>

    <br/>
    <a href="principal.php">Página principal</a>
</body>
</html>