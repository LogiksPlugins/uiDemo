<?php
if (!defined('ROOT')) exit('No direct script access allowed');

$slug = _slug("a/page/c");

echo _css("uiDemo");
if(strlen($slug['page'])>0) {
	echo "<div align=center>";
	echo "<h3>UI Demo :: <u>".toTitle($slug['page'])."</u></h3>";
	echo "<a href='"._link("modules/uiDemo")."'>Go Back</a>";
	echo "</div>";
} else {
	echo "<div align=center>";
	echo "<h3>UI Demo Components</h3>";
	echo "<citie>Components here take UI as per the provided background theme, so you can test your theme here before going live.</citie>";
	echo "</div>";
}
autoModuleRoute(__DIR__, [], true);
echo _js("uiDemo");
?>