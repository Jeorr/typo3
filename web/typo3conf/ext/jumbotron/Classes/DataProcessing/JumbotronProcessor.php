<?php
namespace Jumbotron\Jumbotron\DataProcessing;

use TYPO3\CMS\Frontend\ContentObject\ContentObjectRenderer;
use TYPO3\CMS\Frontend\ContentObject\DataProcessorInterface;

class JumbotronProcessor implements DataProcessorInterface
{

    /**
     * Process data for the content element "My new content element"
     *
     * @param ContentObjectRenderer $cObj The data of the content element or page
     * @param array $contentObjectConfiguration The configuration of Content Object
     * @param array $processorConfiguration The configuration of this processor
     * @param array $processedData Key/value store of processed data (e.g. to be passed to a Fluid View)
     * @return array the processed data as key/value store
     */
    public function process(
        ContentObjectRenderer $cObj,
        array $contentObjectConfiguration,
        array $processorConfiguration,
        array $processedData
    )
    {
        $processedData['header_text'] = $processedData['data']['header'];
        $processedData['subheader_text'] = $processedData['data']['subheader'];
        $processedData['body_text'] = $processedData['data']['bodytext'];
        $processedData['button_link'] = $processedData['data']['button_link'];
        $processedData['button_text'] = $processedData['data']['button_text'];

        return $processedData;
    }
}
