<?php include PLUGIN_PATH . '/models/categories.php'; ?>
<?php $categories = Categories::tree(); ?>

Categories:

<div class="category-tree">
    <?php foreach ($categories as $cat) {
         Categories::buildCat($cat, $_REQUEST);
    }; ?>
</div>
