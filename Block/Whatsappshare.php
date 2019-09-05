<?php

/**
 * Created: 05/09/2019
 *
 * @package   PHPAISS_CustomLog
 * @category  PHPAISS
 * @author    Yassine AISSAOUI
 * @copyright PHPAISS Magento 2
 */

namespace PHPAISS\Whatsappshare\Block;

use Magento\Framework\UrlInterface;
use Magento\Framework\View\Asset\Repository;
use Magento\Framework\View\Element\Template;
use \Learn\Whatsappshare\Helper\Data;

class Whatsappshare extends Template
{
    /**
     * @var Repository
     */
    public $assetRepository;

    /**
     * @var Data
     */
    public $helperData;

    /**
     * @var UrlInterface
     */
    public $url;

    /**
     * Whatsappshare constructor.
     *
     * @param Template\Context $context
     * @param Repository       $assetRepository
     * @param Data             $helperData
     * @param UrlInterface     $url
     * @param array            $data
     */
    public function __construct(
        Template\Context $context,
        Repository $assetRepository,
        Data $helperData,
        UrlInterface $url,
        array $data = []
    )
    {
        parent::__construct($context, $data);
        $this->assetRepository = $assetRepository;
        $this->helperData = $helperData;
        $this->url = $url;
    }
}