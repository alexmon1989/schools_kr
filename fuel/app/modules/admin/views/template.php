<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo $title; ?></title>
	<?php echo Asset::css('//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css'); ?>
	<style>
		body { margin: 50px; }
	</style>
	<?php echo Asset::js(array(
		'//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js',
		'//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js',                
	)); ?>
        
        <?php if (isset($js)): ?>
            <?php echo Asset::js($js); ?>
        <?php endif; ?>
        
	<script>
		$(function(){ $('.topbar').dropdown(); });
	</script>
</head>
<body>

	<?php if ($current_user): ?>
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">Админ-часть</a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav">
					<li class="<?php echo Uri::segment(2) == '' ? 'active' : '' ?>">
						<?php echo Html::anchor('admin', 'Начало работы') ?>
					</li>
                                        <li class="<?php echo Uri::segment(2) == 'municipalities' ? 'active' : '' ?>"><?php echo Html::anchor('admin/municipalities', 'Муниципальные образования') ?></li>
                                        <li class="<?php echo Uri::segment(2) == 'institutions' ? 'active' : '' ?>"><?php echo Html::anchor('admin/institutions', 'Учреждения') ?></li>
                                        <li  class="dropdown <?php echo Uri::segment(2) == 'lists' ? 'active' : '' ?>">
                                            <a href="#" data-toggle="dropdown" class="dropdown-toggle">Списки <span class="caret"></span></a>
                                            <ul role="menu" class="dropdown-menu">
                                                <li><?php echo Html::anchor('admin/lists/kinds', 'Виды учреждений') ?></li>
                                                <li><?php echo Html::anchor('admin/lists/types', 'Типы учреждений') ?></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Настройки</a></li>
				</ul>
				<ul class="nav navbar-nav pull-right">
					<li class="dropdown">
						<a data-toggle="dropdown" class="dropdown-toggle" href="#"><?php echo $current_user->username ?> <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><?php echo Html::anchor('admin/logout', 'Выход') ?></li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<?php endif; ?>

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1><?php echo $title; ?></h1>
				<hr>
<?php if (Session::get_flash('success')): ?>
				<div class="alert alert-success alert-dismissable">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<p>
					<?php echo implode('</p><p>', (array) Session::get_flash('success')); ?>
					</p>
				</div>
<?php endif; ?>
<?php if (Session::get_flash('error')): ?>
				<div class="alert alert-danger alert-dismissable">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<p>
					<?php echo implode('</p><p>', (array) Session::get_flash('error')); ?>
					</p>
				</div>
<?php endif; ?>
			</div>
			<div class="col-md-12">
<?php echo $content; ?>
			</div>
		</div>
		<hr/>
		<footer>
			<p class="pull-right">Page rendered in {exec_time}s using {mem_usage}mb of memory.</p>
			<p>
				<a href="http://fuelphp.com">FuelPHP</a> is released under the MIT license.<br>
				<small>Version: <?php echo e(Fuel::VERSION); ?></small>
			</p>
		</footer>
	</div>
</body>
</html>
