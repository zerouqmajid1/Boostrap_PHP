<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<?php

include 'connect.php';

$sql = "SELECT * FROM capteur";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  
  while($row = $result->fetch_assoc()) {
     "id: " . $row["id"]. " - capteurv: " . $row["capteurv"]. " " . $row["capteurnam"]. "<br>";
   
    $results[] = $row["capteurv"];
  }
} else {
  echo "0 results";
}
$conn->close();
$a = $results;


?>


<head>
  <title>توليد الكهرباء بالطاقة الشمسية</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="css/css.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
 <link href="css/font-awesome.css" rel="stylesheet">
 <script src="js/Chart.min.js"></script>

</head>
<body>
  

    <nav class="navbar navbar-expand-lg navbar-light bg-bg">
        <img src="img/logo.jpg" class="rounded" alt="Cinque Terre" width="100" height="40">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
           
            </li>
            <li class="nav-item">
           
            </li>
            <li class="nav-item dropdown">
             
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                
                <div class="dropdown-divider"></div>
              
              </div>

            </li>
            <li class="nav-item">
              
           
            </li>
          </ul>
        
          <img src="img/bars-solid.svg" class="img-fluid" alt="Responsive image" width="40" height="40">

         
        </div>
      </nav>
      
      <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12 card  text-white">
                <div class="card-body">
                    <div class="row">
                        <div class="col"></div>
                        <div class="col"><img src="img/university.png"  style = "width: 150px; height: 100px; " class="img-fluid" alt="Responsive image"></div>
                        
                        <div class="col p-3 mb-2 bg-primary text-white text-center " >Instalation Photovoltaique<br>
                            توليد الكهرباء بالطاقة الشمسية
                        </div>
                        
                        <div class="col"><img src="img/ensaj.png"  style = "width: 150px; height: 100px; "  class="img-fluid" alt="Responsive image"></div>
                        <div class="col"></div>
                    </div>
                </div>
              </div>
      </div>
     </div>
<br>
      <div class="container-fluid">
        <div class="row">

          <div class="col-xl-5 ">
            <div class="card">
               
                <div class="card-body align-items-center d-flex justify-content-center text-danger font-weight-bold">BLANCE ENERGRTIQUE</div>
              </div>
            <div class="row">
                <div class="col ">
                <div class="card bg-warning text-white">
                        <div class="card-body "><div class="row">
                            <div class="col-xl-2"> </div>
                            <div class="col-xl-10">الشبكة العمومية  Réseau <hr class="new5"></div>
                        </div>
                         <div  class=" text-center  font-weight-bold">
                             <br><br>
                            <?php print_r ($a[0]); ?>  <br>
                            <?php print_r ($a[1]); ?> 
                              <br> <br> <br> <br> 
                         </div>  
                        </div>
                      </div>
                </div>
                <div class="col ">
                <div class="card bg-dark text-white">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-xl-2"> </div>
                                <div class="col-xl-10">مولد الطاقة الشمسية energie solaire<hr class="new5"> </div>
                                
                            </div>
                            <div  class=" text-center  font-weight-bold">
                            <?php print_r ($a[2]); ?>    <br>
                            <?php print_r ($a[3]); ?>     <br>
                            <?php print_r ($a[4]); ?>  <br><br>
                                <p class="text-danger">Objective :</p>
                                <?php print_r ($a[5]); ?>   
                            </div>  
                        </div>
                      </div>
                </div>
            </div><br>
            <div class="card bg-success text-white">
                <div class="card-body"><div class="row">
                    <div class="col-xl-2"> </div>
                    <div class="col-xl-10">الاسعمال Utilisation
                






                    <hr class="new5"> </div>
                    
                </div>
                <div  class=" text-center  font-weight-bold">
                    <div class="row">
                        <div class="col-xl-8">  <canvas id="myChart"></canvas></div>
                    <div class="col-xl-4"> <br><br><br>
                    <p id="demo"></p>
                    
                   </div>
                   
                </div>
