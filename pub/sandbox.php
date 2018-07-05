<?php
$objectManager = \Magento\Framework\App\ObjectManager::getInstance();
$abstractProductBlock = $block->getLayout()->createBlock('\Magento\Catalog\Block\Product\AbstractProduct');

$productCollection = $objectManager->create('Magento\Catalog\Model\ResourceModel\Product\CollectionFactory');
$collection = $productCollection->create()
    ->addAttributeToSelect('*')
    ->addAttributeToSort('created_at', 'DESC')
    ->setPageSize(8)
    ->load();
?>
<div>
    <?php foreach ($collection as $product) :?>
        <div class="item-box">
            <a href="<?php echo $product->getProductUrl(); ?>" >
                <span class="imgbx">
                    <img src="<?php echo $abstractProductBlock->getImage($product, 'latest_collection_list')->getImageUrl(); ?>" alt="<?php echo $product->getName(); ?>" />
                </span>
                <h3><?php echo $product->getName(); ?></h3>
                <span class="hm-price"><?php echo $abstractProductBlock->getProductPrice($product) ?></span>
            </a>
        </div>
    <?php endforeach;  ?>
</div>
?>