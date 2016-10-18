<?php
/** @var string $title */
?>
<!Doctype html>
<head>
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
	<title>E-Shop for lawyer - <?php echo htmlspecialchars($title); ?></title>
	<link rel="stylesheet" href="/<?php echo FOLDER; ?>asset/file/font-awesome-4.6.3/css/font-awesome.min.css">
	<link rel="stylesheet" href="/<?php echo FOLDER; ?>asset/css/default.css">
	<script src="/<?php echo FOLDER; ?>asset/js/jquery-3.1.1.min.js"></script>
	<script src="/<?php echo FOLDER; ?>asset/js/script.js"></script>
</head>
<body>
	<div id="root">
		<?php
		if(isset($_SESSION['flash']) && $_SESSION['flash'] != '') {
			?>
			<div class="flash">
				<i class="fa fa-times"></i>
				<div class="content">
					<?php echo $_SESSION['flash']; ?>
				</div>
			</div>
			<?php
			$_SESSION['flash'] = '';
		}
		?>
		<header>
			<div class="left">
				<a href="<?php echo \Core\Url::get('index-home'); ?>/">
					<h1>
						<i class="fa fa-car"></i>
						E-Shop for lawyer
					</h1>
				</a>
			</div>
			<div class="middle">

			</div>
			<div class="right">
				<a href="<?php echo \Core\Url::get('basket-home'); ?>" class="user">
					<i class="fa fa-shopping-basket"></i>
					<span>Basket</span>
				</a>
			</div>
		</header>
		<?php
		if($this->file == 'core/error.php'){
			echo '<div id="main" class="standalone-main">';
		}
		else{
			echo '<div id="main">';
		}
		?>

