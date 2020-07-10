<?php
    include "conexao.php";
    
    $sqlBuscaPosts = 'select id, usu.usuNome as usuNome, image_name from post, usu where post.id_usuario = usu.usuCodigo';
    $posts = mysqli_query($conexao, $sqlBuscaPosts);
    
    $sqlBuscaBooks = 'select title, author from books';
    $books = mysqli_query($conexao, $sqlBuscaBooks);
?>

<script type="text/javascript">
	function changeModalComment() {
		const list = document.getElementById('modalComment').classList

		if (list.contains('openModal')) {
			list.remove('openModal')
		} else {
			list.add('openModal')
		}
	}
</script>

<button class="buttonCircle buttonPlus alignCenterX" onclick="changeModal()">
    +
</button>

<?php foreach ($posts as $post) : ?>
    <div class="post alignCenterX">
        <h3>
            <?php echo $post['usuNome']; ?>
        </h3>
        <div class="postImage">
            <img src="imagens/upload/<?php echo $post['image_name'] ?>">
        </div>
        <div class="postActions alignCenterX">
            <img class="actionIcon" src="imagens/coracao.png" alt="Curtir" />
            <img class="actionIcon" src="imagens/comentar.png" alt="Comentar" onclick="changeModalComment()" />
        </div>
    </div>
<?php endforeach; ?>

<?php foreach ($books as $book) : ?>
    <div class="post alignCenterX">
        <h3>
            <?php echo $book['title']; ?>
        </h3>
        <h4>
            Autor: <?php echo $book['author']; ?>
        </h4>
        <div class="postActions alignCenterX">
            <img class="actionIcon" src="imagens/coracao.png" alt="Curtir" />
            <img class="actionIcon" src="imagens/comentar.png" alt="Comentar" onclick="changeModalComment()" />
        </div>
    </div>
<?php endforeach; ?>

<div id="modalComment" class="modal">
    <div class="closeRow">
        <button onclick="changeModalComment()">X</button>
    </div>
    <div class="row rowComment">
        <h4>Deixe um comentário:</h4>
        <form action="#" method="POST"><!-- TODO -->
            <textarea cols="30" rows="6"></textarea>
            <input type="hidden" value="<?php $postId ?>" />
            <input type="submit" value="Comentar" class="buttonComment" />
        </form>
    </div>
</div>

<?php # } ?>