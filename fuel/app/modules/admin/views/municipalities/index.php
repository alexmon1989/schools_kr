<h2>Список <span class='text-muted'>Муниципальных образований</span></h2>
<br>
<?php if ($municipalities): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Title</th>
			<th>Latitude</th>
			<th>Longtitude</th>
			<th>Data json</th>
			<th>&nbsp;</th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($municipalities as $item): ?>		<tr>

			<td><?php echo $item->title; ?></td>
			<td><?php echo $item->latitude; ?></td>
			<td><?php echo $item->longtitude; ?></td>
			<td><?php echo $item->data_json; ?></td>
			<td>
				<div class="btn-toolbar">
					<div class="btn-group">
						<?php echo Html::anchor('municipalities/view/'.$item->id, '<i class="icon-eye-open"></i> View', array('class' => 'btn btn-small')); ?>						<?php echo Html::anchor('municipalities/edit/'.$item->id, '<i class="icon-wrench"></i> Edit', array('class' => 'btn btn-small')); ?>						<?php echo Html::anchor('municipalities/delete/'.$item->id, '<i class="icon-trash icon-white"></i> Delete', array('class' => 'btn btn-small btn-danger', 'onclick' => "return confirm('Are you sure?')")); ?>					</div>
				</div>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>Информация отсутствует.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('admin/municipalities/create', '<span class="glyphicon glyphicon-plus"></span> Добавить', array('class' => 'btn btn-success')); ?>

</p>
