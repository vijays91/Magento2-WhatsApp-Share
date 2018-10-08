<?php 
/**
 * @author VIJAYAKUMAR S
 * @copyright Copyright (c) 2018
 * @package Learn_Whatsappshare
 */
 
namespace Learn\Whatsappshare\Block;
 
use Magento\Framework\Registry;
use \Learn\Whatsappshare\Helper\Data;

class Whatsappshare extends \Magento\Framework\View\Element\Template
{
    public $assetRepository;

    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        array $data = [],
        \Magento\Framework\View\Asset\Repository $assetRepository,
        Data $helperData
    )
    {
        // Get the asset repository to get URL of our assets
        $this->assetRepository = $assetRepository;
        $this->_helperData = $helperData;
        return parent::__construct($context, $data);
    }
    public function helperInit() {
        return $this->_helperData;
    }
}