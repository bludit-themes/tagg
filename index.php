<?php defined('BLUDIT') or die('Bludit CMS.'); ?>
<!DOCTYPE html>
<html lang="<?php echo Theme::lang() ?>">
<head>
	<meta charset="utf-8">
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="generator" content="Bludit">
	<?php
		echo Theme::metaTags('title');
		echo Theme::metaTags('description');
		echo Theme::favicon('img/favicon.png');
		echo Theme::css('vendors/google-fonts/fonts/nunito.css');
		echo Theme::css('vendors/line-awesome/css/line-awesome-font-awesome.min.css');
		echo Theme::css('vendors/scribbler/scribbler-global.css');
		echo Theme::css('vendors/scribbler/scribbler-doc.css');
		echo Theme::css('vendors/bludit/style.css');
		Theme::plugins('siteHead');
	?>
</head>
<body>
	<div class="doc__bg"></div>
	<nav class="header">
		<h1 class="logo"><a href="<?php echo $site->url() ?>"><?php echo $site->title() ?></a></h1>
		<ul class="menu">
			<div class="menu__item toggle"><span></span></div>
			<!-- Social Networks -->
			<?php foreach (Theme::socialNetworks() as $key=>$label): ?>
			<li class="menu__item">
				<a class="link link--dark" href="<?php echo $site->{$key}(); ?>" target="_blank">
				<i class="fa fa-<?php echo $key ?>"></i> <?php echo $label ?>
				</a>
			</li>
			<?php endforeach; ?>
		</ul>
	</nav>

	<div class="wrapper">
		<aside class="doc__nav">
			<ul>
			<?php
				foreach ($tags->db as $key=>$fields) {
					$active = '';
					if ($WHERE_AM_I=='page') {
						foreach ($page->tags(true) as $tagKey) {
							$active = ($key==$tagKey)?'active':'';
							if ($active) {
								break;
							}
						}
					} elseif ($WHERE_AM_I=='tag') {
						$active = ($url->slug()==$key)?'active':'';
					}

					$html  = '<li class="tags js-btn">';
					$html .= '<a class="tag '.$active.'" href="'.DOMAIN_TAGS.$key.'">';
					$html .= '<i class="fa fa-tag"></i> '.$fields['name'];
					$html .= '</a>';
					$html .= '</li>';
					echo $html;
				}
			?>
			</ul>
		</aside>

		<?php
			if ($WHERE_AM_I=='page') {
				include(__DIR__.'/page.php');
			} else {
				include(__DIR__.'/home.php');
			}
		?>
	</div>

	<footer class="footer"><?php echo $site->footer() ?>. Powered by <a href="https://www.bludit.com" target="_blank" class="link link--light">Bludit</a></footer>

	<!-- JavaScript -->
	<?php
		echo Theme::js('vendors/highlight/highlight.min.js');
		echo Theme::js('vendors/scribbler/scribbler.js');
	?>
	<script>hljs.initHighlightingOnLoad();</script>

</body>
</html>