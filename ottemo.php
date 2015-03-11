<?php include 'models/route.php' ?>
<?php include 'models/api.php' ?>

<?php define('PUBLIC_URL', plugin_dir_url(__FILE__)); ?>
<link href="<?php echo PUBLIC_URL . '/css/styles.css?' . uniqid() ?>" media="screen" rel="stylesheet" type="text/css">


<div class="header">
    <a href="?">Shop</a>
</div>
<div class="panel">
   <?php include 'views/category_tree.php' ?>
   <?php // include 'views/filters.php' ?>
</div>
<div class="content">
    <?php Route::content($_REQUEST) ?>
</div>
