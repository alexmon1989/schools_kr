<div class="row">
    <div class="col-md-6">            
        <?php echo Form::open(array("role"=>"form")); ?>

                <div class="form-group">
                    <?php echo Form::label('Название*', 'title', array('class'=>'control-label')); ?>
                    <?php echo Form::input('title', Input::post('title', isset($municipality) ? $municipality->title : ''), array('class' => 'form-control', 'placeholder'=>'Название')); ?>
                </div>
        
                <p class="bg-primary" style="padding: 15px"><strong>Координаты</strong> (введите вручную или поставьте метку на карте справа на нужное место):</p>

                <div class="form-group">
                    <?php echo Form::label('Широта', 'latitude', array('class'=>'control-label')); ?>
                    <?php echo Form::input('latitude', Input::post('latitude', isset($municipality) ? $municipality->latitude : ''), array('class' => 'form-control', 'placeholder'=>'Широта')); ?>
                </div>

                <div class="form-group">
                    <?php echo Form::label('Долгота', 'longtitude', array('class'=>'control-label')); ?>
                    <?php echo Form::input('longtitude', Input::post('longtitude', isset($municipality) ? $municipality->longtitude : ''), array('class' => 'form-control', 'placeholder'=>'Долгота')); ?>
                </div>

                <div class="form-group">
                    <label class='control-label'>&nbsp;</label>
                    <?php echo Form::submit('submit', 'Сохранить', array('class' => 'btn btn-primary')); ?>		
                </div>

        <?php echo Form::close(); ?>
    </div>
    
    <div class="col-md-6">
        <div id="YMapsID" style="width: 100%; height: 500px;">&nbsp;</div>        
    </div>
    
</div>