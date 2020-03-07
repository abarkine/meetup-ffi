<?php declare(strict_types = 1);

$ffi = \FFI::cdef(
    // Function(s) that we will be using that defined in following library 
    'void printf(char *const str, ...);',
    // libc.so.6 for linux systems
    '/usr/lib/libSystem.B.dylib'
);

$ffi->printf('Hello %s!', 'world');
