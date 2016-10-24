<?php include_once('app/view/include/header.php'); ?>
<h1 class="standalone-title">Payment</h1>
<div class="page">
	<?php include_once('app/view/include/basket-data.php'); ?>
	<form action="<?php echo \Core\Url::get('payment-confirm'); ?>" method="post">
		<label for="card">Card number : </label>
		<input type="text" name="card" id="card">
		<br>
		<label for="expiration">Expiration : </label>
		<input type="text" name="expiration" id="expiration">
		<br>
		<label for="cvc">CVC : </label>
		<input type="text" name="cvc" id="cvc">
		<br>
		<input type="submit" value="Pay">
		<a href="<?php echo \Core\Url::get('basket-home'); ?>" class="button left">Back</a>
	</form>
</div>
<?php include_once('app/view/include/footer.php'); ?>