  google.charts.load('current', {'packages':['bar']});
  google.charts.setOnLoadCallback(drawChart_0);
  google.charts.setOnLoadCallback(drawChart_1);
  google.charts.setOnLoadCallback(drawChart_2);
  google.charts.setOnLoadCallback(drawChart_du);
  
  function showHide(element_id) {
	//Если элемент с id-шником element_id существует
	if (document.getElementById(element_id)) { 
		//Записываем ссылку на элемент в переменную obj
		var obj = document.getElementById(element_id); 
		//Если css-свойство display не block, то: 
		if (obj.style.display != "block") { 
			obj.style.display = "block"; //Показываем элемент
		}
		else obj.style.display = "none"; //Скрываем элемент
	}
	//Если элемент с id-шником element_id не найден, то выводим сообщение
	else alert("Элемент с id: " + element_id + " не найден!"); 
  }   
			
  function drawChart_0() {
    var data = google.visualization.arrayToDataTable([
      ['Год', 'В крупных городах', 'В остальных городах', 'в т.ч. в областных центрах ....'],
      ['2018',  38.1, 88.5, 40.7],
      ['2019', 39.4, 103.4, 45.7]
    ]);

    var options = {
      chart: {
        title: ' ',
        subtitle: '',
      },
      bars: 'horizontal' // Required for Material Bar Charts.
    };

    var chart = new google.charts.Bar(document.getElementById('barchart_material_0'));
    chart.draw(data, google.charts.Bar.convertOptions(options));
  }

  function drawChart_1() {
    var data = google.visualization.arrayToDataTable([
      ['Год', 'В крупных городах', 'В остальных городах', 'в т.ч. в областных центрах ....'],
      ['2018', 76.2, 176.9, 81.3],
      ['2019', 80.5, 211.1, 93.2]
    ]);

    var options = {
      chart: {
        title: ' ',
        subtitle: '',
      },
      bars: 'horizontal' // Required for Material Bar Charts.
    };

    var chart = new google.charts.Bar(document.getElementById('barchart_material_1'));
    chart.draw(data, google.charts.Bar.convertOptions(options));
  }

  function drawChart_2() {
    var data = google.visualization.arrayToDataTable([
      ['Год', 'В крупных городах', 'В остальных городах', 'в т.ч. в областных центрах ....'],
      ['2018',  38.1, 88.5, 40.7],
      ['2019', 39.4, 103.4, 45.7]
    ]);

    var options = {
      chart: {
        title: ' ',
        subtitle: '',
      },
      bars: 'horizontal' // Required for Material Bar Charts.
    };

    var chart = new google.charts.Bar(document.getElementById('barchart_material_2'));
    chart.draw(data, google.charts.Bar.convertOptions(options));
  }

  function drawChart_du() {
    var data = google.visualization.arrayToDataTable([
      ['Год', 'Европейская кухня', 'Кавказкая кухня', 'Итальянская кухня', 'Французкая кухня', 'Азиатская кухня', 'Мясо', 
'Вегетерианское', 'Халяль', 'Кошерно'],
      ['2018',  38.1, 18.5, 14.7, 14.8, 13.1, 18.5, 4.7, 4.8, 4.8],
      ['2019', 39.4, 22.4, 24.7, 15.4, 16.4, 22.4, 5.7, 5.4, 5.4]
    ]);

    var options = {
      chart: {
        title: ' ',
        subtitle: '',
      },
      bars: 'horizontal' // Required for Material Bar Charts.
    };

    var chart = new google.charts.Bar(document.getElementById('barchart_material_du'));
    chart.draw(data, google.charts.Bar.convertOptions(options));
  }
