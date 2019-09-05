<?php
/**
 * Created: 05/09/2019
 *
 * @package   PHPAISS_CustomLog
 * @category  PHPAISS
 * @author    Yassine AISSAOUI
 * @copyright PHPAISS Magento 2
 */

namespace PHPAISS\Whatsappshare\Model\Source;

use Magento\Framework\Option\ArrayInterface;

class Size implements ArrayInterface
{
    /**
     * Return array of options as value-label pairs
     *
     * @return array
     */
    public function toOptionArray()
    {
        return array(
            array(
                'value' => '1',
                'label' => __('Small')
            ),
            array(
                'value' => '2',
                'label' => __('Medium')
            )
        );
    }

    /**
     * @return array
     */
    public function toArray() {
        return [
            '1' => __('Small'),
            '2' => __('Medium')
        ];
    }
}