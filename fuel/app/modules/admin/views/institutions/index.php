<h2>Listing Institutions</h2>
<br>
<?php if ($institutions): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Municipality id</th>
			<th>Institution kind id</th>
			<th>Institiution type id</th>
			<th>Full title</th>
			<th>Short title</th>
			<th>Address</th>
			<th>Telephone</th>
			<th>Site</th>
			<th>Ogrn inn</th>
			<th>Data json</th>
			<th>Latitude</th>
			<th>Longtitude</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($institutions as $item): ?>		<tr>

			<td><?php echo $item->municipality_id; ?></td>
			<td><?php echo $item->institution_kind_id; ?></td>
			<td><?php echo $item->institiution_type_id; ?></td>
			<td><?php echo $item->full_title; ?></td>
			<td><?php echo $item->short_title; ?></td>
			<td><?php echo $item->address; ?></td>
			<td><?php echo $item->telephone; ?></td>
			<td><?php echo $item->site; ?></td>
			<td><?php echo $item->ogrn_inn; ?></td>
			<td><?php echo $item->data_json; ?></td>
			<td><?php echo $item->latitude; ?></td>
			<td><?php echo $item->longtitude; ?></td>
			<td>
				<?php echo Html::anchor('admin/institutions/view/'.$item->id, 'View'); ?> |
				<?php echo Html::anchor('admin/institutions/edit/'.$item->id, 'Edit'); ?> |
				<?php echo Html::anchor('admin/institutions/delete/'.$item->id, 'Delete', array('onclick' => "return confirm('Are you sure?')")); ?>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Institutions.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('admin/institutions/create', 'Add new Institution', array('class' => 'btn btn-success')); ?>

</p>
