<?php
    include "seguranca.php";
    include "conexao.php";
    $erro = FALSE;
 
    $sql_livros = "select * from books order by title";
    $resultado = mysqli_query($conexao, $sql_livros);
	$bookTitle = mysqli_fetch_array($resultado);

?>

<html>
    <head>
        <title>FY</title>
    </head>

    <body>
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
            <a href="principal.php">Página principal</a>

    </body>
</html>