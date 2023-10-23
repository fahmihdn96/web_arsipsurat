<?php
  $koneksi      = mysqli_connect("localhost", "root", "", "arsip_surat");
  $suratmasuk   = mysqli_query($koneksi, "SELECT * FROM tb_suratmasuk");
  $suratkeluar  = mysqli_query($koneksi, "SELECT * FROM tb_suratkeluar");
  
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <script src="js/Chart.js"></script>
    <style type="text/css">
            .container {
                width: 40%;
                margin: 15px auto;
            }
    </style>
  </head>
  <body>

    <div class="container">
        <canvas id="myChart" width="100" height="100"></canvas>
    </div>

  </body>
</html>

<script>
  var ctx = document.getElementById("myChart").getContext('2d');
  var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ["Surat Masuk", "Surat Keluar"],
      datasets: [{
        label: 'Data Surat Masuk dan Keluar',
        data: [
        <?php 
        echo mysqli_num_rows($suratmasuk);
        ?>, 
        <?php 
        echo mysqli_num_rows($suratkeluar);
        ?>
        ],
        backgroundColor: [
        '#29B0D0',
        '#2A516E'
        ],
        borderColor: [
        '#29B0D0',
        '#2A516E'
        ],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        yAxes: [{
          ticks: {
            beginAtZero:true
          }
        }]
      }
    }
  });
</script>

<!-- <script  type="text/javascript">
  var ctx = document.getElementById("piechart").getContext("2d");
  var data = {
    labels: ["Surat Masuk", "Surat Keluar"],
    datasets: [
      {
        label: '',
        data: [
          <?php 
              
          ?>,
          <?php
              
          ?>
        ],

        backgroundColor: [
        '#CBE0E3',
        '#979193'
        ]
      }
    ]
  };

  var myPieChart = new Chart(ctx, {
    type: 'pie',
    data: data,
    options: {
      responsive: true
    }
  });
</script> 
 -->


<!-- <!DOCTYPE html>
<html>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
<body>

<canvas id="myChart" style="width:100%;max-width:600px"></canvas>

<script>
var xValues = ["Italy", "France", "Spain", "USA", "Argentina"];
var yValues = [55, 49, 44, 24, 15];
var barColors = [
  "#b91d47",
  "#00aba9",
  "#2b5797",
  "#e8c3b9",
  "#1e7145"
];

new Chart("myChart", {
  type: "pie",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
    title: {
      display: true,
      text: "World Wide Wine Production 2018"
    }
  }
});
</script>

</body>
</html> -->