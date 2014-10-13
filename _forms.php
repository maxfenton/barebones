<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
	<meta charset="utf-8"/>
	<title>Form Example - Barebones</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link rel="stylesheet" href="_css/styles.css" type="text/css"/>

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
					<a href="/">Barebones</a> /
				</nav><!--/.breadcrumb-nav-->
				<h1>Form Example</h1>
				<p class="lede">Basic form styles</p>
			</header>
			<p>The <code>fieldset</code> element enables you to group related fields within a form, and each one should contain a corresponding <code>legend</code>. The <code>label</code> element ensures field descriptions are associated with their corresponding form widgets.</p>

			<fieldset>
				<legend>Legend</legend>
				<p><small class="caption">Required fields are marked <abbr title="Required">*</abbr></small></p>
				<?php include('_patterns/form-input.text.html'); ?>
				<?php include('_patterns/form-input.password.html'); ?>
				<?php include('_patterns/form-input.email.html'); ?>
				<?php include('_patterns/form-input.url.html'); ?>
				<?php include('_patterns/form-select.html'); ?>
				<?php include('_patterns/form-options.checkboxes.html'); ?>
				<?php include('_patterns/form-options.radios.html'); ?>
				<?php include('_patterns/form-textarea.html'); ?>
				<?php include('_patterns/form-input.checkbox.html'); ?>
				<?php include('_patterns/form-buttongroup.html'); ?>
			</fieldset>
		</div><!--/container-->
	</main><!--@main-->

	<footer role="contentinfo">
		<div class="container">
			<p><small>Copyright &#169; 2013 <a href="http://paulrobertlloyd.com">Paul Robert Lloyd</a>. Code covered by the <a rel="license" href="http://paulrobertlloyd.mit-license.org/">MIT license</a>.</small></p>
		</div><!--/container-->
	</footer><!--/@contentinfo-->
</body>
</html>