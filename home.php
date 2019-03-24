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
		<div class="page-date"><?php echo $page->date() ?></div>

		<?php echo $page->contentBreak(); ?>

		<?php Theme::plugins('pageEnd') ?>
	</div>
	<?php if ($page->readMore()): ?>
		<a class="read-more" href="<?php echo $page->permalink() ?>">Read more</a>
	<?php endif; ?>
	<hr>
<?php endforeach; ?>
</article>