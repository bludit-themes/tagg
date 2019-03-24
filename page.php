<?php defined('BLUDIT') or die('Bludit CMS.'); ?>
<article class="doc__content">
	<div class="page">
		<?php Theme::plugins('pageBegin') ?>

		<h1 class="page-title"><?php echo $page->title() ?></h1>
		<div class="page-date"><?php echo $page->date() ?></div>

		<?php echo $page->content(); ?>

		<?php Theme::plugins('pageEnd'); ?>
	</div>
</article>