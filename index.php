<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <title>CoronaVirus Tracker</title>


<style type="text/css">
  
body {
  margin-top: 90px; }

.navbar {
  box-shadow: 2px 2px 5px #3292a6;
  background: #fff;
  opacity: 0.9; }
  .navbar .nav-item {
    font-size: 1.4rem;
    padding-right: 20px; }
    .navbar .nav-item .nav-link {
      color: #252525; }
    .navbar .nav-item .nav-link:hover {
      color: #3292a6; }
  .navbar .nav-item:last-child {
    padding-right: 0; }



</style>

  </head>

  <body onload = "fetch()">

<nav class="navbar navbar-light navbar-expand-lg py-3 fixed-top">
    <div class="container">
      <a href="#showcase" class="navbar-brand">
        <img src="coro.jpg" class="img-fluid" width="80" height="80" alt="M">
        <h3 class="d-inline align-middle">COVID-19</h3>
      </a>
      <button class="navbar-toggler navbar-toggler-right" data-toggle="collapse" data-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="#overview">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#overview">Overview</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#livetracker">LiveTrack</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#prevention">Prevention</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#symptom">Symptoms</a>
          </li>
        
        </ul>
      </div>
    </div>
  </nav>









<!--<section id="share-main-section" class=" text-dark pt-4 py-2 mt-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-12">
          <img src="images.jfif" alt="Share" class="img-fluid rounded  py-3">
      
        </div>
        <div class="col-lg-6 col-md-12 bg-primary">
       <h2 class="font-weight-normal text-monospace text-justify text-left text-light">
     
     Let's Stay Safe & Fight Together
      Against CoronaVrus

</h2>
          

          </div>

          </div>
        </div>
      </div>
    
  </section>-->
  

  <!-- EXPLORE overview SECTION -->
  <section id="overview" class="bg-light py-5 text-dark">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-12 mt-2">
          <img src="c.jpeg" class="img-fluid rounded" alt="Explore">
        </div>
        <div class="col-lg-6 col-md-12">
          <h2>Overview</h2>
          <p class="lead">Coronavirus disease (COVID-19) is an infectious disease caused by a newly discovered coronavirus.
Most people infected with the COVID-19 virus will experience mild to moderate respiratory illness and recover without requiring special treatment.  Older people, and those with underlying medical problems like cardiovascular disease, diabetes, chronic respiratory disease, and cancer are more likely to develop serious illness.
The best way to prevent and slow down transmission is to be well informed about the COVID-19 virus, the disease it causes and how it spreads. Protect yourself and others from infection by washing your hands or using an alcohol based rub frequently and not touching your face. 
The COVID-19 virus spreads primarily through droplets of saliva or discharge from the nose when an infected person coughs or sneezes, so it’s important that you also practice respiratory etiquette (for example, by coughing into a flexed elbow).</p>
        
        </div>
      </div>
    </div>
  </section>











    <section class="corona-update" id="livetracker">
<div
class="mb-3 bg-danger text-center"
>
  <h2 class="text-uppercase text-light">COVID-19 LIVE UPDATES OF THE WORLD</h2>
</div>
  
    <div class="table-responsive">
    <table class="table text-center" id="tbval">
<!--<thead>-->
    <tr>
      <th>Country</th>
      <th>TotalConfirmed</th>
      <th>TotalRecovered</th>
      <th>TotalDeaths</th>
      <th>NewRecovered</th>
      <th>NewDeaths</th>
    </tr>
  <!--</thead>-->
 
 




</table>
</div>
</section>

 <!-- PREVENTION SECTION -->
  <section id="prevention" class="bg-light py-5 mt-5 text-dark">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-12 mt-2">
          <img src="p.jpeg" class="img-fluid rounded" alt="Explore">
        </div>
        <div class="col-lg-6 col-md-12">
          <h3>Prevention</h3>
          <p class="lead">
            
To prevent infection and to slow transmission of COVID-19, do the following:

Wash your hands regularly with soap and water, or clean them with alcohol-based hand rub.
Maintain at least 1 metre distance between you and people coughing or sneezing.
Avoid touching your face.
Cover your mouth and nose when coughing or sneezing.
Stay home if you feel unwell.
Refrain from smoking and other activities that weaken the lungs.
Practice physical distancing by avoiding unnecessary travel and staying away from large groups of people.


          </p>
        
        </div>
      </div>
    </div>
  </section>

<!-- SYMPTOM SECTION -->
  <section id="symptom" class="bg-primary py-5 text-light">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-12 mt-2">
          <img src="sy.jpeg" class="img-fluid rounded" alt="Explore">
        </div>
        <div class="col-lg-6 col-md-12">
          <h3>Symptoms</h3>
          <p class="lead">
 COVID-19 affects different people in different ways. Most infected people will develop mild to moderate illness and recover without hospitalization.

Most common symptoms:

fever.
dry cough.
tiredness.
Less common symptoms:

aches and pains.
sore throat.
diarrhoea.
conjunctivitis.
headache.
loss of taste or smell.
a rash on skin, or discolouration of fingers or toes.
Serious symptoms:

difficulty breathing or shortness of breath.
chest pain or pressure.
loss of speech or movement.
Seek immediate medical attention if you have serious symptoms.  Always call before visiting your doctor or health facility. 

People with mild symptoms who are otherwise healthy should manage their symptoms at home. 

On average it takes 5–6 days from when someone is infected with the virus for symptoms to show, however it can take up to 14 days. 

          </p>
        
        </div>
      </div>
    </div>
  </section>

 <!-- FOOTER SECTION -->
  <footer id="footer-section" class=" bg-dark text-center text-light py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
            <h2>COVID-19 Live Stats Tracker</h2>
            <!--<p>Copyright &copy; 2020</p>-->
            <span>Developed By:<h3 class="text-warning">Subhradip Das</h3></span>
            <br><br>
            
        </div>
      </div>
    </div>
  </footer>













<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <!-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>-->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<script>
  function fetch(){

  $.get("https://api.covid19api.com/summary",function(data){

  //console.log(data['Countries'].length);
   var tbval = document.getElementById('tbval');
   for( var i= 1; i<(data['Countries'].length);i++){

     var x = tbval.insertRow();
    x.insertCell(0);
  tbval.rows[i].cells[0].innerHTML = data['Countries'][i-1]['Country'];
  tbval.rows[i].cells[0].style.background = '#7a4a91';
   tbval.rows[i].cells[0].style.color = '#fff';

      x.insertCell(1);
    tbval.rows[i].cells[1].innerHTML = data['Countries'][i-1]['TotalConfirmed'];
 tbval.rows[i].cells[1].style.background = '#4bb7d8';

     x.insertCell(2);
    tbval.rows[i].cells[2].innerHTML = data['Countries'][i-1]['TotalRecovered'];
 tbval.rows[i].cells[2].style.background = '#f36e23';
  

    x.insertCell(3);
    tbval.rows[i].cells[3].innerHTML = data['Countries'][i-1]['TotalDeaths'];
 tbval.rows[i].cells[3].style.background = '#4bb7d8';
 
  x.insertCell(4);
    tbval.rows[i].cells[4].innerHTML = data['Countries'][i-1]['NewRecovered'];
 tbval.rows[i].cells[4].style.background = '#9cc850';

 x.insertCell(5);
    tbval.rows[i].cells[5].innerHTML = data['Countries'][i-1]['NewDeaths'];
 tbval.rows[i].cells[5].style.background = '#f36e23';


 }
}
  );
}

</script>

  </body>
</html>