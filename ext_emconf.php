<?php

$EM_CONF[$_EXTKEY] = array(
    'title' => 'QueryBuilder',
    'description' => 'Backend extension for query builder in list module.',
    'category' => 'be',
    'state' => 'alpha',
    'clearCacheOnLoad' => 0,
    'author' => 'Frank Naegler',
    'author_company' => 'TYPO3 GmbH',
    'version' => '0.0.1',
    'constraints' => array(
        'depends' => array(
            'typo3' => '8.0.0-8.2.99',
        ),
        'conflicts' => array(),
        'suggests' => array(),
    ),
);