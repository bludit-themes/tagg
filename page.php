<?php defined('BLUDIT') or die('Bludit CMS.'); ?>
<article class="doc__content">
	<div class="page">
		<?php Theme::plugins('pageBegin') ?>

		<h1 class="page-title"><?php echo $page->title() ?></h1>
		<?php echo $page->content(); ?>

		<?php Theme::plugins('pageEnd'); ?>
	</div>
</article>