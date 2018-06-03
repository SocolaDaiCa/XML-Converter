# XML-Converter
Convert XML to Json or Object
```php
	use Socola\XML;

	$endPoint = 'xml.xml';
	$xmlString = file_get_contents($endPoint);
	$xml = simplexml_load_string($xmlString);
```
## XML to Json
```php
	$json = XML::fromXml($xml)->toJson()->parse();
```
## XML to Object
```php
	$object = XML::fromXml($xml)->toObject()->parse();
```
## XML string to Json
```php
	$json = XML::fromXmlString($xmlString)->toJson()->parse();
```
## XML string to Object
```php
	$object = XML::fromXmlString($xmlString)->toObject()->parse();
```
## fetch from endpoint to Json
```php
	$json = XML::fromUrl($endPoint)->toJson()->parse();
```
## fetch from endpoint to Object
```php
	$object = XML::fromUrl($endPoint)->toObject()->parse();
```