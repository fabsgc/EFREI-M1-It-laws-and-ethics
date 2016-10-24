<table class="table">
	<thead>
	<tr>
		<th class="icon"></th>
		<th class="description">Description</th>
		<th class="quantity">Quantity</th>
		<th class="price">Price</th>
		<th class="price">VAT</th>
		<th class="price">Total</th>
		<?php
		if(\Core\Request::instance()->name == 'basket-home') {
		?>
			<th class="price">Actions</th>
		<?php
		}
		?>
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
					if($item['quantity'] > 1 && \Core\Request::instance()->name == 'basket-home'){
						?>
						<a href="<?php echo \Core\Url::get('basket-edit', [$item['item']['id'], $item['quantity'] - 1]); ?>">
							<span class="fa fa-minus"></span>
						</a>
						<?php
					}
					?>
					<?php echo $item['quantity']; ?>
					<?php
					if(\Core\Request::instance()->name == 'basket-home') {
						?>
						<a href="<?php echo \Core\Url::get('basket-edit', [$item['item']['id'], $item['quantity'] + 1]); ?>">
							<span class="fa fa-plus"></span>
						</a>
						<?php
					}
					?>
				</td>
				<td class="price"><?php echo $item['item']['price'] * $item['quantity']; ?>€</td>
				<td class="price"	>20%</td>
				<td class="price"><?php echo $item['item']['price'] * $item['quantity'] * 1.2; ?>€</td>
				<?php
				if(\Core\Request::instance()->name == 'basket-home') {
				?>
					<td class="price">
						<?php
						if(\Core\Request::instance()->name == 'basket-home'){
							?>
							<a href="<?php echo \Core\Url::get('basket-delete', [$item['item']['id']]); ?>">
								<span class="fa fa-times"></span>
							</a>
							<?php
						}
						?>
					</td>
				<?php
				}
				?>
			</tr>
			<?php
		}
		?>
		<tr>
			<td class="description" <?php if(\Core\Request::instance()->name == 'basket-home') { ?> colspan="6" <?php }else{ ?> colspan="5" <?php } ?>>Shipping</td>
			<td class="quantity">FREE</td>
		</tr>
		<tr>
			<td class="description" <?php if(\Core\Request::instance()->name == 'basket-home'){ ?> colspan="6" <?php }else{ ?> colspan="5" <?php } ?>>Total</td>
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