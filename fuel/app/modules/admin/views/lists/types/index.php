<h2>Список <span class='text-muted'>типов учреждений</span></h2>
<br>

<p>
    <?php echo Html::anchor('admin/lists/types/create', '<span class="glyphicon glyphicon-plus"></span> Добавить', array('class' => 'btn btn-success')); ?>
</p>

<?php if ($list): ?>
<table class="table table-striped table-bordered" id="types-table">
	<thead>
            <tr>
                <th>#</th>
                <th>Название</th>
                <th width="20%">&nbsp;</th>
            </tr>
	</thead>
    <tbody>
<?php $i = 1; ?>            
<?php foreach ($list as $item): ?>		
        <tr>
            <td><?php echo $i; ?></td>
            <td><?php echo $item->value; ?></td>
            <td>
                <div class="btn-toolbar">
                    <div class="btn-group">
                        <?php echo Html::anchor('admin/lists/types/edit/'.$item->id, '<i class="glyphicon glyphicon-edit"></i> Редактировать', array('class' => 'btn btn-sm btn-primary')); ?>
                        <?php echo Html::anchor('admin/lists/types/delete/'.$item->id, '<i class="glyphicon glyphicon-trash"></i> Удалить', array('class' => 'btn btn-sm btn-danger', 'onclick' => "return confirm('Все учреждения с данным типом также будут безвозвратно удалены. Вы уверены?')")); ?>
                    </div>
                </div>
            </td>
        </tr>
        <?php $i++; ?> 
<?php endforeach; ?>	
    </tbody>
</table>

<script>
    $(document).ready( function () {
        $('#types-table').DataTable({
            "columnDefs": [ { "targets": 2, "orderable": false } ],
            "language" :  {url: '//cdn.datatables.net/plug-ins/725b2a2115b/i18n/Russian.json'}
        });
    } );
</script>

<?php else: ?>
<p>Информация отсутствует.</p>

<?php endif; ?>