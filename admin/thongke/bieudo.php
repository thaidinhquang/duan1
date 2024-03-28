<div
id="myChart" style="width:100%; max-width:600px; height:500px;">
</div>

<script>
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {
const data = google.visualization.arrayToDataTable([
  ['Danh mục', 'Số lượng sản phẩm'],
  <?php
  $tongdm = count($listthongke);
  $i=1;
  foreach ($listthongke as $thongke) {
    extract($thongke);
    if($i==$tongdm) $dauphay=""; else $dauphay=",";
    echo "['" . $thongke['tendm']."',".$thongke['countsp']."]".$dauphay;
      $i +=1;
  }
  ?>
]);

const options = {
  title:'Thông kê danh mục sản phẩm',
  is3D:true
};

const chart = new google.visualization.PieChart(document.getElementById('myChart'));
  chart.draw(data, options);
}
</script>