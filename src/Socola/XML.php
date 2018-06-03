<?php

/**
 * @Author: Socola
 * @Email: TokenTien@gmail.com
 * @Date:   2018-05-02 10:38:55
 * @Last Modified by:   Socola
 * @Last Modified time: 2018-05-03 22:08:32
 */
namespace Socola;

/**
* 
*/
class XML
{
	private static $xml;
	private static $desiredResults = 'object';
	private static $instances = null;
	public static function getInstances()
	{
		if(self::$instances == null){
			self::$instances = new XML;
		}
		return self::$instances;
	}
	public static function fromXml($xml)
	{
		self::$xml = $xml;
		return self::getInstances();
	}
	public static function fromXmlString($xmlString)
	{
		self::$xml = simplexml_load_string($xmlString);
		return self::getInstances();
	}
	public static function fromUrl($url)
	{
		self::$xml = simplexml_load_file($url);
		return self::getInstances();
	}
	public static function toObject()
	{
		self::$desiredResults = 'object';
		return self::getInstances();
	}
	public static function toJson()
	{
		header('Content-Type: application/json');
		self::$desiredResults = 'json';
		return self::getInstances();
	}
	public static function parse()
	{
		$json  = json_encode(self::$xml);
		$object = json_decode($json);
		$object = self::callback($object);
		
		switch (self::$desiredResults) {
			case 'json':
				return json_encode($object, true);
			case 'object':
			default:
				return $object;
		}
	}
	public static function callback($object)
	{
		$res = [];
		if(!empty($object->{'@attributes'})){
			foreach ($object->{'@attributes'} as $key => $value) {
				$res[$key] = $value;
			}
		}
		if(gettype($object) == 'array'){
			foreach ($object as $key => $value) {
				$res[$key] = self::callback($value);
			}	
		} else if(gettype($object) == 'object'){
			foreach ($object as $key => $value) {
				if($key == '@attributes'){
					continue;
				}
				$res[$key] = self::callback($value);
			}	
		} else {
			return $object;
		}

		$res = json_encode($res);
		$res = json_decode($res);
		return $res;
	}
}