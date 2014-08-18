<?php echo Form::open(array("class"=>"form-horizontal")); ?>

	<fieldset>
		<div class="form-group">
			<?php echo Form::label('Municipality id', 'municipality_id', array('class'=>'control-label')); ?>

				<?php echo Form::input('municipality_id', Input::post('municipality_id', isset($institution) ? $institution->municipality_id : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Municipality id')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Institution kind id', 'institution_kind_id', array('class'=>'control-label')); ?>

				<?php echo Form::input('institution_kind_id', Input::post('institution_kind_id', isset($institution) ? $institution->institution_kind_id : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Institution kind id')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Institiution type id', 'institiution_type_id', array('class'=>'control-label')); ?>

				<?php echo Form::input('institiution_type_id', Input::post('institiution_type_id', isset($institution) ? $institution->institiution_type_id : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Institiution type id')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Full title', 'full_title', array('class'=>'control-label')); ?>

				<?php echo Form::input('full_title', Input::post('full_title', isset($institution) ? $institution->full_title : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Full title')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Short title', 'short_title', array('class'=>'control-label')); ?>

				<?php echo Form::input('short_title', Input::post('short_title', isset($institution) ? $institution->short_title : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Short title')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Address', 'address', array('class'=>'control-label')); ?>

				<?php echo Form::input('address', Input::post('address', isset($institution) ? $institution->address : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Address')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Telephone', 'telephone', array('class'=>'control-label')); ?>

				<?php echo Form::input('telephone', Input::post('telephone', isset($institution) ? $institution->telephone : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Telephone')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Site', 'site', array('class'=>'control-label')); ?>

				<?php echo Form::input('site', Input::post('site', isset($institution) ? $institution->site : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Site')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Ogrn inn', 'ogrn_inn', array('class'=>'control-label')); ?>

				<?php echo Form::input('ogrn_inn', Input::post('ogrn_inn', isset($institution) ? $institution->ogrn_inn : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Ogrn inn')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Data json', 'data_json', array('class'=>'control-label')); ?>

				<?php echo Form::textarea('data_json', Input::post('data_json', isset($institution) ? $institution->data_json : ''), array('class' => 'col-md-8 form-control', 'rows' => 8, 'placeholder'=>'Data json')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Latitude', 'latitude', array('class'=>'control-label')); ?>

				<?php echo Form::input('latitude', Input::post('latitude', isset($institution) ? $institution->latitude : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Latitude')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Longtitude', 'longtitude', array('class'=>'control-label')); ?>

				<?php echo Form::input('longtitude', Input::post('longtitude', isset($institution) ? $institution->longtitude : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Longtitude')); ?>

		</div>
		<div class="form-group">
			<label class='control-label'>&nbsp;</label>
			<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>		</div>
	</fieldset>
<?php echo Form::close(); ?>