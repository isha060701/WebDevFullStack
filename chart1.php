<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Year', 'UG', 'PG', 'TOTAL'],
          ['2016', 64, 60, 124],
          ['2017', 149, 89, 238],
          ['2018', 270, 118, 388],
          ['2019', 242, 113, 355],
          ['2020', 469, 128, 583]
        ]);

        var options = {
          chart: {
            title: 'INTERNSHIPS',
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
  </head>
  <body>
    <div id="columnchart_material" style="width: 800px; height: 500px;"></div>
  </body>
</html>
