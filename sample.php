<?php
$include = '../../';
require("../../db.php");

require("_class/_class_svg_net.php");
$svg = new svg;
$svg->size(1024,1024);
$id = 0;

require("_autores.php");
$fm = 1;
for ($r=0;$r < count($au);$r++)
	{
		$f = $au[$r][1];
		$fm = $fm + $f*2;
		$autor = $au[$r][0];
		$s = $au[$r][1]*2;
		$x = 900;
		$y = $r*16+16;
		
		$svg->arc_add($x,$y,$s,'A'.$r);
		$svg->text_add($x+15+$s,$y,$autor);		
	}

$svg->save('sample.svg');

echo '<body bgcolor="#909090">';
echo '<img src="sample.svg" border=5>';

echo '<HR>';
?>
