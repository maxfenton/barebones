<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<title>Pattern Primer - Barebones</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

	<meta http-equiv="Imagetoolbar" content="no" />
	<meta name="MSSmartTagsPreventParsing" content="true" />
	<meta name="robots" content="all" />
	<meta name="allow-search" content="no" />

	<link rel="stylesheet" href="_css/styles.css" type="text/css"/>
	<link rel="stylesheet" href="_css/styleguide.css" type="text/css"/>

	<script type="text/javascript">//<![CDATA[
		if (typeof scriptsLoaded === 'undefined') {
			var scriptsLoaded = [];
		}
		//Load Modernizr only once.
		if (!("Modernizr" in scriptsLoaded)) {
			document.write('<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.min.js"><\/script>');
			window.Modernizr || document.write('<script type="text/javascript" src="../js/vendor/modernizr.custom.70689.js"><\/script>');
			scriptsLoaded["Modernizr"] = true;
		}
		//Load jQuery only once.
		if (!("jQuery" in scriptsLoaded)) {
			window.jQuery || document.write('<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.11.1/jquery.min.js"><\/script>');
			scriptsLoaded["jQuery"] = true;
		}
		//]]>
	</script>

	<script type="text/javascript">//<![CDATA[
		var debugEnabled = true; // ONLY FOR TEMPLATE TESTING; NOT FOR LIVE SITE
		//]]>
	</script>
</head>

<body>
	<main role="main">
		<div class="container">
			<header>
				<nav role="navigation" class="breadcrumb-nav">
					<a href="../">Barebones</a> /
				</nav><!--/.breadcrumb-nav-->
				<h1>Pattern Primer</h1>
				<p class="lede">Common snippets of markup</p>
			</header>

<?php
	$files = array();
	$patterns_dir = "_patterns";

	$handle = opendir($patterns_dir);
	while (false !== ($file = readdir($handle))):
		if(stristr($file,'.html')):
			if( substr($file,0,1) != '_' ):
				$files[] = $file;
			endif;
		endif;
	endwhile;
	sort($files);

	if( $_GET && $_GET['show'] && in_array($_GET['show'], $files) ) {
		$files = NULL;
		$files[] = $_GET['show'];
	}

	foreach ($files as $file):
		echo '<section class="pattern" style="position: relative;">';
		echo '<div class="p-code">';
		echo '<div class="pattern-file"><a href="'. $_SERVER['PHP_SELF'] . '?show=' . $file . '">' . substr($file, 0, -5) . '</a></div>';
		include($patterns_dir.'/'.$file);
		echo '</div>';
		echo '<details class="primer">';
		echo '<summary title="Show markup and usage">&#8226;&#8226;&#8226;</summary>';
		echo '<section>';
		echo '<textarea rows="10" cols="30" class="input code" style="width: 99%; margin: 1em 0;">'.htmlspecialchars(file_get_contents($patterns_dir.'/'.$file)).'</textarea>';
		echo '<p class="p-caption" style="margin-left: 0 0 1em 0; padding-bottom: 2em;"><strong>Usage:</strong> '.htmlspecialchars(@file_get_contents($patterns_dir.'/'.str_replace('.html','.txt',$file))).'</p>';
		echo '</section>';
		echo '</details><!-- /.primer -->';
		echo '</section><!-- /.p-pattern -->';
	endforeach;
?>

		</div><!--/container-->
	</main><!--@main-->

	<footer role="contentinfo">
		<div class="p-container">
			<p><small>Copyright &#169; 2013 <a href="http://paulrobertlloyd.com">Paul Robert Lloyd</a>. Code covered by the <a rel="license" href="http://paulrobertlloyd.mit-license.org/">MIT license</a>.</small></p>
		</div><!--/container-->
	</footer><!--/@contentinfo-->

	<script>

		jQuery(document).ready( function() {
			// on the patterns page, make the code blocks toggle-able.

			// descriptive codeblocks for patterns are called "primers"
			var patternPrimers = jQuery(".pattern .primer");
			// use js to hide all the codeblocks
			patternPrimers.find("section").addClass("hidden");
			// mouseclicks on "..." shows/hides the next code block
			patternPrimers.find("summary").on('click', function() {
				var $this = jQuery(this);
				$this.next("section").toggleClass("hidden");
			});

		});

	</script>
</body>
</html>
