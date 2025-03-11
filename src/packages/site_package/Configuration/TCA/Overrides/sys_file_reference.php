<?php

defined('TYPO3') or die;

// Only modify if advanced media preview is enabled
if (\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\GeorgRinger\News\Domain\Model\Dto\EmConfiguration::class)->isAdvancedMediaPreview()) {
    $GLOBALS['TCA']['sys_file_reference']['columns']['showinpreview']['config']['items'][] = [
        'label' => 'Show only on Homepage',
        'value' => 3
    ];
    $GLOBALS['TCA']['sys_file_reference']['columns']['showinpreview']['config']['items'][] = [
        'label' => 'Show only on Works overview page',
        'value' => 4
    ];
}

