<?php
/**
 * Created by PhpStorm.
 * User: artem
 * Date: 31.08.18
 * Time: 14:41
 */

namespace Safta\SFTmenu\Controller\Saftamenu;

use Magento\Framework\App\Action\Action;
use Magento\Framework\Controller\ResultFactory;


class index extends Action
{
    public function execute()
    {
        $page = $this->resultFactory->create(ResultFactory::TYPE_PAGE);
        return $page;
    }
}