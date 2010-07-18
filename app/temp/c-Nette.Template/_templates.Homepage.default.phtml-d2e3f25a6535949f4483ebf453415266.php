<?php //netteCache[01]000260a:2:{s:4:"time";s:21:"0.67580500 1279450921";s:9:"callbacks";a:1:{i:0;a:3:{i:0;a:2:{i:0;s:5:"Cache";i:1;s:9:"checkFile";}i:1;s:104:"/var/www/Nette/NetteFramework-1.0dev-PHP5.2/Texyla/document_root/../app/templates/Homepage/default.phtml";i:2;i:1279450434;}}}?><?php
// file …/templates/Homepage/default.phtml
//

$_cb = LatteMacros::initRuntime($template, NULL, 'cfc9148c92'); unset($_extends);


//
// block content
//
if (!function_exists($_cb->blocks['content'][] = '_cbb8375607ad4_content')) { function _cbb8375607ad4_content($_cb, $_args) { extract($_args)
?>

<?php $control->getWidget("exampleForm")->render() ;
}}

//
// end of blocks
//

if ($_cb->extends) { ob_start(); }
elseif (isset($presenter, $control) && $presenter->isAjax()) { LatteMacros::renderSnippets($control, $_cb, get_defined_vars()); }

if (SnippetHelper::$outputAllowed) {
if (!$_cb->extends) { call_user_func(reset($_cb->blocks['content']), $_cb, get_defined_vars()); }  
}

if ($_cb->extends) { ob_end_clean(); LatteMacros::includeTemplate($_cb->extends, get_defined_vars(), $template)->render(); }
