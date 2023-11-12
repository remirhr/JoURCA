<!DOCTYPE html>
<html lang="fr">
  <head>
    <title>Jeux de l'URCA 2024</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="img/justU.png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style1.css">
  </head>
  <body>
  <div class="" style="margin-bottom:-10px;">
      <nav style="background-color:#12142B; border:-10px; margin-top:-10px;margin-bottom:-10px;" class="navbar navbar-expand-lg bg-body-tertiary">
  <div style="background-color:#12142B;margin-bottom:-10px;" class="container-fluid">
  <a class="navbar-brand"  target='blank' href="https://www.univ-reims.fr/">
  <img src="img/justU.png" class="justUFirst" style="margin-top : 15px;" width="65" height="65">
      <img src="img/Logo_republique.png" class ="logorepu"style="margin-left:5px; margin-top:5px;" width="85" height="84">
      <img src="img/univlogo.png" class="logounive"style="margin-top:-20px;" width="270" height="54">
</a>


<ul >

  <li>
 
    @auth
    @can('admin')

  <a href="{{url('register')}}" class="button-35" >Creer un login</a>

  <a href="{{url('participant/')}}"class="button-35">
    Participants
  </a>

  <a href="{{url('resultat/')}}" class="button-35">
    Equipes
  </a>

  @endcan

  @can('orga')
  <a href="{{url('participant/')}}"class="button-35">
    Participants
  </a>

  <a href="{{url('resultat/')}}" class="button-35">
    Equipes
  </a>

  @endcan
  @endauth
  </li>


</ul>


<a class="navbar-brand"  target='blank' href="https://www.univ-reims.fr/vie-des-campus/actualites/jeux-de-l-urca-2024,10227,18297.html?args=_1Q7ZDyTGr_aYnJ6eSkKbjvGobgYR4YHCAuoCjfmJHNdadljx7BZnq3LOLKoPSThBNGLhb8IlQCw%2AO54ubSfbq2Id1e74NSXx%2AaYxjKQeTPP2Ai0yh_z8lMdDXjVsBON">
      <img src="img/justU.png" class="justU" width="65" height="65">
      </a>
     
</div>
  
</nav>
    </div>
    <section class="countdown-container" style="color:#fff;text-align:center; margin-top:15px;margin-left: auto;
    margin-right: auto;">

  <div class="days-container"  style="color:#fff;text-align:center; margin-top:15px;">
    <div class="days" id="days"></div>
    
    <div class="days-label">jours</div>
  </div>
  
  <div class="hours-container"  style="color:#fff;text-align:center; margin-top:15px;">
    <div class="hours" id="hours"></div>
    
    <div class="hours-label">heures</div>
  </div>
  
  <div class="minutes-container"  style="color:#fff;text-align:center; margin-top:15px;">
    <div class="minutes" id="minutes"></div>
    
    <div class="minutes-label">minutes</div>
  </div>
  
  <div class="seconds-container"  style="color:#fff;text-align:center; margin-top:15px;">
    <div class="seconds"id="seconds"></div>
   
    <div class="seconds-label">secondes</div>
  </div>

</section>
    

