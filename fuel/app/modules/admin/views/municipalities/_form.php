<?php echo Form::open(array("class"=>"form-horizontal")); ?>

	<fieldset>
		<div class="form-group">
			<?php echo Form::label('Title', 'title', array('class'=>'control-label')); ?>

				<?php echo Form::input('title', Input::post('title', isset($municipality) ? $municipality->title : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Title')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Latitude', 'latitude', array('class'=>'control-label')); ?>

				<?php echo Form::input('latitude', Input::post('latitude', isset($municipality) ? $municipality->latitude : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Latitude')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Longtitude', 'longtitude', array('class'=>'control-label')); ?>

				<?php echo Form::input('longtitude', Input::post('longtitude', isset($municipality) ? $municipality->longtitude : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Longtitude')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Data json', 'data_json', array('class'=>'control-label')); ?>

				<?php echo Form::textarea('data_json', Input::post('data_json', isset($municipality) ? $municipality->data_json : ''), array('class' => 'col-md-8 form-control', 'rows' => 8, 'placeholder'=>'Data json')); ?>

		</div>
		<div class="form-group">
			<label class='control-label'>&nbsp;</label>
			<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>		</div>
	</fieldset>
<?php echo Form::close(); ?>