<div class="jumbotron">
        <h2>Добро пожаловать, <i><?php echo $current_user->username; ?></i>!</h2>
	<p>Вы вошли в административную часть <b>геоинформационного образовательного Интернет–портала Краснодарского края</b></p>
</div>
<div class="row">
	<div class="col-md-4">
		<h3>Статистика</h3>
		<p>На данный момент в базе данных содержатся следующие объекты:</p>
                <table class="table">                    
                    <tbody>
                        <tr class="warning">
                            <td><b>Муниципальных образований</b></td>
                            <td><?php echo $municipalities_count; ?></td>
                        </tr>
                        <tr  class="success">
                            <td><b>Учреждений</b></td>
                            <td><?php echo $institutions_count; ?></td>
                        </tr>
                    </tbody>                    
                </table>
	</div>
	<div class="col-md-4">
            <h3>Последние учреждения</h3>
            <p>Последних 5 добавленных/редактированных учреждений с быстрой навигацией к ним:</p>
            <?php if ($last_insts): ?>
            <table class="table table-striped">                    
                <tbody>
                    <?php foreach ($last_insts as $value): ?>
                        <tr>
                            <td><b><?php echo $value->short_title; ?></b></td>
                            <td><b><?php echo Date::forge($value->updated_at)->format('%Y.%m.%d %H:%M'); ?></b></td>
                            <td><?php echo Html::anchor('admin/institutions/edit/'.$value->id, '<span class="glyphicon glyphicon-edit"></span>', array('title' => 'Редактировать')); ?></td>
                        </tr>                    
                    <?php endforeach; ?>
                </tbody>                    
            </table>
            <?php else: ?>
                <div class="alert alert-danger" role="alert"><strong>Информация отсутствует.</strong> <?php echo Html::anchor('admin/institutions/create', 'Добавьте'); ?> новое учреждение.</div>
            <?php endif; ?>
	</div>
	<div class="col-md-4">
		<h3>Популярные действия</h3>
                <p>Воспользуйтесь быстрой навигацией к необходимой функции:</p>
		<ul class="nav nav-pills nav-stacked">
                    <li><?php echo Html::anchor('admin/institutions/create', '<span class="glyphicon glyphicon-plus"></span> Добавить учреждение'); ?></li>
                    <li><?php echo Html::anchor('admin/municipalities', '<span class="glyphicon glyphicon-list"></span> Список муниципальных образований'); ?></li>
                    <li><?php echo Html::anchor('admin/institutions', '<span class="glyphicon glyphicon-list"></span> Список учреждений'); ?></li>
                </ul>
	</div>
</div>