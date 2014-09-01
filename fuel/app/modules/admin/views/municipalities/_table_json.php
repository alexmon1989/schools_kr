<div class="row">
    <div class="col-md-12"> 
        <br><br>
        <div role="alert" class="alert alert-info">
            <strong>Внимание!</strong> Данные ниже вы можете редактировать просто нажав на необходимую ячейку в таблице. Кнопку "Сохранить" после изменения данных нажимать не нужно.
        </div>
        
        <table class="table table-striped table-bordered" id="municipality-table">
            <tbody>
                <tr>
                    <td colspan="3"><strong>Информация о муниципальном образовании</strong></td>
                </tr>
                <tr>
                    <td>Тип учреждения</td>
                    <td>Кол-во учреждений</td>
                    <td>Кол-во обучающихся</td>
                </tr>
                <tr>
                    <td>Общеобразовательное учреждение</td>
                    <td class="edit" id="educational_institution"><?php echo isset($institution->data_json->educational_institution) ? $institution->data_json->educational_institution : ''; ?></td>
                    <td class="edit" id="students_educational_institution"><?php echo isset($institution->data_json->students_educational_institution) ? $institution->data_json->students_educational_institution : ''; ?></td>
                </tr>
                <tr>
                    <td>Образовательное учреждение для детей дошкольного и младшего школьного возраста</td>
                    <td class="edit" id="educational_institution_children"><?php echo isset($institution->data_json->educational_institution_children) ? $institution->data_json->educational_institution_children : ''; ?></td>
                    <td class="edit" id="students_educational_institution_children"><?php echo isset($institution->data_json->students_educational_institution_children) ? $institution->data_json->students_educational_institution_children : ''; ?></td>
                </tr>
                <tr>
                    <td>Дошкольное образовательное учреждение</td>
                    <td class="edit" id="educational_institution_preschool"><?php echo isset($institution->data_json->educational_institution_preschool) ? $institution->data_json->educational_institution_preschool : ''; ?></td>
                    <td class="edit" id="students_educational_institution_preschool"><?php echo isset($institution->data_json->students_educational_institution_preschool) ? $institution->data_json->students_educational_institution_preschool : ''; ?></td>
                </tr>

                <tr>
                    <td colspan="3"><strong>Лицензии и аккредитации</strong></td>
                </tr>
                <tr>
                    <td>Наличие аккредитации</td>
                    <td class="edit" id="availability_accreditation"><?php echo isset($institution->data_json->availability_accreditation) ? $institution->data_json->availability_accreditation : ''; ?></td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>Наличие лицензии</td>
                    <td class="edit" id="availability_license"><?php echo isset($institution->data_json->availability_license) ? $institution->data_json->availability_license : ''; ?></td>
                    <td>&nbsp;</td>
                </tr>

                <tr>
                    <td colspan="3"><strong>Кадровый состав и заработная плата</strong></td>
                </tr>
                <tr>
                    <td>Число работников административно-управленческого персонала</td>
                    <td class="edit" id="administrative_personnel"><?php echo isset($institution->data_json->administrative_personnel) ? $institution->data_json->administrative_personnel : ''; ?></td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>Число работников учебно-вспомогательного персонала</td>
                    <td class="edit" id="support_staff"><?php echo isset($institution->data_json->support_staff) ? $institution->data_json->support_staff : ''; ?></td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>Средняя зарплата административно-управленческого персонала</td>
                    <td class="edit" id="administrative_personnel_salary"><?php echo isset($institution->data_json->administrative_personnel_salary) ? $institution->data_json->administrative_personnel_salary : ''; ?></td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>Средняя зарплата учебно-вспомогательного персонала</td>
                    <td class="edit" id="support_staff_salary"><?php echo isset($institution->data_json->support_staff_salary) ? $institution->data_json->support_staff_salary : ''; ?></td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>Число работников обслуживающего персонала</td>
                    <td class="edit" id="service_staff"><?php echo isset($institution->data_json->service_staff) ? $institution->data_json->service_staff : ''; ?></td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>Средняя зарплата обслуживающего персонала</td>
                    <td class="edit" id="service_staff_salary"><?php echo isset($institution->data_json->service_staff_salary) ? $institution->data_json->service_staff_salary : ''; ?></td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>Средний возраст работника</td>
                    <td class="edit" id="employee_age"><?php echo isset($institution->data_json->employee_age) ? $institution->data_json->employee_age : ''; ?></td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>Средний возраст педагогического работника</td>
                    <td class="edit" id="teacher_age"><?php echo isset($institution->data_json->teacher_age) ? $institution->data_json->teacher_age : ''; ?></td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>Число педагогических работников</td>
                    <td class="edit" id="teachers"><?php echo isset($institution->data_json->teachers) ? $institution->data_json->teachers : ''; ?></td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>Средняя зарплата педагогических работников</td>
                    <td class="edit" id="teachers_salary"><?php echo isset($institution->data_json->teachers_salary) ? $institution->data_json->teachers_salary : ''; ?></td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>Число работников</td>
                    <td class="edit" id="employees"><?php echo isset($institution->data_json->employees) ? $institution->data_json->employees : ''; ?></td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>Средняя зарплата работников</td>
                    <td class="edit" id="employees_salary"><?php echo isset($institution->data_json->employees_salary) ? $institution->data_json->employees_salary : ''; ?></td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>Число учителей, имеющих высшую категорию</td>
                    <td class="edit" id="highest_cat_teachers"><?php echo isset($institution->data_json->highest_cat_teachers) ? $institution->data_json->highest_cat_teachers : ''; ?></td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>Средняя зарплата учителей с высшей категорией</td>
                    <td class="edit" id="highest_cat_teachers_salary"><?php echo isset($institution->data_json->highest_cat_teachers_salary) ? $institution->data_json->highest_cat_teachers_salary : ''; ?></td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>Число учителей, имеющих первую категорию</td>
                    <td class="edit" id="first_cat_teachers"><?php echo isset($institution->data_json->first_cat_teachers) ? $institution->data_json->first_cat_teachers : ''; ?></td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>Средняя зарплата учителей первой категории</td>
                    <td class="edit" id="first_cat_teachers_salary"><?php echo isset($institution->data_json->first_cat_teachers_salary) ? $institution->data_json->first_cat_teachers_salary : ''; ?></td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>Число учителей, имеющих вторую категорию</td>
                    <td class="edit" id="second_cat_teachers"><?php echo isset($institution->data_json->second_cat_teachers) ? $institution->data_json->second_cat_teachers : ''; ?></td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>Средняя зарплата учителей второй категории</td>
                    <td class="edit" id="second_cat_teachers_salary"><?php echo isset($institution->data_json->second_cat_teachers_salary) ? $institution->data_json->second_cat_teachers_salary : ''; ?></td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>Число учителей не имеющих категории</td>
                    <td class="edit" id="no_cat_teachers"><?php echo isset($institution->data_json->no_cat_teachers) ? $institution->data_json->no_cat_teachers : ''; ?></td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>Средняя зарплата учителей без категории</td>
                    <td class="edit" id="no_cat_teachers_salary"><?php echo isset($institution->data_json->no_cat_teachers_salary) ? $institution->data_json->no_cat_teachers_salary : ''; ?></td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>Число прочих педагогических работников</td>
                    <td class="edit" id="others_teachers"><?php echo isset($institution->data_json->others_teachers) ? $institution->data_json->others_teachers : ''; ?></td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>Средняя зарплата прочего педагогического персонала</td>
                    <td class="edit" id="others_teachers_salary"><?php echo isset($institution->data_json->others_teachers_salary) ? $institution->data_json->others_teachers_salary : ''; ?></td>
                    <td>&nbsp;</td>
                </tr>

                <tr>
                    <td colspan="3"><strong>Результаты ЕГЭ/ГИА</strong></td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td><strong>Математика</strong></td>
                    <td><strong>Русский язык</strong></td>
                </tr>
                <tr>
                    <td>Средний первичный балл ЕГЭ</td>
                    <td class="edit" id="avarage_primary_point_ege_math"><?php echo isset($institution->data_json->avarage_primary_point_ege_math) ? $institution->data_json->avarage_primary_point_ege_math : ''; ?></td>
                    <td class="edit" id="avarage_primary_point_ege_rus"><?php echo isset($institution->data_json->avarage_primary_point_ege_rus) ? $institution->data_json->avarage_primary_point_ege_rus : ''; ?></td>
                </tr>
                <tr>
                    <td>Максимальный первичный балл ЕГЭ</td>
                    <td class="edit" id="max_primary_point_ege_math"><?php echo isset($institution->data_json->max_primary_point_ege_math) ? $institution->data_json->max_primary_point_ege_math : ''; ?></td>
                    <td class="edit" id="max_primary_point_ege_rus"><?php echo isset($institution->data_json->max_primary_point_ege_rus) ? $institution->data_json->max_primary_point_ege_rus : ''; ?></td>
                </tr>
                <tr>
                    <td>Средний тестовый балл ЕГЭ</td>
                    <td class="edit" id="avarage_test_point_ege_math"><?php echo isset($institution->data_json->avarage_test_point_ege_math) ? $institution->data_json->avarage_test_point_ege_math : ''; ?></td>
                    <td class="edit" id="avarage_test_point_ege_rus"><?php echo isset($institution->data_json->avarage_test_point_ege_rus) ? $institution->data_json->avarage_test_point_ege_rus : ''; ?></td>
                </tr>
                <tr>
                    <td>Средний тестовый балл ГИА в новой форме (9 класс)</td>
                    <td class="edit" id="avarage_test_point_gia_math"><?php echo isset($institution->data_json->avarage_test_point_gia_math) ? $institution->data_json->avarage_test_point_gia_math : ''; ?></td>
                    <td class="edit" id="avarage_test_point_gia_rus"><?php echo isset($institution->data_json->avarage_test_point_gia_rus) ? $institution->data_json->avarage_test_point_gia_rus : ''; ?></td>
                </tr>
                <tr>
                    <td>Максимальный тестовый балл ГИА в новой форме (9 класс)</td>
                    <td class="edit" id="amx_test_point_gia_math"><?php echo isset($institution->data_json->amx_test_point_gia_math) ? $institution->data_json->amx_test_point_gia_math : ''; ?></td>
                    <td class="edit" id="max_test_point_gia_rus"><?php echo isset($institution->data_json->max_test_point_gia_rus) ? $institution->data_json->max_test_point_gia_rus : ''; ?></td>
                </tr>
                <tr>
                    <td>Средняя отметка ГИА в новой форме (9 класс)</td>
                    <td class="edit" id="avarage_new_point_gia_math"><?php echo isset($institution->data_json->avarage_new_point_gia_math) ? $institution->data_json->avarage_new_point_gia_math : ''; ?></td>
                    <td class="edit" id="avarage_new_point_gia_rus"><?php echo isset($institution->data_json->avarage_new_point_gia_rus) ? $institution->data_json->avarage_new_point_gia_rus : ''; ?></td>
                </tr>

                <tr>
                    <td colspan="3"><strong>Материально-техническая база</strong></td>
                </tr>        
                <tr>
                    <td>Здание находится в аварийном состоянии</td>
                    <td class="edit" id="disrepair_building"><?php echo isset($institution->data_json->disrepair_building) ? $institution->data_json->disrepair_building : ''; ?></td>
                    <td>&nbsp;</td>
                </tr>    
                <tr>
                    <td>Требуется капитальный ремонт</td>
                    <td class="edit" id="needs_repair"><?php echo isset($institution->data_json->needs_repair) ? $institution->data_json->needs_repair : ''; ?></td>
                    <td>&nbsp;</td>
                </tr>    
                <tr>
                    <td>Школа введена в эксплуатацию после капитального ремонта</td>
                    <td class="edit" id="after_repair"><?php echo isset($institution->data_json->after_repair) ? $institution->data_json->after_repair : ''; ?></td>
                    <td>&nbsp;</td>
                </tr>

                <tr>
                    <td colspan="3"><strong>Карта подвоза</strong></td>
                </tr>   
                <tr>
                    <td>Кол-во детей от 1 до 3 лет (охваченные ДО)</td>
                    <td class="edit" id="count_1_3_years"><?php echo isset($institution->data_json->count_1_3_years) ? $institution->data_json->count_1_3_years : ''; ?></td>
                    <td>&nbsp;</td>
                </tr>  
                <tr>
                    <td>Кол-во детей от 3 до 7 лет (охваченные ДО)</td>
                    <td class="edit" id="count_3_7_years"><?php echo isset($institution->data_json->count_3_7_years) ? $institution->data_json->count_3_7_years : ''; ?></td>
                    <td>&nbsp;</td>
                </tr>  
                <tr>
                    <td>Очередь</td>
                    <td class="edit" id="queue"><?php echo isset($institution->data_json->queue) ? $institution->data_json->queue : ''; ?></td>
                    <td>&nbsp;</td>
                </tr>

                <tr>
                    <td colspan="3"><strong>Открытие дополнительных мест в ДОУ</strong></td>
                </tr> 
                <tr>
                    <td>Развитие муниципальной системы дошкольного образования</td>
                    <td class="edit" id="development_municipal"><?php echo isset($institution->data_json->development_municipal) ? $institution->data_json->development_municipal : ''; ?></td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>Использование негосударственного сектора дошкольного образования</td>
                    <td class="edit" id="non_state_sector"><?php echo isset($institution->data_json->non_state_sector) ? $institution->data_json->non_state_sector : ''; ?></td>
                    <td>&nbsp;</td>
                </tr>

                <tr>
                    <td colspan="3"><strong>Строительство ДОУ</strong></td>
                </tr> 
                <tr>
                    <td>Строится ДОУ</td>
                    <td class="edit" id="in_building"><?php echo isset($institution->data_json->in_building) ? $institution->data_json->in_building : ''; ?></td>
                    <td>&nbsp;</td>
                </tr>

                <tr>
                    <td colspan="3"><strong>Капитальный ремонт ОУ, ДОУ</strong></td>
                </tr> 
                <tr>
                    <td>Проведен капитальный ремонт в прошедшем году</td>
                    <td class="edit" id="last_year_repair"><?php echo isset($institution->data_json->last_year_repair) ? $institution->data_json->last_year_repair : ''; ?></td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>Проводится капитальный ремонт в текущем году</td>
                    <td class="edit" id="this_year_repair"><?php echo isset($institution->data_json->this_year_repair) ? $institution->data_json->this_year_repair : ''; ?></td>
                    <td>&nbsp;</td>
                </tr>
            </tbody>
        </table>   

        <script>
            $(document).ready(function() {
                $('.edit').editable("<?php echo Uri::create('admin/municipalities/edit_data_json/'.$institution->id); ?>", {
                    indicator : '<i>Сохранение...</i>',
                    tooltip   : 'Нажмите для редактирования',
                    placeholder : "",
                    submit  : 'OK'
                });
            });
        </script>
    </div>
</div>