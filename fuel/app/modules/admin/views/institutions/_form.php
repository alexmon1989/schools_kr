<div class="row">
    <?php echo Form::open(array("role"=>"form")); ?>
    <div class="col-md-6">            
            <div class="form-group">
                <?php echo Form::label('Муниципальное образование*', 'municipality_id', array('class'=>'control-label')); ?>
                <?php echo Form::select('municipality_id', Input::post('municipality_id', isset($institution) ? $institution->municipality_id : ''), $municipalities, array('class' => 'form-control')); ?>
            </div>

            <div class="form-group">
                <?php echo Form::label('Вид учреждения*', 'institution_kind_id', array('class'=>'control-label')); ?>
                <?php echo Form::select('institution_kind_id', Input::post('institution_kind_id', isset($institution) ? $institution->institution_kind_id : ''), $kinds, array('class' => 'form-control')); ?>
            </div>

            <div class="form-group">
                <?php echo Form::label('Тип учреждения*', 'institiution_type_id', array('class'=>'control-label')); ?>
                <?php echo Form::select('institution_type_id', Input::post('institution_type_id', isset($institution) ? $institution->institution_type_id : ''), $types, array('class' => 'form-control')); ?>
            </div>

            <div class="form-group">
                <?php echo Form::label('Полное название*', 'full_title', array('class'=>'control-label')); ?>
                <?php echo Form::input('full_title', Input::post('full_title', isset($institution) ? $institution->full_title : ''), array('class' => 'form-control', 'placeholder'=>'Полное название')); ?>
            </div>

            <div class="form-group">
                <?php echo Form::label('Короткое название', 'short_title', array('class'=>'control-label')); ?>
                <?php echo Form::input('short_title', Input::post('short_title', isset($institution) ? $institution->short_title : ''), array('class' => 'form-control', 'placeholder'=>'Короткое название')); ?>
            </div>

            <div class="form-group">
                <?php echo Form::label('Адрес', 'address', array('class'=>'control-label')); ?>
                <?php echo Form::input('address', Input::post('address', isset($institution) ? $institution->address : ''), array('class' => 'form-control', 'placeholder'=>'Адрес')); ?>
            </div>

            <div class="form-group">
                <?php echo Form::label('Телефон', 'telephone', array('class'=>'control-label')); ?>
                <?php echo Form::input('telephone', Input::post('telephone', isset($institution) ? $institution->telephone : ''), array('class' => 'form-control', 'placeholder'=>'Телефон')); ?>
            </div>

            <div class="form-group">
                <?php echo Form::label('Сайт', 'site', array('class'=>'control-label')); ?>
                <?php echo Form::input('site', Input::post('site', isset($institution) ? $institution->site : ''), array('class' => 'form-control', 'placeholder'=>'Сайт')); ?>
            </div>

            <div class="form-group">
                <?php echo Form::label('ОГРН/ИНН', 'ogrn_inn', array('class'=>'control-label')); ?>
                <?php echo Form::input('ogrn_inn', Input::post('ogrn_inn', isset($institution) ? $institution->ogrn_inn : ''), array('class' => 'form-control', 'placeholder'=>'ОГРН/ИНН')); ?>
            </div>

            <div class="form-group">
                <label class='control-label'>&nbsp;</label>
                <?php echo Form::submit('submit', 'Сохранить', array('class' => 'btn btn-primary')); ?>		
            </div>        
    </div>
    
    <div class="col-md-6">
        <div id="YMapsID" style="width: 100%; height: 399px;">&nbsp;</div>  
        <br><br>
        
        <p class="bg-primary" style="padding: 15px"><strong>Координаты</strong> (введите вручную или поставьте метку на карте выше на нужное место):</p>
            
            <div class="form-group">
                <?php echo Form::label('Широта', 'latitude', array('class'=>'control-label')); ?>
                <?php echo Form::input('latitude', Input::post('latitude', isset($institution) ? $institution->latitude : ''), array('class' => 'form-control', 'placeholder'=>'Широта')); ?>
            </div>

            <div class="form-group">
                <?php echo Form::label('Долгота', 'longtitude', array('class'=>'control-label')); ?>
                <?php echo Form::input('longtitude', Input::post('longtitude', isset($institution) ? $institution->longtitude : ''), array('class' => 'form-control', 'placeholder'=>'Долгота')); ?>
            </div>
    </div>
    <?php echo Form::close(); ?>
</div>