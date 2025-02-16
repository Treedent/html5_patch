<?php
/** @var $_EXTKEY */
$EM_CONF[$_EXTKEY] = [
    'title' => 'html5 self-closing tags patcher',
    'description' => 'This extension patches TYPO3 to eliminate non-HTML5-standard self-closing tags.',
    'category' => 'misc',
    'author' => 'Regis TEDONE',
    'state' => 'stable',
    'clearCacheOnLoad' => 1,
    'version' => '12.0.1',
    'constraints' => [
        'depends' => [
            'typo3' => '12.4.0-12.4.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
