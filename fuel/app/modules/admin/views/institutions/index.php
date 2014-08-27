<h2>Список <span class='text-muted'>Образовательных учреждений</span></h2>
<br>

<p><?php echo Html::anchor('admin/institutions/create', '<span class="glyphicon glyphicon-plus"></span> Добавить', array('class' => 'btn btn-success')); ?></p>


<table class="table table-striped" id="institutions_table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Короткое название</th>
            <th>Вид учреждения</th>
            <th>Тип учреждения</th>
            <th>Муниципальное образование</th>
            <th>Последнее редактирование</th>
            <th width="13%">Создано</th>
            <th width="20%"></th>
        </tr>
    </thead>
    <tbody>
   
    </tbody>
</table>

<script>
    $(document).ready( function () {
        $('#institutions_table').DataTable({
            "order": [[ 5, "desc" ]],
            "columnDefs": [ { "targets": 7, "orderable": false, "searchable" : false } ],
            "processing": true,
            "serverSide": true,
            "stateSave": true,
            "ajax": "<?php echo Uri::create('admin/ajax/list.json'); ?>",
            "language" :  {url: '//cdn.datatables.net/plug-ins/725b2a2115b/i18n/Russian.json'}
        });    
    } );    
</script>
