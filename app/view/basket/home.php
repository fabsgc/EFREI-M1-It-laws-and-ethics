<?php /** @var $data[] */ ?>
<?php include_once('app/view/include/header.php'); ?>
<h1 class="standalone-title">Basket</h1>
<div class="page">
	<table class="table">
		<thead>
		<tr>
			<th class="icon"></th>
			<th class="description">Description</th>
			<th class="quantity">Quantity</th>
			<th class="price">Price</th>
			<th class="price">VAT</th>
			<th class="price">Total</th>
			<th class="price">Total</th>
		</tr>
		</thead>
		<tbody>
		<?php
			if(isset($_SESSION['items'])) {
				$total = 0;
				foreach ($_SESSION['items'] as $key => $item) { ?>
					<?php
						$total += $item['item']['price'] * $item['quantity'] * 1.2;
					?>
					<tr>
						<td class="icon"><img src="/<?php echo FOLDER; ?>asset/img/<?php echo $item['item']['img']; ?>" alt="product" class="preview"></td>
						<td class="description"><?php echo $item['item']['name']; ?></td>
						<td class="quantity">
							<?php
								if($item['quantity'] > 1){
							?>
									<a href="<?php echo \Core\Url::get('basket-edit', [$item['item']['id'], $item['quantity'] - 1]); ?>">
										<span class="fa fa-minus"></span>
									</a>
							<?php
								}
							?>
							<?php echo $item['quantity']; ?>
							<a href="<?php echo \Core\Url::get('basket-edit', [$item['item']['id'], $item['quantity'] + 1]); ?>">
								<span class="fa fa-plus"></span>
							</a>
						</td>
						<td class="price"><?php echo $item['item']['price'] * $item['quantity']; ?>€</td>
						<td class="price">20%</td>
						<td class="price"><?php echo $item['item']['price'] * $item['quantity'] * 1.2; ?>€</td>
						<td class="price">
							<a href="<?php echo \Core\Url::get('basket-delete', [$item['item']['id']]); ?>">
								<span class="fa fa-times"></span>
							</a>
						</td>
					</tr>
					<?php
				}
		?>
			<tr>
				<td class="description" colspan="6">Shipping</td>
				<td class="quantity">FREE</td>
			</tr>
			<tr>
				<td class="description" colspan="6">Total</td>
				<td class="quantity"><?php echo $total; ?>€</td>
			</tr>
		<?php
			}
			else{
		?>
			<tr>
				<td colspan="7">
					<h2 class="no-result">No products</h2>
				</td>
			</tr>
		<?php
			}
		?>
		</tbody>
	</table>
	<br />
	<?php
		if(isset($_SESSION['items'])) {
	?>
			<a href="<?php echo \Core\Url::get('payment-home'); ?>" class="button">Proceed to payment</a>
	<?php
		}
	?>
</div>
<?php include_once('app/view/include/footer.php'); ?>