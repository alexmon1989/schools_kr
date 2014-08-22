function Map(){        
};

Map.prototype.coords = [45.023877, 38.970157];

Map.prototype.init = function (){
    this.myMap = new ymaps.Map('YMapsID', {
        center: [45.023877, 38.970157], // Краснодар
        zoom: 10
    });
    this.myMap.controls.remove('trafficControl');
    
    //Определяем метку и добавляем ее на карту				
    Map.prototype.myPlacemark = new ymaps.Placemark([45.023877, 38.970157],{}, {preset: "twirl#redIcon", draggable: true});	
    this.myMap.geoObjects.add(Map.prototype.myPlacemark);

    //Отслеживаем событие перемещения метки
    Map.prototype.myPlacemark.events.add("dragend", function (e) {			
        Map.prototype.coords = this.geometry.getCoordinates();
        Map.prototype.savecoordinats();
    }, Map.prototype.myPlacemark);

    //Отслеживаем событие щелчка по карте
    this.myMap.events.add('click', function (e) {        
        Map.prototype.coords = e.get('coords');
        Map.prototype.savecoordinats();
    });
};

Map.prototype.savecoordinats = function (){
    var new_coords = [Map.prototype.coords[0].toFixed(4), Map.prototype.coords[1].toFixed(4)];	
    Map.prototype.myPlacemark.geometry.setCoordinates(new_coords);
    $("#form_latitude").val(new_coords[0]);
    $("#form_longtitude").val(new_coords[1]);	
};

var map = new Map();

ymaps.ready(map.init);

//Функция для передачи полученных значений в форму
