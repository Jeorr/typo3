<?php
namespace Jumbotron\Jumbotron\Hooks;

class PageLayoutViewDrawItemHook implements \TYPO3\CMS\Backend\View\PageLayoutViewDrawItemHookInterface
{

    /**
     * Preprocesses the preview rendering of a content element.
     *
     * @param \TYPO3\CMS\Backend\View\PageLayoutView $parentObject Calling parent object
     * @param bool $drawItem Whether to draw the item using the default functionalities
     * @param string $headerContent Header content
     * @param string $itemContent Item content
     * @param array $row Record row of tt_content
     */
    public function preProcess(\TYPO3\CMS\Backend\View\PageLayoutView &$parentObject, &$drawItem, &$headerContent, &$itemContent, array &$row)
    {
        if ($row['CType'] === 'jumbotron_jumbotron') {
            $drawItem = false;

            $itemContent .= '<div class="jumbotron">';
            $itemContent .= '<h1 class="display-3">' . $row['header'] . '</h1>';
            $itemContent .= '<p class="lead">' . $row['subheader'] . '</p>';
            $itemContent .= '<hr class="my-4">';
            $itemContent .= '<div class="body-text">' . html_entity_decode($row['bodytext']) . '</div>';
            $itemContent .= '<p class="lead"><a class="btn btn-primary btn-lg" href="' . $row['button_link'] . '" role="button">' . $row['button_text'] . '</a></p>';
            $itemContent .= '</div>';
        }
    }
}
