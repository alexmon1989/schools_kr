<div class="row">
    <div class="col-md-12"> 
        <br><br>
        <div role="alert" class="alert alert-info">
            <strong>Внимание!</strong> Данные ниже вы можете редактировать просто нажав на необходимую ячейку в таблице. Кнопку "Сохранить" после изменения данных нажимать не нужно.
        </div>
        
        <table class="table table-striped table-bordered" id="municipality-table">
            <tbody>
                <tr>
                    <td colspan="3"><strong>Информация об учреждении</strong></td>
                </tr>
                <tr>
                    <td>Количество обучающихся</td>
                    <td class="edit" id="count_students"><?php echo isset($institution->data_json->count_students) ? $institution->data_json->count_students : ''; ?></td>
                    <td></td>
                </tr>
                
                
                <tr>
                    <td colspan="3"><strong>Информации о лицензировании и аккредитации</strong></td>
                </tr>
                <tr>
                    <td>Лицензия №</td>
                    <td class="edit" id="license_number"><?php echo isset($institution->data_json->license_number) ? $institution->data_json->license_number : ''; ?></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Дата выдачи лицензии</td>
                    <td class="edit" id="license_date"><?php echo isset($institution->data_json->license_date) ? $institution->data_json->license_date : ''; ?></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Свидетельство о государственной аккредитации №</td>
                    <td class="edit" id="state_accreditation_number"><?php echo isset($institution->data_json->state_accreditation_number) ? $institution->data_json->state_accreditation_number : ''; ?></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Дата выдачи свидетельства о государственной аккредитации</td>
                    <td class="edit" id="state_accreditation_date"><?php echo isset($institution->data_json->state_accreditation_date) ? $institution->data_json->state_accreditation_date : ''; ?></td>
                    <td></td>
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
                    <td colspan="3"><strong>Условия обучения</strong></td>
                </tr>        
                <tr>
                    <td>Имеются буфеты, столовые</td>
                    <td class="edit_select" id="there_are_dining_rooms"><?php echo isset($institution->data_json->there_are_dining_rooms) ? $institution->data_json->there_are_dining_rooms : ''; ?></td>
                    <td>&nbsp;</td>
                </tr>    
                <tr>
                    <td>Число посадочных мест в столовых, буфетах - всего (мест)</td>
                    <td class="edit" id="seats_dining_rooms"><?php echo isset($institution->data_json->seats_dining_rooms) ? $institution->data_json->seats_dining_rooms : ''; ?></td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>Современное технологическое оборудование (да, нет)</td>
                    <td class="edit_select" id="modern_technics"><?php echo isset($institution->data_json->modern_technics) ? $institution->data_json->modern_technics : ''; ?></td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>Сотрудники, квалифицированные для работы на современном технологическом оборудовании (да, нет)</td>
                    <td class="edit_select" id="employees_modern_technics"><?php echo isset($institution->data_json->employees_modern_technics) ? $institution->data_json->employees_modern_technics : ''; ?></td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>Количество учащихся, получающих только горячие завтраки</td>
                    <td class="edit" id="students_hot_breakfasts"><?php echo isset($institution->data_json->students_hot_breakfasts) ? $institution->data_json->students_hot_breakfasts : ''; ?></td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>Количество учащихся, получающих только горячие обеды</td>
                    <td class="edit" id="students_hot_dinners"><?php echo isset($institution->data_json->students_hot_dinners) ? $institution->data_json->students_hot_dinners : ''; ?></td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>Количество учащихся, питающихся в школе и завтраками, и обедами</td>
                    <td class="edit" id="students_breakfasts_and_dinners"><?php echo isset($institution->data_json->students_breakfasts_and_dinners) ? $institution->data_json->students_breakfasts_and_dinners : ''; ?></td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>Число автотранспортных средств, предназначенных для хозяйственных нужд</td>
                    <td class="edit" id="vehicles_count"><?php echo isset($institution->data_json->vehicles_count) ? $institution->data_json->vehicles_count : ''; ?></td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>Количество смен</td>
                    <td class="edit" id="shifts_count"><?php echo isset($institution->data_json->shifts_count) ? $institution->data_json->shifts_count : ''; ?></td>
                    <td>&nbsp;</td>
                </tr>
                
                <tr>
                    <td colspan="3"><strong>Материально-техническая база</strong></td>
                </tr>        
                <tr>
                    <td>Год постройки</td>
                    <td class="edit" id="built_year"><?php echo isset($institution->data_json->built_year) ? $institution->data_json->built_year : ''; ?></td>
                    <td>&nbsp;</td>
                </tr>        
                <tr>
                    <td>Мощность</td>
                    <td class="edit" id="power"><?php echo isset($institution->data_json->power) ? $institution->data_json->power : ''; ?></td>
                    <td>&nbsp;</td>
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
            </tbody>
        </table>   

        <script>
            $(document).ready(function() {
                $('.edit').editable("<?php echo Uri::create('admin/institutions/edit_data_json/'.$institution->id); ?>", {
                    indicator : '<i>Сохранение...</i>',
                    tooltip   : 'Нажмите для редактирования',
                    placeholder : "",
                    submit  : 'OK',
                    style   : 'max-width:180px;max-height: 15px;'
                });
                
                $('.edit_select').editable("<?php echo Uri::create('admin/institutions/edit_data_json/'.$institution->id); ?>", {
                    data   : " {'Да':'Да','Нет':'Нет'}",
                    type   : 'select',
                    indicator : '<i>Сохранение...</i>',
                    tooltip   : 'Нажмите для редактирования',
                    placeholder : "",
                    submit  : 'OK',
                    style   : 'max-width:180px;max-height: 15px;'
                });
            });
        </script>
    </div>
</div>