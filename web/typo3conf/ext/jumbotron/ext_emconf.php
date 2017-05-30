<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Jumbotron',
    'description' => 'test extension',
    'category' => 'cli',
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'modify_tables' => '',
    'clearCacheOnLoad' => 0,
    'author' => 'Viktor Pastovenskyi',
    'author_email' => 'v.pastovenskyi@gmail.com',
    'author_company' => '',
    'version' => '1.0.0',
    'dependencies' => 'extbase,fluid',
    'constraints' => [
        'depends' => [
            'typo3' => '7.6.0-8.7.99',
            'extbase' => '1.0.0-0.0.0',
            'fluid' => '1.0.0-0.0.0',
        ],
        'conflicts' => [
        ],
        'suggests' => [
        ],
    ],
];