<script>
// Set the date we're counting down to
var countDownDate = new Date("Feb 12, 2024 18:00:00").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();

  // Find the distance between now and the count down date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Display the result in the element with id="demo"
  document.getElementById("days").innerHTML = days ;
  document.getElementById("hours").innerHTML = hours  ;
  document.getElementById("minutes").innerHTML = minutes ;
  document.getElementById("seconds").innerHTML = seconds ;
    
  // If the count down is finished, write some text
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("days").innerHTML = "EXPIRED";
    document.getElementById("hours").innerHTML = "EXPIRED";
    document.getElementById("minutes").innerHTML = "EXPIRED";
    document.getElementById("seconds").innerHTML = "EXPIRED";
  }
}, 1000);
</script>

    <div stye="border-color:black; margin-top:-10px;margin:-10px;margin-bottom:-10px;" class="container">
      <div stye="border-color:black; margin-top:-10px;margin:-10px;margin-bottom:-10px;" class="card mt-4">
        <div stye="border-color:black;margin-top:-10px; margin:-10px;margin-bottom:-10px;;" class="">@yield('title')</div>
        <div style="background-color:#12142B;margin:-10px;margin-bottom:-10px;  border-color:black; color:aliceblue; font-size:18px;" class="card-body">@yield('content')</div>
        &nbsp;
        <footer class="text-center text-white" style="background-color:#12142B; margin: -15px;">
  <!-- Grid container -->
  <div class="container p-4 pb-0">
    <!-- Section: Social media -->
    <section class="mb-4">
      <!-- Facebook -->
      <div class="hover">
      <a class="btn btn-outline-light btn-floating m-1"  target='blank'  href="https://www.univ-reims.fr/" role="button"
        ><i class="bi bi-facebook"></i
      ></a> 


      <!-- Twitter -->
      <a class="btn btn-outline-light btn-floating m-1" target='blank' href="https://twitter.com/universitereims" role="button"
        ><i class="bi bi-twitter"></i
      ></a>

      <!-- Google -->
      <a class="btn btn-outline-light btn-floating m-1"  target='blank' href="https://www.youtube.com/user/universitereims" role="button"
        ><i class="bi bi-youtube"></i
      ></a>

      <!-- Instagram -->
      <a class="btn btn-outline-light btn-floating m-1"  target='blank' href="https://www.instagram.com/universitereims/" role="button"
        ><i class="bi bi-instagram"></i
      ></a>

      <!-- Linkedin -->
      <a class="btn btn-outline-light btn-floating m-1"   target='blank' href="https://www.linkedin.com/school/universite-de-reims-champagne-ardenne/?originalSubdomain=fr" role="button"
        ><i class="bi bi-linkedin"></i
      ></a>
      </div>
    
    </section>
    <!-- Section: Social media -->
  </div>
  <!-- Grid container -->


</footer>


      </div>
    </div>
   

    
    <style>
    .button-34 {
  padding: 1.3em 3em;
  font-size: 13px;
  text-decoration: none;
  text-transform: uppercase;
  letter-spacing: 2.5px;
  font-weight: 500;
  color: #000;
  background-color: #F2C52C;
  border: none;
  border-radius: 45px;
  box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.1);
  transition: all 0.3s ease 0s;
  cursor: pointer;
  outline: none;
}
@media (max-width: 800px) {
  
  .countdown-container {
    max-width: 90%;
  }
  
  .days-container,
  .hours-container,
  .minutes-container, 
  .seconds-container {
    font-size: 0.8em;
    width: 100px;
    height: 100px;
  }
}
.countdown-container {
  display: flex;
  width: 100%;
  max-width: 70%;
  justify-content: space-between;
}

.days-container,
.hours-container,
.minutes-container, 
.seconds-container {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  background-color: rgba(0,0,0,0.1);
  border: 5px solid rgba(255,255,255,0.3);
  width: 140px;
  height: 140px;
  border-radius: 99px;
}

.days,
.hours,
.minutes,
.seconds {
  font-size: 2.5em; 
  margin: 10px 0;
}


.days-label,
.hours-label,
.minutes-label,
.seconds-label {
  text-transform: uppercase;
  margin-bottom: 5px;
}

.nav {

  position: relative;
}

.nav > .nav-header {
  display: inline;
}

.button-34:hover {
  background-color: #BA9822;
  /*
  box-shadow: 0px 15px 20px rgba(186, 152, 34, 0.4);*/
  color: #fff;
  transform: translateY(-7px);
}

.button-34:active {
  transform: translateY(-1px);
}


.button-35 {
padding : 1.5em 1.5em;
background-color: transparent;
  font-size: 15px;
  text-decoration: none;
  text-transform: uppercase;
  letter-spacing: 2.5px;
  font-weight: 500;
  color: #F2C52C;
 margin-left: 105px;
  margin-top:15px;
  border: none;
  transition: all 0.3s ease 0s;
  cursor: pointer;
  outline: none;



}

.button-35:hover {
  
  /*
  box-shadow: 0px 15px 20px rgba(186, 152, 34, 0.4);*/
  color: #fff;
  transform: translateY(-7px);
  -webkit-transform: scale(1.1);
-ms-transform: scale(1.1);
transform: scale(1.1);
transition: 0.3s ease;
}

