<?php declare(strict_types = 1);

$ffi = \FFI::load(__DIR__ . '/curl.h');

$escaped = $ffi->curl_escape('http://developer.speakap.io/#fragment?query1=value1&query2=value1 value2', 0);

var_dump($escaped);
var_dump(\FFI::typeof($escaped));
var_dump(\FFI::string($escaped));
