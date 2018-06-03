<?php

/**
 * @Author: Socola
 * @Email: TokenTien@gmail.com
 * @Date:   2018-05-03 22:04:32
 * @Last Modified by:   Socola
 * @Last Modified time: 2018-05-03 22:05:49
 */
	require '../vendor/autoload.php';
	use Socola\XML;
	$url = $_GET['u'];
	echo XML::fromUrl($url)->toJson()->parse();
