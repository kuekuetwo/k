<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?=  $Wcms->get('config','siteTitle') ?> - <?= $Wcms->page('title') ?></title>
	<meta name="description" content="<?= $Wcms->page('description') ?>">
	<meta name="keywords" content="<?= $Wcms->page('keywords') ?>">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="<?= $Wcms->asset('css/style.css') ?>">
	<?= $Wcms->css() ?>

</head>
<body>
	<?= $Wcms->settings() ?>
	<?= $Wcms->alerts() ?>

	<nav class="navbar navbar-default">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu-collapse">
					<span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="<?= $Wcms->url() ?>">
					<?= $Wcms->get('config','siteTitle') ?>

				</a>
			</div>
			<div class="collapse navbar-collapse" id="menu-collapse">
				<ul class="nav navbar-nav navbar-right">
					<?= $Wcms->menu() ?>

				</ul>
			</div>
		</div>
	</nav>

	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center padding40">
				<?= $Wcms->page('content') ?>

			</div>
		</div>
	</div>

	<div class="container-fluid blueBackground whiteFont">
		<div class="row">
			<div class="col-lg-12 text-center padding40">
				<?= $Wcms->block('subside') ?>

			</div>
		</div>
	</div>

	<footer class="container-fluid">
		<div class="text-right padding20">
			<?= $Wcms->footer() ?>

		</div>
	</footer>

	<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha256-U5ZEeKfGNOja007MMD3YBI0A3OSZOQbeG6z2f2Y0hu8=" crossorigin="anonymous"></script>
	<?= $Wcms->js() ?>
</body>
</html>