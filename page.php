<?php defined('BLUDIT') or die('Bludit CMS.'); ?>
<article class="doc__content">
	<div class="page">
		<h1 class="page-title"><?php echo $page->title() ?></h1>
		<?php echo $page->content(); ?>
	</div>
</article>