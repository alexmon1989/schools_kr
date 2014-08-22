<h2>Список <span class='text-muted'>Муниципальных образований</span></h2>
<br>

<p><?php echo Html::anchor('admin/municipalities/create', '<span class="glyphicon glyphicon-plus"></span> Добавить', array('class' => 'btn btn-success')); ?></p>

<?php if ($municipalities): ?>
<table class="table table-striped" id="municipalities_table">
    <thead>
        <tr>
            <th>#</th>
            <th>Название</th>
            <th width="20%">&nbsp;</th>
        </tr>
    </thead>
    <tbody>        
        <?php $i = 1; ?>
        <?php foreach ($municipalities as $item): ?>		
            <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $item->title; ?></td>
                <td>
                    <div class="btn-toolbar">
                        <div class="btn-group">
                            <?php echo Html::anchor('admin/municipalities/edit/'.$item->id, '<i class="glyphicon glyphicon-edit"></i> Редактировать', array('class' => 'btn btn-sm btn-primary')); ?>
                            <?php echo Html::anchor('admin/municipalities/delete/'.$item->id, '<i class="glyphicon glyphicon-trash"></i> Удалить', array('class' => 'btn btn-sm btn-danger', 'onclick' => "return confirm('В случае удаления муниципального образования будут также удалены все школы, которые в нём расположены. Вы уверены?')")); ?>
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
        $('#municipalities_table').DataTable({
            "columnDefs": [ { "targets": 2, "orderable": false } ],
            "language" :  {url: '//cdn.datatables.net/plug-ins/725b2a2115b/i18n/Russian.json'}
        });
    } );
</script>

<?php else: ?>
<p>Информация отсутствует.</p>

<?php endif; ?>
