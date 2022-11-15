<?php

/**
 * Extension Manager/Repository config file for ext "provider".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'Provider',
    'description' => 'provider package for TYPO3 sites',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'typo3' => '11.5.0-11.5.99',
            'fluid_styled_content' => '11.5.0-11.5.99',
            'rte_ckeditor' => '11.5.0-11.5.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'PatricEckhart\\Provider\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Patric Eckhart',
    'author_email' => 'mail@patriceckhart.com',
    'author_company' => 'Patric Eckhart',
    'version' => '1.0.0',
];
