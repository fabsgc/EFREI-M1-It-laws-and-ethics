<?php include_once('app/view/include/header.php'); ?>
<?php var_dump($data); ?>
	<!--<section class="article">
		<h2 class="title">Best T-shirt ever</h2>
		<img src="asset/img/product.png" alt="product" class="preview">
		<span class="price">57€</span>
		<a onclick="basket()" class="button">Add to my basket</a>
	</section>
	<section class="basket hidden no-opacity">
		<h2 class="title">My basket</h2>
		<table class="table">
			<thead>
			<tr>
				<th class="icon"></th>
				<th class="description">Description</th>
				<th class="quantity">Quantity</th>
				<th class="price">Price</th>
			</tr>
			</thead>
			<tbody>
			<tr>
				<td class="icon"><img src="asset/img/product.png" alt="product" class="preview"></td>
				<td class="description">Best T-shirt ever</td>
				<td class="quantity">1</td>
				<td class="price">57€</td>
			</tr>
			</tbody>
		</table>
		<a onclick="bill()" class="button">Proceed to payment</a>
	</section>
	<section class="bill hidden no-opacity">
		<h2 class="title">Confirmation</h2>
		<table class="table">
			<thead>
			<tr>
				<th class="icon"></th>
				<th class="description">Description</th>
				<th class="quantity">Quantity</th>
				<th class="price">Price</th>
			</tr>
			</thead>
			<tbody>
			<tr>
				<td class="icon"><img src="asset/img/product.png" alt="product" class="preview"></td>
				<td class="description">Best T-shirt ever</td>
				<td class="quantity">1</td>
				<td class="price">57€</td>
			</tr>
			<tr>
				<td class="description" colspan="3">Shipping</td>
				<td class="quantity">100€</td>
			</tr>
			<tr>
				<td class="description" colspan="3">Total</td>
				<td class="quantity">157€</td>
			</tr>
			</tbody>
		</table>
		<form action="">
			<input type="checkbox" id="checkbox-cgu">
			<label>
				I confirm that I accept the
				<a onclick="condition()">General Terms and Conditions of Sales</a>
			</label>
		</form>
		<a onclick="pay()" class="button">Confirm and pay</a>
	</section>
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