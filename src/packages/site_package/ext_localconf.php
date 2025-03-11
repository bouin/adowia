<?php
defined('TYPO3');

// Add default RTE configuration
$GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['site_package'] = 'EXT:site_package/Configuration/RTE/Default.yaml';

//$GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects'][\GeorgRinger\News\Domain\Model\News::class] = [
//    'className' => \StudioThomPfister\SitePackage\Domain\Model\News::class
//];
$GLOBALS['TYPO3_CONF_VARS']['EXT']['news']['classes']['Domain/Model/News']['site_package'] = 'site_package';
//$GLOBALS['TYPO3_CONF_VARS']['EXT']['news']['classes']['Domain/Model/News'] = \StudioThomPfister\SitePackage\Domain\Model\News::class;
