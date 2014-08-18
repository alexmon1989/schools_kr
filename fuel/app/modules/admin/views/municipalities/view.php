<h2>Viewing <span class='muted'>#<?php echo $municipality->id; ?></span></h2>

<p>
	<strong>Title:</strong>
	<?php echo $municipality->title; ?></p>
<p>
	<strong>Latitude:</strong>
	<?php echo $municipality->latitude; ?></p>
<p>
	<strong>Longtitude:</strong>
	<?php echo $municipality->longtitude; ?></p>
<p>
	<strong>Data json:</strong>
	<?php echo $municipality->data_json; ?></p>

<?php echo Html::anchor('municipalities/edit/'.$municipality->id, 'Edit'); ?> |
<?php echo Html::anchor('municipalities', 'Back'); ?>