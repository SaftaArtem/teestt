<?php

namespace Coolryan\PreferenceExample\Block;

class Link extends \Magento\Framework\View\Element\Html\Link
{
    /**
     * Render block HTML.
     *
     * @return string
     */
    protected function _toHtml()
    {
        if (false != $this->getTemplate()) {
            return parent::_toHtml();
        }
        return '<button type="button" class="btn" data-toggle="modal" data-target="#register" data-whatever="@fat">' . $this->escapeHtml($this->getLabel()) . '</button>';
    }
}