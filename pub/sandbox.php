<?php
/**
 * @author Raj KB<magepsycho@gmail.com>
 * @website http://www.magepsycho.com
 */
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require __DIR__ . '/../app/bootstrap.php';
$bootstrap = \Magento\Framework\App\Bootstrap::create(BP, $_SERVER);
$obj = $bootstrap->getObjectManager();
$state = $obj->get('Magento\Framework\App\State');
$state->setAreaCode('frontend');

// Your quick and dirty code goes here...
$quote = $obj->get('Magento\Checkout\Model\Session')->getQuote()->load(1);
Zend_Debug::dump($quote->getOrigData());