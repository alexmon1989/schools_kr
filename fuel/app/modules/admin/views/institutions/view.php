<h2>Viewing #<?php echo $institution->id; ?></h2>

<p>
	<strong>Municipality id:</strong>
	<?php echo $institution->municipality_id; ?></p>
<p>
	<strong>Institution kind id:</strong>
	<?php echo $institution->institution_kind_id; ?></p>
<p>
	<strong>Institiution type id:</strong>
	<?php echo $institution->institiution_type_id; ?></p>
<p>
	<strong>Full title:</strong>
	<?php echo $institution->full_title; ?></p>
<p>
	<strong>Short title:</strong>
	<?php echo $institution->short_title; ?></p>
<p>
	<strong>Address:</strong>
	<?php echo $institution->address; ?></p>
<p>
	<strong>Telephone:</strong>
	<?php echo $institution->telephone; ?></p>
<p>
	<strong>Site:</strong>
	<?php echo $institution->site; ?></p>
<p>
	<strong>Ogrn inn:</strong>
	<?php echo $institution->ogrn_inn; ?></p>
<p>
	<strong>Data json:</strong>
	<?php echo $institution->data_json; ?></p>
<p>
	<strong>Latitude:</strong>
	<?php echo $institution->latitude; ?></p>
<p>
	<strong>Longtitude:</strong>
	<?php echo $institution->longtitude; ?></p>

<?php echo Html::anchor('admin/institutions/edit/'.$institution->id, 'Edit'); ?> |
<?php echo Html::anchor('admin/institutions', 'Back'); ?>