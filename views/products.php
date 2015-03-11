<?php include PLUGIN_PATH . '/models/products.php'; ?>
<?php $products = Products::get($_REQUEST); ?>

<div class="product-filters">
    Filters:
</div>

<div class="products">

    <?php foreach ($products as $product): ?>
        <div class="product-thumb">
            <a href="/ottemo?view=product&product_id=<?php echo $product['_id'] ?>">
                <img class="photos-thumb-image" src="<?php echo $product['default_image_url'] ?>"/>
            </a>
            <div class="thumb-name"><?php echo $product['name']; ?></div>
            <div class="thumb-price">$<?php echo $product['price']; ?></div>
            
        </div>
    <?php endforeach; ?>
    <?php if(!count($products)): ?>
        <div class="no-products">No Products Found</div>
    <?php endif ?>
</div>
