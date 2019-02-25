<?php defined('BLUDIT') or die('Bludit CMS.'); ?>
<article class="doc__content">
<?php foreach ($content as $page): ?>
	<div class="page">
		<a href="<?php echo $page->permalink() ?>">
			<h2 class="page-title"><?php echo $page->title() ?></h2>
		</a>
		<?php echo $page->contentBreak(); ?>
	</div>
	<hr>
<?php endforeach; ?>
</article>