<?php
trait Assertions{

    public function assertArrayHasKey($key, $array, string $message = ''){}
public function assertArraySubset($subset, $array, bool $checkForObjectIdentity = false, string $message = ''){}
public function assertArrayNotHasKey($key, $array, string $message = ''){}
public function assertContains($needle, $haystack, string $message = '', bool $ignoreCase = false, bool $checkForObjectIdentity = true, bool $checkForNonObjectIdentity = false){}
public function assertAttributeContains($needle, string $haystackAttributeName, $haystackClassOrObject, string $message = '', bool $ignoreCase = false, bool $checkForObjectIdentity = true, bool $checkForNonObjectIdentity = false){}
public function assertNotContains($needle, $haystack, string $message = '', bool $ignoreCase = false, bool $checkForObjectIdentity = true, bool $checkForNonObjectIdentity = false){}
public function assertAttributeNotContains($needle, string $haystackAttributeName, $haystackClassOrObject, string $message = '', bool $ignoreCase = false, bool $checkForObjectIdentity = true, bool $checkForNonObjectIdentity = false){}
public function assertContainsOnly(string $type,  $haystack,  $isNativeType = null, string $message = ''){}
public function assertContainsOnlyInstancesOf(string $className,  $haystack, string $message = ''){}
public function assertAttributeContainsOnly(string $type, string $haystackAttributeName, $haystackClassOrObject,  $isNativeType = null, string $message = ''){}
public function assertNotContainsOnly(string $type,  $haystack,  $isNativeType = null, string $message = ''){}
public function assertAttributeNotContainsOnly(string $type, string $haystackAttributeName, $haystackClassOrObject,  $isNativeType = null, string $message = ''){}
public function assertCount(int $expectedCount, $haystack, string $message = ''){}
public function assertAttributeCount(int $expectedCount, string $haystackAttributeName, $haystackClassOrObject, string $message = ''){}
public function assertNotCount(int $expectedCount, $haystack, string $message = ''){}
public function assertAttributeNotCount(int $expectedCount, string $haystackAttributeName, $haystackClassOrObject, string $message = ''){}
public function assertEquals($expected, $actual, string $message = '', float $delta = 0.0, int $maxDepth = 10, bool $canonicalize = false, bool $ignoreCase = false){}
public function assertEqualsCanonicalizing($expected, $actual, string $message = ''){}
public function assertEqualsIgnoringCase($expected, $actual, string $message = ''){}
public function assertEqualsWithDelta($expected, $actual, float $delta, string $message = ''){}
public function assertAttributeEquals($expected, string $actualAttributeName, $actualClassOrObject, string $message = '', float $delta = 0.0, int $maxDepth = 10, bool $canonicalize = false, bool $ignoreCase = false){}
public function assertNotEquals($expected, $actual, string $message = '', $delta = 0.0, $maxDepth = 10, $canonicalize = false, $ignoreCase = false){}
public function assertNotEqualsCanonicalizing($expected, $actual, string $message = ''){}
public function assertNotEqualsIgnoringCase($expected, $actual, string $message = ''){}
public function assertNotEqualsWithDelta($expected, $actual, float $delta, string $message = ''){}
public function assertAttributeNotEquals($expected, string $actualAttributeName, $actualClassOrObject, string $message = '', float $delta = 0.0, int $maxDepth = 10, bool $canonicalize = false, bool $ignoreCase = false){}
public function assertEmpty($actual, string $message = ''){}
public function assertAttributeEmpty(string $haystackAttributeName, $haystackClassOrObject, string $message = ''){}
public function assertNotEmpty($actual, string $message = ''){}
public function assertAttributeNotEmpty(string $haystackAttributeName, $haystackClassOrObject, string $message = ''){}
public function assertGreaterThan($expected, $actual, string $message = ''){}
public function assertAttributeGreaterThan($expected, string $actualAttributeName, $actualClassOrObject, string $message = ''){}
public function assertGreaterThanOrEqual($expected, $actual, string $message = ''){}
public function assertAttributeGreaterThanOrEqual($expected, string $actualAttributeName, $actualClassOrObject, string $message = ''){}
public function assertLessThan($expected, $actual, string $message = ''){}
public function assertAttributeLessThan($expected, string $actualAttributeName, $actualClassOrObject, string $message = ''){}
public function assertLessThanOrEqual($expected, $actual, string $message = ''){}
public function assertAttributeLessThanOrEqual($expected, string $actualAttributeName, $actualClassOrObject, string $message = ''){}
public function assertFileEquals(string $expected, string $actual, string $message = '', bool $canonicalize = false, bool $ignoreCase = false){}
public function assertFileNotEquals(string $expected, string $actual, string $message = '', bool $canonicalize = false, bool $ignoreCase = false){}
public function assertStringEqualsFile(string $expectedFile, string $actualString, string $message = '', bool $canonicalize = false, bool $ignoreCase = false){}
public function assertStringNotEqualsFile(string $expectedFile, string $actualString, string $message = '', bool $canonicalize = false, bool $ignoreCase = false){}
public function assertIsReadable(string $filename, string $message = ''){}
public function assertNotIsReadable(string $filename, string $message = ''){}
public function assertIsWritable(string $filename, string $message = ''){}
public function assertNotIsWritable(string $filename, string $message = ''){}
public function assertDirectoryExists(string $directory, string $message = ''){}
public function assertDirectoryNotExists(string $directory, string $message = ''){}
public function assertDirectoryIsReadable(string $directory, string $message = ''){}
public function assertDirectoryNotIsReadable(string $directory, string $message = ''){}
public function assertDirectoryIsWritable(string $directory, string $message = ''){}
public function assertDirectoryNotIsWritable(string $directory, string $message = ''){}
public function assertFileExists(string $filename, string $message = ''){}
public function assertFileNotExists(string $filename, string $message = ''){}
public function assertFileIsReadable(string $file, string $message = ''){}
public function assertFileNotIsReadable(string $file, string $message = ''){}
public function assertFileIsWritable(string $file, string $message = ''){}
public function assertFileNotIsWritable(string $file, string $message = ''){}
public function assertTrue($condition, string $message = ''){}
public function assertNotTrue($condition, string $message = ''){}
public function assertFalse($condition, string $message = ''){}
public function assertNotFalse($condition, string $message = ''){}
public function assertNull($actual, string $message = ''){}
public function assertNotNull($actual, string $message = ''){}
public function assertFinite($actual, string $message = ''){}
public function assertInfinite($actual, string $message = ''){}
public function assertNan($actual, string $message = ''){}
public function assertClassHasAttribute(string $attributeName, string $className, string $message = ''){}
public function assertClassNotHasAttribute(string $attributeName, string $className, string $message = ''){}
public function assertClassHasStaticAttribute(string $attributeName, string $className, string $message = ''){}
public function assertClassNotHasStaticAttribute(string $attributeName, string $className, string $message = ''){}
public function assertObjectHasAttribute(string $attributeName, $object, string $message = ''){}
public function assertObjectNotHasAttribute(string $attributeName, $object, string $message = ''){}
public function assertSame($expected, $actual, string $message = ''){}
public function assertAttributeSame($expected, string $actualAttributeName, $actualClassOrObject, string $message = ''){}
public function assertNotSame($expected, $actual, string $message = ''){}
public function assertAttributeNotSame($expected, string $actualAttributeName, $actualClassOrObject, string $message = ''){}
public function assertInstanceOf(string $expected, $actual, string $message = ''){}
public function assertAttributeInstanceOf(string $expected, string $attributeName, $classOrObject, string $message = ''){}
public function assertNotInstanceOf(string $expected, $actual, string $message = ''){}
public function assertAttributeNotInstanceOf(string $expected, string $attributeName, $classOrObject, string $message = ''){}
public function assertInternalType(string $expected, $actual, string $message = ''){}
public function assertAttributeInternalType(string $expected, string $attributeName, $classOrObject, string $message = ''){}
public function assertIsArray($actual, string $message = ''){}
public function assertIsBool($actual, string $message = ''){}
public function assertIsFloat($actual, string $message = ''){}
public function assertIsInt($actual, string $message = ''){}
public function assertIsNumeric($actual, string $message = ''){}
public function assertIsObject($actual, string $message = ''){}
public function assertIsResource($actual, string $message = ''){}
public function assertIsString($actual, string $message = ''){}
public function assertIsScalar($actual, string $message = ''){}
public function assertIsCallable($actual, string $message = ''){}
public function assertIs($actual, string $message = ''){}
public function assertNotInternalType(string $expected, $actual, string $message = ''){}
public function assertIsNotArray($actual, string $message = ''){}
public function assertIsNotBool($actual, string $message = ''){}
public function assertIsNotFloat($actual, string $message = ''){}
public function assertIsNotInt($actual, string $message = ''){}
public function assertIsNotNumeric($actual, string $message = ''){}
public function assertIsNotObject($actual, string $message = ''){}
public function assertIsNotResource($actual, string $message = ''){}
public function assertIsNotString($actual, string $message = ''){}
public function assertIsNotScalar($actual, string $message = ''){}
public function assertIsNotCallable($actual, string $message = ''){}
public function assertIsNot($actual, string $message = ''){}
public function assertAttributeNotInternalType(string $expected, string $attributeName, $classOrObject, string $message = ''){}
public function assertRegExp(string $pattern, string $string, string $message = ''){}
public function assertNotRegExp(string $pattern, string $string, string $message = ''){}
public function assertSameSize($expected, $actual, string $message = ''){}
public function assertNotSameSize($expected, $actual, string $message = ''){}
public function assertStringMatchesFormat(string $format, string $string, string $message = ''){}
public function assertStringNotMatchesFormat(string $format, string $string, string $message = ''){}
public function assertStringMatchesFormatFile(string $formatFile, string $string, string $message = ''){}
public function assertStringNotMatchesFormatFile(string $formatFile, string $string, string $message = ''){}
public function assertStringStartsWith(string $prefix, string $string, string $message = ''){}
public function assertStringStartsNotWith($prefix, $string, string $message = ''){}
public function assertStringContainsString(string $needle, string $haystack, string $message = ''){}
public function assertStringContainsStringIgnoringCase(string $needle, string $haystack, string $message = ''){}
public function assertStringNotContainsString(string $needle, string $haystack, string $message = ''){}
public function assertStringNotContainsStringIgnoringCase(string $needle, string $haystack, string $message = ''){}
public function assertStringEndsWith(string $suffix, string $string, string $message = ''){}
public function assertStringEndsNotWith(string $suffix, string $string, string $message = ''){}
public function assertXmlFileEqualsXmlFile(string $expectedFile, string $actualFile, string $message = ''){}
public function assertXmlFileNotEqualsXmlFile(string $expectedFile, string $actualFile, string $message = ''){}
public function assertXmlStringEqualsXmlFile(string $expectedFile, $actualXml, string $message = ''){}
public function assertXmlStringNotEqualsXmlFile(string $expectedFile, $actualXml, string $message = ''){}
public function assertXmlStringEqualsXmlString($expectedXml, $actualXml, string $message = ''){}
public function assertXmlStringNotEqualsXmlString($expectedXml, $actualXml, string $message = ''){}
public function assertEqualXMLStructure(DOMElement $expectedElement, DOMElement $actualElement, bool $checkAttributes = false, string $message = ''){}
public function assertThat($value, $constraint, string $message = ''){}
public function assertJson(string $actualJson, string $message = ''){}
public function assertJsonStringEqualsJsonString(string $expectedJson, string $actualJson, string $message = ''){}
public function assertJsonStringNotEqualsJsonString($expectedJson, $actualJson, string $message = ''){}
public function assertJsonStringEqualsJsonFile(string $expectedFile, string $actualJson, string $message = ''){}
public function assertJsonStringNotEqualsJsonFile(string $expectedFile, string $actualJson, string $message = ''){}
public function assertJsonFileEqualsJsonFile(string $expectedFile, string $actualFile, string $message = ''){}
public function assertJsonFileNotEqualsJsonFile(string $expectedFile, string $actualFile, string $message = ''){}
public function logicalAnd(){}
public function logicalOr(){}
public function logicalNot($constraint){}
public function logicalXor(){}
public function anything(){}
public function isTrue(){}
public function callback(callable $callback){}
public function isFalse(){}
public function isJson(){}
public function isNull(){}
public function isFinite(){}
public function isInfinite(){}
public function isNan(){}
public function attribute($constraint, string $attributeName){}
public function contains($value, bool $checkForObjectIdentity = true, bool $checkForNonObjectIdentity = false){}
public function containsOnly(string $type){}
public function containsOnlyInstancesOf(string $className){}
public function arrayHasKey($key){}
public function equalTo($value, float $delta = 0.0, int $maxDepth = 10, bool $canonicalize = false, bool $ignoreCase = false){}
public function attributeEqualTo(string $attributeName, $value, float $delta = 0.0, int $maxDepth = 10, bool $canonicalize = false, bool $ignoreCase = false){}
public function isEmpty(){}
public function isWritable(){}
public function isReadable(){}
public function directoryExists(){}
public function fileExists(){}
public function greaterThan($value){}
public function greaterThanOrEqual($value){}
public function classHasAttribute(string $attributeName){}
public function classHasStaticAttribute(string $attributeName){}
public function objectHasAttribute($attributeName){}
public function identicalTo($value){}
public function isInstanceOf(string $className){}
public function isType(string $type){}
public function lessThan($value){}
public function lessThanOrEqual($value){}
public function matchesRegularExpression(string $pattern){}
public function matches(string $string){}
public function stringStartsWith($prefix){}
public function stringContains(string $string, bool $case = true){}
public function stringEndsWith(string $suffix){}
public function countOf(int $count){}
public function fail(string $message = ''){}
public function readAttribute($classOrObject, string $attributeName){}
public function getStaticAttribute(string $className, string $attributeName){}
public function getObjectAttribute($object, string $attributeName){}
public function markTestIncomplete(string $message = ''){}
public function markTestSkipped(string $message = ''){}
public function getCount(){}
public function resetCount(){}
}