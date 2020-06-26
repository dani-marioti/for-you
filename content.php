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

<button class="buttonCircle buttonPlus alignCenterX" onclick="changeModal()">+</button>

<?php
    $posts = [];
    // for (post in posts) {
        $postId = "1";
        $nome = "Daniela Marioti";
        $imagemUrl = "imagens/backgroundLogin.jpg";
?>

<div class="post alignCenterX">
    <h3><?php echo $nome ?></h3>
    <div class="postImage">
        <img src="<?php echo $imagemUrl ?>">
    </div>
    <div class="postActions alignCenterX">
        <img class="actionIcon" src="imagens/coracao.png" alt="Curtir" />
        <img class="actionIcon" src="imagens/comentar.png" alt="Comentar" onclick="changeModalComment()" />
    </div>
</div>

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