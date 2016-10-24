<?php include_once('app/view/include/header.php'); ?>
<h1 class="standalone-title">Contact us</h1>
<div class="page">
	<form action="<?php echo \Core\Url::get('index-contact'); ?>" method="post">
		<label for="email">Email : </label>
		<input type="text" name="email" id="email">
		<br>
		<label for="object">Object : </label>
		<input type="text" name="object" id="object">
		<br>
		<textarea name="message" id="" cols="30" rows="10"></textarea>
		<br>
		<input type="submit" value="Send">
	</form>
</div>
<?php include_once('app/view/include/footer.php'); ?>