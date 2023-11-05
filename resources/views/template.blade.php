<!DOCTYPE html>
<html lang="fr">
  <head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style1.css">
  </head>
  <body>
  <div>
      <nav style="background-color:#12142B; border:-10px; margin-top:-10px;margin-bottom:-10px;" class="navbar navbar-expand-lg bg-body-tertiary">
  <div style="background-color:#12142B;" class="container-fluid">
  <a class="navbar-brand" href="https://www.univ-reims.fr/">
      <img src="img/Logo_republique.png" style="margin-left:5px; margin-top:5px;" width="80" height="84">

      <img src="img/univlogo.png"  width="285" height="54">
</a>
<a class="navbar-brand" href="https://www.univ-reims.fr/vie-des-campus/actualites/jeux-de-l-urca-2024,10227,18297.html?args=_1Q7ZDyTGr_aYnJ6eSkKbjvGobgYR4YHCAuoCjfmJHNdadljx7BZnq3LOLKoPSThBNGLhb8IlQCw%2AO54ubSfbq2Id1e74NSXx%2AaYxjKQeTPP2Ai0yh_z8lMdDXjVsBON">
      <img src="img/jeuxdelurcaclr-removebg-preview.png"  width="65" height="65">
      </a>
     
</div>
  
</nav>
    </div>

    <div stye="border-color:black; margin:-10px;margin-bottom:-10px;" class="container">
      <div stye="border-color:black; margin:-10px;margin-bottom:-10px;" class="card mt-4">
        <div stye="border-color:black margin:-10px;margin-bottom:-10px;;" class="">@yield('title')</div>
        <div style="background-color:#12142B;  margin:-5px;margin:-10px;margin-bottom:-10px;  border-color:black; color:aliceblue; font-size:18px;" class="card-body">@yield('content')</div>
      </div>
    </div>
    
    <style>
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
  
transition: 1s ease;
}

.hover:hover{
-webkit-transform: scale(1.1);
-ms-transform: scale(1.1);
transform: scale(1.1);
transition: 1s ease;
}

.button-54:active {
  box-shadow: 0px 0px 0px 0px;
  top: 5px;
  left: 5px;
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
.button-view {
  background-image: url("img/blob.svg");
}
body {
  
  background-color:#12142B;
  background-size: auto;
background-repeat: repeat-x;
border-color:black;
}

</style>  
  </body>
</html>