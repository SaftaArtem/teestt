<?php
/**
 * Created by PhpStorm.
 * User: artem
 * Date: 29.08.18
 * Time: 16:55
 */

namespace Safta\SFT\Controller\Sandbox;

use Magento\Framework\App\Action\Action;
use Magento\Framework\Controller\ResultFactory;

/**
 * Class Index
 * @package Safta\SFTmenu\Controller\Frontend
 */
class Index extends Action
{
    /**
     * Default hello page with layout
     *
     * @return void
     */
    public function execute()
    {

        /** @var \Magento\Framework\View\Result\Page $page */
        $page = $this->resultFactory->create(ResultFactory::TYPE_PAGE);
        return $page;
    }

}