<div class="head head-article span8">

	<h1><?php echo $article->getTitle() ?></h1>
	<div class="article-info">
		<em class="article-date"><?php echo '|   ' . date('d-m-Y', strtotime($article->getCreatedAt())) ?></em>
		<em class="article-author"><?php echo $article->getAuthor(); ?></em>
	</div>
</div>

<div class="row article-unit span8">

	<div class="article-image span8">
		<img class="image" src="<?php echo $article->retrievePictureUrl(); ?>">
	</div>

	<div class="article-content span8">
		<p class="article-short"><?php echo $article->getShortDescription(); ?></p>
		<p><?php echo $article->getContent(ESC_RAW); ?></p>
	</div>

	<!-- <div class="fb-like">
		<fb:like href="<?php echo url_for('article_show', array('id' => $article->getId()), true); ?>"></fb:like>
	</div> -->

	<div class="share-social">
	    <div>
	        <a target="_blank" title="Twitter" href="https://twitter.com/share?url=<?php echo url_for('article_show', array('id' => $article->getId()), true); ?>&text=<?php echo $article->getTitle(); ?>" rel="nofollow" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=400,width=700');return false;"><i class="fa fa-twitter"></i></a>
	        <a target="_blank" title="Facebook" href="https://www.facebook.com/sharer.php?u=<?php echo url_for('article_show', array('id' => $article->getId()), true); ?>&t=<?php echo $article->getTitle(); ?>" rel="nofollow" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=500,width=700');return false;"><i class="fa fa-facebook-square"></i></a>
	        <a target="_blank" title="Envoyer par mail" href="mailto:?subject=<?php echo $article->getTitle(); ?>&body=<?php echo url_for('article_show', array('id' => $article->getId()), true); ?>" rel="nofollow"><i class="fa fa-envelope"></i></a>
	    </div>
	</div>

</div>

<div class="article-comments span8">
<h2 class="blue">Commentaires</h2>
<div class="list-comments">
<ul id="commentList">

	<?php foreach ($article->getComments() as $c) : ?>

		<li>

			<?php include_partial('comment', array('comment' => $c)); ?>

		</li>

		<hr/>

	<?php endforeach; ?>

	</ul>

	<?php if ($sf_user->isAuthenticated()): ?>


		<form action="<?php echo url_for('new_comment'); ?>" id="newCommentForm" class="comment-form">
			<?php echo $commentForm; ?>
			<input type="submit" class="btn btn-small blue submitComment" value="envoyer">
		</form>


	<?php endif; ?>
</div>

</div>