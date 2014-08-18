<div class="jumbotron">
        <h2>Добро пожаловать, <i><?php echo $current_user->username; ?></i>!</h2>
	<p>Вы вошли в административную часть <b>геоинформационного образовательного Интернет–портала Краснодарского края</b></p>
</div>
<div class="row">
	<div class="col-md-4">
		<h3>Статистика</h3>
		<p>На данный момент в базе данных содержится следующие объекты:</p>
                <table class="table">                    
                    <tbody>
                        <tr class="warning">
                            <td><b>Муниципальных образований</b></td>
                            <td>35</td>
                        </tr>
                        <tr  class="success">
                            <td><b>Учреждений</b></td>
                            <td>1000</td>
                        </tr>
                    </tbody>                    
                </table>
	</div>
	<div class="col-md-4">
            <h3>Последние учреждения</h3>
            <p>Последних 5 добавленных учреждений с быстрой навигацией к ним:</p>
            <table class="table table-striped">                    
                <tbody>
                    <tr>
                        <td><b>Школа №1</b></td>
                        <td>18.08.2014</td>
                        <td><a href="#" title="Редактировать"><span class="glyphicon glyphicon-edit"></span></a></td>
                    </tr>
                    <tr>
                        <td><b>Школа №2</b></td>
                        <td>18.08.2014</td>
                        <td><a href="#" title="Редактировать"><span class="glyphicon glyphicon-edit"></span></a></td>
                    </tr>
                </tbody>                    
            </table>
	</div>
	<div class="col-md-4">
		<h3>Популярные действия</h3>
                <p>Воспользуйтесь быстрой навигацией к необходимой функции:</p>
		<ul style="max-width: 300px;" class="nav nav-pills nav-stacked">
                    <li><a href="#"><span class="glyphicon glyphicon-plus"></span> Добавить учреждение</a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-list"></span> Список муниципальных образований</a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-list"></span> Список учреждений</a></li>
                </ul>
	</div>
</div>