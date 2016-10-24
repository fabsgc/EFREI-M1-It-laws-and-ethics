<?php /** @var $data[] */ ?>
<?php include_once('app/view/include/header.php'); ?>
<div class="page">
	<div id="items">
		<?php foreach($data as $key => $item){ ?>
			<div class="item">
				<h2 class="title"><?php echo $item['name']; ?></h2>
				<img src="/<?php echo FOLDER; ?>asset/img/<?php echo $item['img']; ?>" alt="product" class="preview">
				<span class="price"><?php echo $item['price']; ?>€</span>
				<span class="description"><?php echo $item['description']; ?></span>
				<a href="<?php echo \Core\Url::get('basket-add', [$item['id']]); ?>" class="button">Add to my basket</a>
			</div>
		<?php } ?>
	</div>
</div>
	<!--
	<section class="pay hidden no-opacity">
		<h2 class="title">Payment</h2>
		<form>
			<input type="email" name="email" placeholder="Email">
			<input type="text" name="card" placeholder="Credit card number">
			<input type="text" name="expiration" placeholder="Expiration (mm/yyyy)">
			<input type="text" name="cvc" placeholder="CVC">
		</form>
		<a onclick="thanks()" class="button">Pay</a>
	</section>
	<section class="thanks hidden no-opacity">
		<h2 class="title">Thanks</h2>
		<p style="text-align:center;">An email has been sent to confirm your order. It will be delivered within 15 working days</p>
	</section>
	<section class="condition hidden no-opacity">
		<h2 class="title">General Term and Conditions of Sales</h2>
		<a onclick="conditionBack()" class="button">Back</a>
	</section>-->
<?php include_once('app/view/include/footer.php'); ?>