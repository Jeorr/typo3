<?php
defined('TYPO3_MODE') or die();

call_user_func(function () {

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPlugin(
       array(
          'LLL:EXT:jumbotron/Resources/Private/Language/Tca.xlf:jumbotron_jumbotron.wizard.title',
          'jumbotron_jumbotron',
          'EXT:jumbotron/ext_icon.png'
       ),
       'CType',
       'jumbotron'
    );

    $GLOBALS['TCA']['tt_content']['types']['jumbotron_jumbotron'] = array(
      'showitem' => '
         --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
            --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
            --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers;headers,
            bodytext;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:bodytext_formlabel,
      ',
      'columnsOverrides' => [
         'bodytext' => [
            'config' => [
               'enableRichtext' => true,
               'richtextConfiguration' => 'default'
            ]
         ]
      ]
   );
    
});
