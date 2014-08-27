<?php echo Form::open(array("role"=>"form")); ?>

    <div class="form-group">
        <?php echo Form::label('Название', 'value', array('class'=>'control-label')); ?>
        <?php echo Form::input('value', Input::post('value', isset($kind) ? $kind->value : ''), array('class' => 'form-control', 'placeholder'=>'Название')); ?>
    </div>

    <div class="form-group">
        <label class='control-label'>&nbsp;</label>
        <?php echo Form::submit('submit', 'Сохранить', array('class' => 'btn btn-primary')); ?>		
    </div>

<?php echo Form::close(); ?>