<?php include_once('app/view/include/header.php'); ?>
<h1 class="standalone-title">Information</h1>
<div class="page">
	<?php include_once('app/view/include/basket-data.php'); ?>
	<form action="<?php echo \Core\Url::get('payment-pay'); ?>" method="post">
		<label for="title">Title : </label>
		<select name="title" id="title">
			<option value="Mr">Mr</option>
			<option value="Ms">Ms</option>
		</select>
		<br>
		<label for="email">Email : </label>
		<input type="text" name="email" id="email">
		<br>
		<label for="name">Name : </label>
		<input type="text" name="name" id="name">
		<br>
		<label for="firstname">Firstname : </label>
		<input type="text" name="firstname" id="firstname">
		<br>
		<label for="street">Address : </label>
		<input type="text" name="street" id="street">
		<br>
		<label for="city">City : </label>
		<input type="text" name="city" id="city">
		<br>
		<label for="zip">Zip code : </label>
		<input type="text" name="zip" id="zip">
		<br>
		<label for="country">Country : </label>
		<select name="country" id="country">
			<option value="france">France</option>
		</select>
		<br>
		<input type="checkbox" id="checkbox-cgu">
		<label id="checkbox-cgu">
			I confirm that I accept the
			<a href="<?php echo \Core\Url::get('index-policy'); ?>" target="_blank">General Terms and Conditions of Sales</a>
		</label>
		<br>
		<input type="submit" value="Proceed to payment">
		<a href="<?php echo \Core\Url::get('basket-home'); ?>" class="button left">Back</a>
	</form>
</div>
<?php include_once('app/view/include/footer.php'); ?>