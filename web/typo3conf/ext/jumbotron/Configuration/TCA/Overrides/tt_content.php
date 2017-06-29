<?php
defined('TYPO3_MODE') or die();

$GLOBALS['TCA']['tt_content']['columns']['CType']['config']['items'][] = [
    'LLL:EXT:jumbotron/Resources/Private/Language/Tca.xlf:jumbotron_jumbotron.wizard.title',
    '--div--'
    ];

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPlugin(
    [
    'LLL:EXT:jumbotron/Resources/Private/Language/Tca.xlf:jumbotron_jumbotron.wizard.title',
    'jumbotron_jumbotron',
    'EXT:jumbotron/ext_icon.png'
    ], 'CType', 'jumbotron'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns(
    'tt_content', ['button_link' => [
        'exclude' => false,
        'label' => 'LLL:EXT:jumbotron/Resources/Private/Language/Tca.xlf:jumbotron_jumbotron.palette.button_link',
        'config' => [
            'type' => 'input',
            'renderType' => 'inputLink',
            'size' => 50,
            'max' => 1024,
            'eval' => 'trim',
            'fieldControl' => [
                'linkPopup' => [
                    'options' => [
                        'title' => 'LLL:EXT:jumbotron/Resources/Private/Language/Tca.xlf:jumbotron_jumbotron.palette.button_link',
                    ],
                ],
            ],
            'softref' => 'typolink'
        ]
    ],
    'button_text' => [
        'exclude' => false,
        'label' => 'LLL:EXT:jumbotron/Resources/Private/Language/Tca.xlf:jumbotron_jumbotron.palette.button_text',
        'config' => [
            'type' => 'input',
            'size' => 30,
            'max' => 255,
        ]
    ]], TRUE
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette(
    'tt_content', 'jumbotron_header', 'header;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_formlabel,'
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette(
    'tt_content', 'jumbotron_header', '--linebreak--'
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette(
    'tt_content', 'jumbotron_header', 'subheader;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:subheader_formlabel'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette(
    'tt_content', 'jumbotron_button', 'button_link;LLL:EXT:jumbotron/Resources/Private/Language/Tca.xlf:jumbotron_jumbotron.palette.button_link'
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette(
    'tt_content', 'jumbotron_button', 'button_text;LLL:EXT:jumbotron/Resources/Private/Language/Tca.xlf:jumbotron_jumbotron.palette.button_text'
);

$GLOBALS['TCA']['tt_content']['types']['jumbotron_jumbotron'] = array(
    'showitem' => '
         --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
            --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
            --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers;jumbotron_header,
            bodytext;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:bodytext_formlabel,
            --palette--;LLL:EXT:jumbotron/Resources/Private/Language/Tca.xlf:jumbotron_jumbotron.palette.button;jumbotron_button,
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
