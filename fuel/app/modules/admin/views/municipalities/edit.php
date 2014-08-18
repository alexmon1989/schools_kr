<h2>Editing <span class='muted'>Municipality</span></h2>
<br>

<?php echo render('municipalities/_form'); ?>
<p>
	<?php echo Html::anchor('municipalities/view/'.$municipality->id, 'View'); ?> |
	<?php echo Html::anchor('municipalities', 'Back'); ?></p>
