<?php include PLUGIN_PATH . '/models/product.php'; ?>
<?php $product = Product::load($_REQUEST); ?>
<div class="product-box">
    
    <!-- Images -->
    <div class="product-image-box">
        <img class="product-image-big" src="<?php echo $product['default_image_url'] ?>"/>
        <?php $images = Product::getImages($product) ?>
        <?php foreach($images as $image): ?>
            <img class="product-image-small" src="<?php echo $image ?>"/>
        <?php endforeach; ?>
    </div>
    
    <!-- Product Info -->
    <div class="product-text-block">
        <div class="product-name"><?php echo $product['name'] ?></div>
        <div class="product-description"><?php echo $product['short_description'] ?></div>
        <div class="product-price">Price $<?php echo $product['price'] ?></div>
        <div class="product-description"><?php echo $product['description'] ?></div>
        <div class="product-weight">Weight: <?php echo $product['weight'] ?></div>
        <div class="product-sku">SKU: <?php echo $product['sku'] ?></div>
        
        
        
        <!-- Options -->
        <?php foreach ($product['options'] as  $option): ?>
            <div>
                <?php echo $option['label']; ?>
                <?php if($option['required']) echo '*'; ?>
                
                <!-- Select -->
                <?php if($option['type'] == 'select' || $option['type'] == 'multi_select'): ?>
                    <select <?php if($option['type'] == 'multi_select') echo 'multiple="multiple"' ?>>
                        <?php foreach ($option['options'] as $subOption): ?>
                            <option><?php echo $subOption['label'] ?></option>
                        <?php endforeach; ?>
                    </select>
                <?php endif ?>
                
                <!-- Field -->
                <?php if($option['type'] == 'field'): ?>
                    <input/>
                <?php endif; ?>
            </div>
        <?php endforeach; ?>
        
        <!-- Add to Cart -->
        <div class="product-buy"><a>Add to Cart</a> </div>
    </div>
</div>



