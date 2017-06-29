<?php
defined('TYPO3_MODE') or die();

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('
    mod.wizards.newContentElement.wizardItems.special {
        elements {
            jumbotron_jumbotron {
                iconIdentifier = actions-document-new
                title = LLL:EXT:jumbotron/Resources/Private/Language/Tca.xlf:jumbotron_jumbotron.wizard.title
                description = LLL:EXT:jumbotron/Resources/Private/Language/Tca.xlf:jumbotron_jumbotron.wizard.description
                tt_content_defValues {
                   CType = jumbotron_jumbotron
                }
            }
        }
        show := addToList(jumbotron_jumbotron)
    }
');

// Register for hook to show preview of tt_content element of CType="jumbotron_jumbotron" in page module
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['cms/layout/class.tx_cms_layout.php']['tt_content_drawItem']['jumbotron_jumbotron'] =
   \Jumbotron\Jumbotron\Hooks\PageLayoutViewDrawItemHook::class;