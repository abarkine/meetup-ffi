<?php declare(strict_types = 1);

$ffi = \FFI::load(__DIR__ . '/separate_header.h.h');

$ffi->printf('Hello %s!', 'world');
