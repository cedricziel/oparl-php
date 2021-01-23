<?php

return [
    'json-schema-file' => __DIR__ . '/json-schema.json',
    'root-class' => 'MyModel',
    'namespace' => 'OParl',
    'directory' => __DIR__ . '/src',
    'use-fixer' => true,
    'fixer-config-file' => '.php_cs.dist',
    'clean-generated' => true
];
