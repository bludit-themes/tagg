<?php defined('BLUDIT') or die('Bludit CMS.'); ?>
<article class="doc__content">
<?php if (empty($content)): ?>
<p>There's no content yet.</p>
<?php endif; ?>
<?php foreach ($content as $page): ?>
	<div class="page">
		<?php Theme::plugins('pageBegin') ?>

		<a href="<?php echo $page->permalink() ?>">
			<h2 class="page-title"><?php echo $page->title() ?></h2>
		</a>
		<?php echo $page->contentBreak(); ?>

		<?php Theme::plugins('pageEnd') ?>
	</div>
	<hr>
<?php endforeach; ?>
</article>