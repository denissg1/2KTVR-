<?php

function var_dump_to_file($var, $fname)
{
	ob_start();
	var_dump($var);
	$output = ob_get_clean();
	file_put_contents($fname, $output);
}