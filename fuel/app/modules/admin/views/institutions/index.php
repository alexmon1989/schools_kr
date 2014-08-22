<h2>Список <span class='text-muted'>Образовательных учреждений</span></h2>
<br>

<p><?php echo Html::anchor('admin/institutions/create', '<span class="glyphicon glyphicon-plus"></span> Добавить', array('class' => 'btn btn-success')); ?></p>


<?php if ($institutions): ?>
<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Короткое название</th>
            <th>Вид учреждения</th>
            <th>Тип учреждения</th>
            <th>Муниципальное образование</th>
            <th>Последнее редактирование</th>
            <th>Создано</th>
            <th width="20%"></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($institutions as $item): ?>		
        <tr>
            <td><?php echo $item->id; ?></td>
            <td><?php echo $item->short_title; ?></td>
            <td><?php echo $item->institution_kind->value; ?></td>
            <td><?php echo $item->institution_type->value; ?></td>
            <td><?php echo $item->municipality->title; ?></td>
            <td><?php echo $item->updated_at; ?></td>
            <td><?php echo $item->created_at; ?></td>
            <td>
                <div class="btn-toolbar">
                    <div class="btn-group">
                        <?php echo Html::anchor('admin/institutions/edit/'.$item->id, '<i class="glyphicon glyphicon-edit"></i> Редактировать', array('class' => 'btn btn-sm btn-primary')); ?>
                        <?php echo Html::anchor('admin/institutions/delete/'.$item->id, '<i class="glyphicon glyphicon-trash"></i> Удалить', array('class' => 'btn btn-sm btn-danger', 'onclick' => "return confirm('Вы уверены?')")); ?>
                    </div>
                </div>
            </td>
	</tr>
    <?php endforeach; ?>	
    </tbody>
</table>

<?php else: ?>
<p>Данные отсутствуют.</p>

<?php endif; ?>