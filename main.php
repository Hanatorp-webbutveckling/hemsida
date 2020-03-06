<!DOCTYPE html>
<html lang="sv">
  <head>
    <meta charset="utf-8"/>
    <link href="main.css" rel="stylesheet" type="text/css">
    <title> Hanatorps Camping </title>
    <script>
    function menu(){
      var y=document.getElementById("menu_box");
      var x=document.getElementById("header");
      var z=document.getElementById("navbar");
      var c=document.getElementById("info");
      //alert(y.id);
      y.classList.toggle("change");
      x.classList.toggle("change");
      z.classList.toggle("change");
      c.classList.toggle("change");
    }
    </script>

  </head>
  <header>
    <div class="header" id="header">
      <div class="navbar" id="navbar">  </div>
      <h1> Hanatorps Camping </h1>
      <div class="nav" onclick="menu()"> Menu
        <div id="hamburger" class="button_menu">
          <div id="line1" class="line_1"></div>
          <div id="line2" class="line_2"></div>
          <div id="line3" class="line_3"></div>
        </div>
      </div>
    </div>
  </header>

  <body>
    <img id="bild" src="https://www.campstar.com/images/images/968eb519b117487297d0_e1ac7.jpg" alt="Background"></img>
    <div id="menu_box" class="menu_box">
      <div class="nav_row">
        <div></div>
        <div class="column_1">
          <div class="hem" onclick="">
            <a href="main.php">Hem</a>
          </div>
          <div class="nyheter" onclick="">
            <a href="nyheter.php">Nyheter</a>
          </div>
          <div class="boende" onclick="">
            <a href="boende.php">Boende</a>
          </div>
        </div>
        <div class="vl"></div>
        <div class="column_2">
          <div class="karta" onclick="">
            <a href="karta.php">Karta</a>
          </div>
          <div class="bad" onclick="">
            <a href="bad.php">Bad</a>
          </div>
          <div class="service" onclick="">
            <a href="service.php">Service</a>
          </div>
        </div>
        <div class="vl"></div>
        <div class="column_3">
          <div class="aktiviteter" onclick="">
            <a href="aktiviteter.php">Aktiviteter</a>
          </div>
          <div class="om_oss" onclick="">
            <a href="om_oss.php">Om oss</a>
          </div>
          <div class="filmer" onclick="">
            <a href="filmer.php">Filmer</a>
          </div>
        </div>
        <div></div>
        <div class="close" onclick="menu()">
          <div class="box"></div>
          <div id="line_l" class="line_l"></div>
          <div id="line_r" class="line_r"></div>
        </div>
      </div>
    </div>

    <div class="info" id="info">
      <div class="panel_1">
        <div class="bild_1">
          <img src="./camping_1" alt="">
          <img src="./utsikten" alt="">
          <img src="./Logga" alt="">
        </div>
        <div class="facts_p1">
          <div class="text">
            <h2> Hanatorps camping </h2>
            <p> I natursköna Mark väntar mer än 300 sjöar och vattendrag på dig.</p>
            <p> En lugn inlandsatmosfär råder i Hanatorp och stressen försvinner som sand mellan tårna när ni kommit fram till oss.
            Natur och genuin glesbygd i ett vackert och spännande kulturlanskap. Det sammanfattar Öresjöbygden nära Örby på ett bra vis.</p>
            <p>Hanatorp ligger precis invid Östra Öresjön och vid en av Västsveriges mysigaste och barnvänligaste strander.
            Kom till oss på Hanatorp för naturnära avkoppling, äventyr eller lata dagar vid stranden.</p>
            <p> Hanatorp har ett perfekt utgångsläge för västsvenska upptäcktsfärder.
            50 minuter till Ullared, 50 minuter Göteborg, 30 minuter till Landvetter.</p>
            <p> Vi önskar dig varmt välkommen till Hanatorps camping, nära Örby - Kinna. </p>
          </div>
        </div>
      </div>
    </div>
  </body>
  <footer>
    <div class="footer"> okay </div>
    <div class="footerbar"></div>
  </footer>
