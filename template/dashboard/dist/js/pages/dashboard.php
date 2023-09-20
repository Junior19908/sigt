<script>
/*
 * Author: Abdullah A Almsaeed
 * Date: 4 Jan 2014
 * Description:
 *      This is a demo file used only for the main dashboard (index.html)
 **/

$(function () {

    'use strict'

    // Make the dashboard widgets sortable Using jquery UI
    $('.connectedSortable').sortable({
      placeholder         : 'sort-highlight',
      connectWith         : '.connectedSortable',
      handle              : '.card-header, .nav-tabs',
      forcePlaceholderSize: true,
      zIndex              : 999999
    })
    $('.connectedSortable .card-header, .connectedSortable .nav-tabs-custom').css('cursor', 'move')

    // jQuery UI sortable for the todo list
    $('.todo-list').sortable({
      placeholder         : 'sort-highlight',
      handle              : '.handle',
      forcePlaceholderSize: true,
      zIndex              : 999999
    })

    // bootstrap WYSIHTML5 - text editor
    $('.textarea').summernote()

    $('.daterange').daterangepicker({
      ranges   : {
        'Today'       : [moment(), moment()],
        'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
        'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
        'Last 30 Days': [moment().subtract(29, 'days'), moment()],
        'This Month'  : [moment().startOf('month'), moment().endOf('month')],
        'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
      },
      startDate: moment().subtract(29, 'days'),
      endDate  : moment()
    }, function (start, end) {
      window.alert('You chose: ' + start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
    })

    /* jQueryKnob */
    $('.knob').knob()

    // jvectormap data
    var visitorsData = {
      'US': 398, //USA
      'SA': 400, //Saudi Arabia
      'CA': 1000, //Canada
      'DE': 500, //Germany
      'FR': 760, //France
      'CN': 300, //China
      'AU': 700, //Australia
      'BR': 600, //Brazil
      'IN': 800, //India
      'GB': 320, //Great Britain
      'RU': 3000 //Russia
    }
    // World map by jvectormap
    $('#world-map').vectorMap({
      map              : 'usa_en',
      backgroundColor  : 'transparent',
      regionStyle      : {
        initial: {
          fill            : 'rgba(255, 255, 255, 0.7)',
          'fill-opacity'  : 1,
          stroke          : 'rgba(0,0,0,.2)',
          'stroke-width'  : 1,
          'stroke-opacity': 1
        }
      },
      series           : {
        regions: [{
          values           : visitorsData,
          scale            : ['#ffffff', '#0154ad'],
          normalizeFunction: 'polynomial'
        }]
      },
      onRegionLabelShow: function (e, el, code) {
        if (typeof visitorsData[code] != 'undefined')
          el.html(el.html() + ': ' + visitorsData[code] + ' new visitors')
      }
    })

    // Sparkline charts
    var sparkline1 = new Sparkline($("#sparkline-1")[0], {width: 80, height: 50, lineColor: '#92c1dc', endColor: '#ebf4f9'});
    var sparkline2 = new Sparkline($("#sparkline-2")[0], {width: 80, height: 50, lineColor: '#92c1dc', endColor: '#ebf4f9'});
    var sparkline3 = new Sparkline($("#sparkline-3")[0], {width: 80, height: 50, lineColor: '#92c1dc', endColor: '#ebf4f9'});

    sparkline1.draw([1000, 1200, 920, 927, 931, 1027, 819, 930, 1021]);
    sparkline2.draw([515, 519, 520, 522, 652, 810, 370, 627, 319, 630, 921]);
    sparkline3.draw([15, 19, 20, 22, 33, 27, 31, 27, 19, 30, 21]);

    // The Calender
    $('#calendar').datetimepicker({
      format: 'L',
      inline: true
    })

    // SLIMSCROLL FOR CHAT WIDGET
    $('#chat-box').overlayScrollbars({
      height: '250px'
    })

    /* Chart.js Charts */
    // Sales chart
    var salesChartCanvas = document.getElementById('revenue-chart-canvas').getContext('2d');
    //$('#revenue-chart').get(0).getContext('2d');

    var salesChartData = {
      labels  : ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
      datasets: [
        {
          label               : 'Digital Goods',
          backgroundColor     : 'rgba(60,141,188,0.9)',
          borderColor         : 'rgba(60,141,188,0.8)',
          pointRadius          : false,
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : [28, 48, 40, 19, 86, 27, 90]
        },
        {
          label               : 'Electronics',
          backgroundColor     : 'rgba(210, 214, 222, 1)',
          borderColor         : 'rgba(210, 214, 222, 1)',
          pointRadius         : false,
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : [65, 59, 80, 81, 56, 55, 40]
        },
      ]
    }

    var salesChartOptions = {
      maintainAspectRatio : false,
      responsive : true,
      legend: {
        display: false
      },
      scales: {
        xAxes: [{
          gridLines : {
            display : false,
          }
        }],
        yAxes: [{
          gridLines : {
            display : false,
          }
        }]
      }
    }

    // This will get the first returned node in the jQuery collection.
    var salesChart = new Chart(salesChartCanvas, {
        type: 'line',
        data: salesChartData,
        options: salesChartOptions
      }
    )

    // Donut Chart
    var pieChartCanvas = $('#sales-chart-canvas').get(0).getContext('2d')
    var pieData        = {
      labels: [
          'Instore Sales',
          'Download Sales',
          'Mail-Order Sales',
      ],
      datasets: [
        {
          data: [30,12,20],
          backgroundColor : ['#f56954', '#00a65a', '#f39c12'],
        }
      ]
    }
    var pieOptions = {
      legend: {
        display: false
      },
      maintainAspectRatio : false,
      responsive : true,
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    var pieChart = new Chart(pieChartCanvas, {
      type: 'doughnut',
      data: pieData,
      options: pieOptions
    });

    // Sales graph chart
    var salesGraphChartCanvas = $('#line-chart').get(0).getContext('2d');
    //$('#revenue-chart').get(0).getContext('2d');

    var salesGraphChartData = {
      labels  : ['2011 Q1', '2011 Q2', '2011 Q3', '2011 Q4', '2012 Q1', '2012 Q2', '2012 Q3', '2012 Q4', '2013 Q1', '2013 Q2'],
      datasets: [
        {
          label               : 'Digital Goods',
          fill                : false,
          borderWidth         : 2,
          lineTension         : 0,
          spanGaps : true,
          borderColor         : '#efefef',
          pointRadius         : 3,
          pointHoverRadius    : 7,
          pointColor          : '#efefef',
          pointBackgroundColor: '#efefef',
          data                : [2666, 2778, 4912, 3767, 6810, 5670, 4820, 15073, 10687, 8432]
        }
      ]
    }

    var salesGraphChartOptions = {
      maintainAspectRatio : false,
      responsive : true,
      legend: {
        display: false,
      },
      scales: {
        xAxes: [{
          ticks : {
            fontColor: '#efefef',
          },
          gridLines : {
            display : false,
            color: '#efefef',
            drawBorder: false,
          }
        }],
        yAxes: [{
          ticks : {
            stepSize: 5000,
            fontColor: '#efefef',
          },
          gridLines : {
            display : true,
            color: '#efefef',
            drawBorder: false,
          }
        }]
      }
    }
    // This will get the first returned node in the jQuery collection.
    var salesGraphChart = new Chart(salesGraphChartCanvas, {
        type: 'line',
        data: salesGraphChartData,
        options: salesGraphChartOptions
      }
    )

  })
  function drawChartBar() {
    var data = google.visualization.arrayToDataTable([
      ['Safras', 'Litros'],
      <?php
        $QUERY = mysqli_query($CONNECTIONINCLUDE, "SELECT IMP.*,SAF.inicio,SUM(litros) AS SOMASELITROSPROPRIO FROM `tb_import` AS IMP LEFT JOIN tb_safra AS SAF ON IMP.date_year=SAF.id_safra WHERE IMP.proprio_cod_veiculo IS NOT NULL GROUP BY IMP.date_year");
        while ($EXCLINHA = mysqli_fetch_array($QUERY)) {
          echo "['".$EXCLINHA["inicio"]." Prop', '".number_format($EXCLINHA["SOMASELITROSPROPRIO"], 2, ',', '.')."'],";
        }
        $QUERY = mysqli_query($CONNECTIONINCLUDE, "SELECT IMP.*,SAF.inicio,SUM(litros) AS SOMASELITROSFUNCIONARIO FROM `tb_import` AS IMP LEFT JOIN tb_safra AS SAF ON IMP.date_year=SAF.id_safra WHERE IMP.funcionario_cod_veiculo IS NOT NULL GROUP BY IMP.date_year");
        while ($EXCLINHA = mysqli_fetch_array($QUERY)) {
          echo "['".$EXCLINHA["inicio"]." Func', '".number_format($EXCLINHA["SOMASELITROSFUNCIONARIO"], 2, ',', '.')."'],";
        }
        $QUERY = mysqli_query($CONNECTIONINCLUDE, "SELECT IMP.*,SAF.inicio,SUM(litros) AS SOMASELITROSFORNECEDOR FROM `tb_import` AS IMP LEFT JOIN tb_safra AS SAF ON IMP.date_year=SAF.id_safra WHERE IMP.fornecedor_cod_veiculo IS NOT NULL GROUP BY IMP.date_year");
        while ($EXCLINHA = mysqli_fetch_array($QUERY)) {
          echo "['".$EXCLINHA["inicio"]." Fornec', '".number_format($EXCLINHA["SOMASELITROSFORNECEDOR"], 2, ',', '.')."'],";
        }
       ?>
      //['2017/2018', 3138557.50, 116445.85, 388284.01],
      //['2018/2019', 4224354.88, 110410.01, 540712.28],
      //['2019/2020', 3266247.96, 53970, 553086.38],
      //['2020/2021', 3266247.96, 53970, 553086.38]
    ]);

    var options = {
      chart: {
        title: 'Consumo de ',
        subtitle: 'Gráfico em Litros',
      },
      bars: 'vertical',
      vAxis: { format: 'decimal' },
      height: 400,
      colors: ['#109618', '#990099', '#109618']
    };

    var chart = new google.charts.Bar(document.getElementById('chart_div'));

    chart.draw(data, google.charts.Bar.convertOptions(options));

    var btns = document.getElementById('btn-group');

    btns.onclick = function (e) {

      if (e.target.tagName === 'BUTTON') {
        options.vAxis.format = e.target.id === 'none' ? '' : e.target.id;
        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    }
  }

  function drawChartPie() {

    var data = google.visualization.arrayToDataTable([
      ['BICO', 'LITROS'],
      <?php
        $QUERY = mysqli_query($CONNECTIONINCLUDE, "SELECT bomba,SUM(litros) AS SOMASELITROSBOMBAS FROM `tb_import` WHERE date_year='5' GROUP BY bomba");
        $Num = '123';
        while ($EXCLINHA = mysqli_fetch_array($QUERY)) {
          echo "['".$EXCLINHA["bomba"]."', '". $EXCLINHA['SOMASELITROSBOMBAS'] ."'],";
        }
       ?>
      //['Bomba 1', 1344840.86],
      //['Bomba 2', 425864.27],
      //['Bomba 3', 781517.54],
      //['Bomba 4', 723552.65],
      //['Bomba 5', 26.12],
      //['Bomba 6', 32],
      //['Bomba 7', 53073.01],
      //['Bomba 8', 172653.79]
    ]);

    var options = {
        title: 'Consumo por Bomba',
        pieHole:0.400,
    };

    var chart = new google.visualization.PieChart(document.getElementById('piechart'));

    chart.draw(data, options);
  }
</script>
