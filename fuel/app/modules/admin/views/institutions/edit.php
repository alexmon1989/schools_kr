<h2>Editing Institution</h2>
<br>

<?php echo render('admin/institutions/_form'); ?>
<p>
	<?php echo Html::anchor('admin/institutions/view/'.$institution->id, 'View'); ?> |
	<?php echo Html::anchor('admin/institutions', 'Back'); ?></p>
