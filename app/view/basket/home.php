<?php /** @var $data[] */ ?>
<?php include_once('app/view/include/header.php'); ?>
<h1 class="standalone-title">Basket</h1>
<div class="page">
	<?php include_once('app/view/include/basket-data.php'); ?>
	<?php
		if(isset($_SESSION['items'])) {
	?>
			<a href="<?php echo \Core\Url::get('payment-address'); ?>" class="button">Buy</a>
	<?php
		}
	?>
</div>
<?php include_once('app/view/include/footer.php'); ?>