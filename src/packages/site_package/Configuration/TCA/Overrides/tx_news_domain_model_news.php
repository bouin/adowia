<?php
defined('TYPO3') or die();

$fields = [
    'checkbox_new' => [
        'exclude' => false,
        'label' => 'Checkbox New updated',
        'config' => [
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'items' => [
                [
                    'label' => '',
                    'value' => 1
                ]
            ],
            'default' => 0
        ],
    ],
];

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tx_news_domain_model_news', $fields);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes(
    'tx_news_domain_model_news',
    'checkbox_new',
    '',  // You can specify the position here, like 'after:title'
    'before:title' // Specify where to place the field, after a specific field
);

$fields1 = [
    'location_simple' => [
        'exclude' => 1,
        'label' => 'Checkbox for font color',
        'config' => [
            'type' => 'check',
            'default' => 0
        ],
    ]
];

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tx_news_domain_model_news', $fields1);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes(
    'tx_news_domain_model_news',
    'location_simple',
    '',  // You can specify the position here, like 'after:title'
    'after:title' // Specify where to place the field, after a specific field
);