<script>
var ReseauEnsaj , energiesolaireEnsaj ;
var obj, dbParam, xmlhttp;
obj = { "limit":10 };
dbParam = JSON.stringify(obj);
xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function() {
  if (this.readyState == 4 && this.status == 200) {
  
     var txt = this.responseText;
     var obj = JSON.parse(txt);
document.getElementById("demo").innerHTML = obj.Reseau + ", " + obj.energiesolaire;
     ReseauEnsaj = obj.Reseau;
    energiesolaireEnsaj = obj.energiesolaire;

    //---------------
    



  document.getElementById("demo").innerHTML = energiesolaireEnsaj +"kWH"+ "<br> " + ReseauEnsaj+"kWH";
var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'pie',
    data: {
        
        labels: ['Reseau', 'energiesolaire'],
        datasets: [{
            label: '# of Votes',
           
           
            data: [ReseauEnsaj, energiesolaireEnsaj],
           
       
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});


///---------------fin
}
};
xmlhttp.open("GET", "Utilisationchart.php?x=" + dbParam, true);
xmlhttp.send();

</script>
                </div>  
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col-xl-2"></div>
                <div class="col-xl-5"> 
                   <div class="card bg-success text-white divx" style = "width: 20px; height: 10px; display:inline-block;" >
                        <div class="card-body"></div>
                      </div>
                    <div style="display: inline-block;"  class="text-success">Autoconsommation</div> 
                </div>
                <div class="col-xl-5"> 
                    <div class="card bg-danger text-white" style = "width: 20px; height: 10px; display:inline-block;" >
                         <div class="card-body"></div>
                       </div>
                     <div style="display: inline-block;"  class="text-danger">Consommation reseau</div> 
                 </div>
              </div>

              <div class="row">
                <div class="col"></div>
                <div class="col">
              <button type="button" class="btn btn-outline-secondary">Ecron1</button><button type="button" class="btn btn-outline-secondary">Ecron2</button>
            </div>
            </div>
            </div>

          
          <div class="col-xl-7 ">
            <div class="row">
                <div class="col">
                    

                    <div class="card">
               
                        <div class="card-body align-items-center d-flex justify-content-center text-danger font-weight-bold">INDICATEURS--FEVRIER</div>
                      </div>
              <div class="row">
                <div class="col"><img src="img/panneau.png"  style = "width: 50px; height: 50px; " class="img-fluid" alt="Responsive image"></div>
                <div class="col"></div>
                <div class="col"> <?php print_r ($a[6]); ?> </div>
              </div>
              <div class="row">
                <div class="col"><img src="img/money.png"  style = "width: 50px; height: 50px; " class="img-fluid" alt="Responsive image"></div>
                <div class="col"></div>
                <div class="col"><?php print_r ($a[7]); ?>  </div>
              </div>
              <div class="row">
                <div class="col"><img src="img/co2.png"  style = "width: 50px; height: 50px; " class="img-fluid" alt="Responsive image"></div>
                <div class="col"></div>
                <div class="col"><?php print_r ($a[8]); ?> </div>
              </div>
                </div> 
                <div class="col">

                    <div class="card">
               
                        <div class="card-body align-items-center d-flex justify-content-center text-danger font-weight-bold">CAPTEURS</div>
                      </div>
                      <div class="row">
                        <div class="col"><img src="img/soleil.png"  style = "width: 50px; height: 50px; " class="img-fluid" alt="Responsive image"></div>
                        <div class="col">Température solaire</div>
                        <div class="col"> <?php print_r ($a[9]); ?></div>                      </div>
                      <div class="row">
                        <div class="col"><img src="img/weather.png"  style = "width: 50px; height: 50px; " class="img-fluid" alt="Responsive image"></div>
                        <div class="col">Température amblante</div>
                        <div class="col"><?php print_r ($a[10]); ?> </div>
                      </div>
                      <div class="row">
                        <div class="col"><img src="img/temperature.png"  style = "width: 50px; height: 50px; " class="img-fluid" alt="Responsive image"></div>
                        <div class="col">Température des modules</div>
                        <div class="col"><?php print_r ($a[11]); ?> </div>
                      </div>
                      <div class="row">
                        <div class="col"> Vitesse du vent</div>
                        <div class="col"> </div>
                        <div class="col"><?php print_r ($a[12]); ?> </div>
                      </div>
                </div>  

                
          </div>
          <div class="row">
            <div class="col-xl-12">
            <div class="card center ">
               
                <div class="card-body align-items-center d-flex justify-content-center text-danger font-weight-bold">ALARMES</div>
              </div>
            </div>
            

          </div>
          <div class="row">
            <div class="col"> <canvas id="myChart2"></canvas></div>
            <div class="col">
                Injection réseau <br>
                Alarme modulation <br>
                de puissance onduleur <br>
                Désequilibre de courant 
                String<br>
                Perte communication <p id="demo2"></p>
                </div>
                </div>
                <script>
var ReseauEnsaj , energiesolaireEnsaj ;
var obj, dbParam, xmlhttp;
obj = { "limit":10 };
dbParam = JSON.stringify(obj);
xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function() {
  if (this.readyState == 4 && this.status == 200) {
  
     var txt = this.responseText;
     var obj = JSON.parse(txt);
document.getElementById("demo2").innerHTML = obj.Injectionreseau + " kWH , " + obj.onduleur + " kWH, " + obj.Pertecommunication+"kWH";
InjectionreseauEnsaj = obj.Injectionreseau;
onduleurEnsaj = obj.onduleur;
PertecommunicationEnsaj = obj.Pertecommunication;

    //---------------
    



  
var ctx = document.getElementById('myChart2').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
        
        labels: ['Injectionreseau', 'onduleur', 'Pertecommunication'],
     
        datasets: [{
            label: '# of Votes',
         
           
            data: [InjectionreseauEnsaj, onduleurEnsaj, PertecommunicationEnsaj],
           
       
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});


///---------------fin
}
};
xmlhttp.open("GET", "alarmeschart.php?x=" + dbParam, true);
xmlhttp.send();

</script>
                <div class="col-xl-12">
                    <div class="card center ">
                       
                        <div class="card-body align-items-center d-flex justify-content-center text-danger font-weight-bold">FRACTION SOLAIRE --FEVRIER</div>
                      </div>
                    </div>
               <div class="row">
                   <div class="col"> <canvas id="myChart3"></canvas></div>
                   <div  class="col text-success"> <br><br><br><br> <p id="demo3"></p>8% - Target 0 %</div>
               </div>   
             
               <script>
var ReseauEnsaj , energiesolaireEnsaj ;
var obj, dbParam, xmlhttp;
obj = { "limit":10 };
dbParam = JSON.stringify(obj);
xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function() {
  if (this.readyState == 4 && this.status == 200) {
  
     var txt = this.responseText;
     var obj = JSON.parse(txt);
document.getElementById("demo3").innerHTML = obj.moi + "  , " + obj.valeurss ;
moiENSAJ = obj.moi;
valeurssENSAJ = obj.valeurss;


    //---------------
    

    var speedCanvas = document.getElementById("myChart3");

Chart.defaults.global.defaultFontFamily = "Lato";
Chart.defaults.global.defaultFontSize = 18;

var speedData = {
  labels: [moiENSAJ],
  datasets: [{
    label: "FRACTION SOLAIRE",
    data: [valeurssENSAJ],
    lineTension: 0,
    fill: false,
    borderColor: 'orange',
    backgroundColor: 'transparent',
    pointBorderColor: 'orange',
    pointBackgroundColor: 'rgba(255,150,0,0.5)',
    borderDash: [5, 5],
    pointRadius: 5,
    pointHoverRadius: 10,
    pointHitRadius: 30,
    pointBorderWidth: 2,
    pointStyle: 'rectRounded'
  }]
};

var chartOptions = {
  legend: {
    display: true,
    position: 'top',
    labels: {
      boxWidth: 80,
      fontColor: 'black'
    }
  },
  scales: {
    xAxes: [{
      gridLines: {
        display: false,
        color: "black"
      },
      scaleLabel: {
        display: true,
        labelString: "",
        fontColor: "red"
      }
    }],
    yAxes: [{
      gridLines: {
        color: "black",
        borderDash: [2, 5],
      },
      scaleLabel: {
        display: true,
        labelString: "",
        fontColor: "green"
      }
    }]
  }
};

var lineChart = new Chart(speedCanvas, {
  type: 'line',
  data: speedData,
  options: chartOptions
});

}
};
xmlhttp.open("GET", "fractionsolairechart.php?x=" + dbParam, true);
xmlhttp.send();

</script>
        </div>

        
      </div>


</body>
</html>