.button-35:active {
  transform: translateY(-1px);
}
.button-32 {
  padding: 1.3em 3em;
  font-size: 13px;
  text-decoration: none;
  text-transform: uppercase;
  letter-spacing: 2.5px;
  font-weight: 500;
  color: #000;
  background-color: #E80024;
  border: none;
  border-radius: 45px;
  box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.1);
  transition: all 0.3s ease 0s;
  cursor: pointer;
  outline: none;
}

.button-32:hover {
  background-color: #A30019;
  /*
  box-shadow: 0px 15px 20px rgba(186, 152, 34, 0.4);*/
  color: #fff;
  transform: translateY(-7px);
}

.button-32:active {
  transform: translateY(-1px);
}

@font-face {
    font-family: 'MaPolice2';
    src: url('/public/fonts/quicksand/Quicksand-Regular.ttf') format('ttf');
    font-style: normal;
        font-weight: normal;
}
.button-54 {
  font-family: "Open Sans", sans-serif;
  font-size: 16px;
  letter-spacing: 2px;
  text-decoration: none;
  text-transform: uppercase;
  text-align: center;
  color: #F2C52C;
  cursor: pointer;
  border: 3px solid;
  padding: 0.25em 0.5em;
  box-shadow: 1px 1px 0px 0px, 2px 2px 0px 0px, 3px 3px 0px 0px, 4px 4px 0px 0px, 5px 5px 0px 0px;
  position: relative;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
  border-radius: 25px;
}
.card.text-bg-dark {
  --bs-card-border-color: #C3CBD2;
}
nav{
  background-color:#F2C52C;
}
  .container {
    display: flex;
    justify-content: center;
    align-items: center;
    border-color: #12142B;
}
.hover{
  
transition: 0.3s ease;
}

.hover:hover{
-webkit-transform: scale(1.1);
-ms-transform: scale(1.1);
transform: scale(1.1);
transition: 0.3s ease;
}

.button-54:active {
  box-shadow: 0px 0px 0px 0px;
  top: 5px;
  left: 5px;
}
.justUFirst {
    display : none;
  }
.button-red {
  font-family: "Open Sans", sans-serif;
  font-size: 16px;
  letter-spacing: 2px;
  text-decoration: none;
  text-transform: uppercase;
  color: #880015;
  cursor: pointer;
  border: 3px solid;
  padding: 0.25em 0.5em;
  box-shadow: 1px 1px 0px 0px, 2px 2px 0px 0px, 3px 3px 0px 0px, 4px 4px 0px 0px, 5px 5px 0px 0px;
  position: relative;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
  border-radius: 25px;
}

.button-red:active {
  box-shadow: 0px 0px 0px 0px;
  top: 5px;
  left: 5px;
}
@media (width < 1000) {
  .justUFirst {
    display :none;
  }
}
@media (width > 1000 and width < 1400 and height > 768 and heigth < 1000) {
  .justU {
    diplay :none;

  }
  .justUFirst {
    display : none;
  }
}
@media (min-width: 768px) {
  .button-54 {
    padding: 0.25em 0.75em;
  }
  .button-53 {
    padding: 0.25em 0.75em;
  }
  .button-red {
    padding: 0.25em 0.75em;
  }
}
.button-53 {
  font-family: "Open Sans", sans-serif;
  font-size: 16px;
  letter-spacing: 2px;
  text-decoration: none;
  text-transform: uppercase;
  color: #12142B;
  border: 3px solid;
  padding: 0.25em 0.5em;
  box-shadow: 1px 1px 0px 0px, 2px 2px 0px 0px, 3px 3px 0px 0px, 4px 4px 0px 0px, 5px 5px 0px 0px;
  position: relative;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
  
}
.footer{
  background-color:#12142B; 
}
.button-view {
  background-image: url("img/blob.svg");
}
body {
  
  background-color:#12142B;
  background-size: auto;
background-repeat: repeat-x;
border-color:black;
position: relative;
}
@media (width < 800px) {
  .logorepu {
  display : none;
  }

.logounive  {
  display :none;
}
.navbar navbar-expand-lg bg-body-tertiary{
  height :auto;
  width :auto;
}
.justU {
  display :none;
}
.justUFirst {
  display : block;
}
.navbar-brand {
    width: 80px;
    height : 20px;
    
}
.nav  {
  width: 80px;
    height : 20px;
}
}

</style>  
  </body>
</html>