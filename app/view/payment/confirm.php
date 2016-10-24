<?php include_once('app/view/include/header.php'); ?>
	<h1 class="standalone-title">Confirm your order</h1>
	<div class="page">
		<?php include_once('app/view/include/basket-data.php'); ?>
		<ul class="resume">
			<li><strong>Title :</strong> <?= $_SESSION['information']['title'] ?></li>
			<li><strong>Name :</strong> <?= $_SESSION['information']['name'] ?></li>
			<li><strong>First name :</strong> <?= $_SESSION['information']['firstname'] ?></li>
			<li><strong>Email :</strong> <?= $_SESSION['information']['email'] ?></li>
			<li><strong>Address :</strong> <?= $_SESSION['information']['street'] ?></li>
			<li><strong>City :</strong> <?= $_SESSION['information']['city'] ?></li>
			<li><strong>Zip code :</strong> <?= $_SESSION['information']['zip'] ?></li>
			<li><strong>Country :</strong> <?= $_SESSION['information']['country'] ?></li>
		</ul>

		<form action="<?php echo \Core\Url::get('payment-thanks'); ?>" method="post">
			<input type="submit" value="Confirm">
			<a href="<?php echo \Core\Url::get('basket-home'); ?>" class="button left">Back</a>
		</form>
	</div>
<?php include_once('app/view/include/footer.php'); ?>