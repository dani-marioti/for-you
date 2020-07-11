<?php
    include "seguranca.php";
    include "conexao.php";
    $erro = FALSE;

    if ($_POST) {
        $userId = $_SESSION['usu'];
        
        $sql = "select * from books where bookId=".$codigo;			
		$resultado = mysqli_query($conexao, $sql);
		$bookTitle = mysqli_fetch_array($resultado);
        $msg = "";

        if ($resultado === TRUE) {
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
    <?php if ($_POST and $resultado === TRUE) { ?>
        <br/>       
        <h3><?php echo $msg; ?></h3>
        <hr/>
    <?php } ?>

    <form enctype="multipart/form-data" action="form-book.php" method="post">
        <h4>O que você está lendo?</h4>
        <select name="cBookId" id="cBookId" <?php echo $status; ?>>	

            <?php foreach( $resultado as $bookTitle) { ?>
                <option value="<?php echo $bookTitle['bookId']; ?>" size="4"> 
                    <?php 
                    echo $bookTitle['title'] . " - " . $bookTitle['author']; 
                    ?>
                </option>
            <?php } ?>   

        </select>

        <p><input type="submit" value="Postar" /></p>
    </form>

    <br/>
    <a href="principal.php">Página principal</a>
</body>
</html>