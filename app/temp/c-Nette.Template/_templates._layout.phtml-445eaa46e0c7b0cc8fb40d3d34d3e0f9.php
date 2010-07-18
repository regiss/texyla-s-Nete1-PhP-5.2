<?php //netteCache[01]000250a:2:{s:4:"time";s:21:"0.18397500 1279451067";s:9:"callbacks";a:1:{i:0;a:3:{i:0;a:2:{i:0;s:5:"Cache";i:1;s:9:"checkFile";}i:1;s:95:"/var/www/Nette/NetteFramework-1.0dev-PHP5.2/Texyla/document_root/../app/templates/@layout.phtml";i:2;i:1279451020;}}}?><?php
// file …/templates/@layout.phtml
//

$_cb = LatteMacros::initRuntime($template, NULL, 'ac1a25d1bf'); unset($_extends);

if (isset($presenter, $control) && $presenter->isAjax()) { LatteMacros::renderSnippets($control, $_cb, get_defined_vars()); }

if (SnippetHelper::$outputAllowed) {
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
	<title>Texyla</title>
	<meta http-equiv="Content-type" content="text/html; charset=UTF-8" />

	<style type="text/css">
	body {
		font: 80%/1.3em "Segoe UI", sans-serif;
	}
	</style>

	<link rel="stylesheet" href="./texyla/css/style.css" type="text/css" />
	<link rel="stylesheet" href="./themes/default/theme.css" type="text/css" />

	<!-- jQuery -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js" type="text/javascript"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.1/jquery-ui.min.js" type="text/javascript"></script>
	<link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/ui-lightness/jquery-ui.css" type="text/css" />

	
<?php $control->getWidget("texyla")->render() ?>
</head>
<body>
<?php LatteMacros::callBlock($_cb, 'content', $template->getParams()) ?>
</body>
</html>
<?php
}
