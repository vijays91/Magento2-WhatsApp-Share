<?php
/**
 * @author VIJAYAKUMAR S
 * @copyright Copyright (c) 2018
 * @package Learn_Whatsappshare
 */
namespace Learn\Whatsappshare\Model\Source;

class Size implements \Magento\Framework\Option\ArrayInterface
{
    public function toOptionArray() {
        return array(
            array(
                'value' => '1',
                'label' => __('Small')
            ),
            array(
                'value' => '2',
                'label' => __('Medium')
            ),
            array(
                'value' => '3',
                'label' => __('Large')
            )
        );
    }

    public function toArray() {
        return [
            '1' => __('Small'),
            '2' => __('Medium'),
            '3' => __('Large')
        ];
    }
}