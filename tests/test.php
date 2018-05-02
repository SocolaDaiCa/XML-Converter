<?php

/**
 * @Author: Socola
 * @Email: TokenTien@gmail.com
 * @Date:   2018-05-02 10:40:16
 * @Last Modified by:   Socola
 * @Last Modified time: 2018-05-02 11:00:05
 */
require '../vendor/autoload.php';

use Socola\XML;

$endPoint = 'xml.xml';
$xmlString = file_get_contents($endPoint);
$xml = simplexml_load_string($xmlString);
/* XML to Json*/
$res1 = XML::fromXml($xml)->toJson()->parse();
/* XML to Object*/
$res2 = XML::fromXml($xml)->toObject()->parse();
/* XMLString tp Json */
$res3 = XML::fromXmlString($xmlString)->toJson()->parse();
/* XMLString to Object*/
$res4 = XML::fromXmlString($xmlString)->toObject()->parse();
/* URL to Json */
$res5 = XML::fromUrl($endPoint)->toJson()->parse();
/* URL to Object*/
$res6 = XML::fromUrl($endPoint)->toObject()->parse();
echo('<pre>');
print_r($res1);



// $x = XML::fromXml($xml)->toJson()->parse();