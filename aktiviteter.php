<!DOCTYPE html>
<html lang="sv">
  <head>
    <meta charset="utf-8"/>
    <link href="aktiviteter.css" rel="stylesheet" type="text/css">
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
      <div class="nav" onclick="menu()">
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
          <div class="bild">
            <img id= "aktiviteterbild" src="./bilder/hanatorp1" alt="" ></img>
            <img src="./bilder/hanatorp2" alt=""></img>
          </div>
        <div class="facts_p1">
          <div class="text">
            <h2> Aktiviteter </h2>
              <p> Friluftslivet är det vi är mest stolta över.
                  Fisket i sjöarna kring Örby och Kinna är gott och det finns ett 20 tal sjöar och vattendrag att välja på i närområdet.
                  Runt Hanatorp i Örby finns det leder i vacker natur.
              </p>
              <p> Här möter du också Öresjöbygdens spännade kulturlandskap. Inte långt ifrån Hanatorp ligger fornborgen Öresten,
                  där ”Kurirleden” börjar och i andra ändan av Östra Öresjön ligger magiska ”Seatons Kulle” - Hyltenäs kulle.
                  Mindre än 5 km ifrån Hanatorp finns flera kulturreservat som är värda ett besök.
              </p>
              <p> Hanatorp är också ett utmärkt utgångsläge för västsvensk shopping.
                  I Marks kommun finner du det unika Tygriket med 17 försäljningsställen.
                  Räcker inte det så är det inte långt till GEKÅS Ullared (50 km), Gällstad outlet (60 km), 2 Karlsson (40 km) eller Knalleland Borås (35 km).
                  Göteborg med alla sina sevärdheter och nöjesparken ”Liseberg” (55 km).
              </p>
              <br>
              <p> Som årligt återkommande aktiviteter har vi: </p>
              <p> Midsommarfirande där vi tillsammans klär midsommarstången och dansar traditionella lekar.
                  Vi forsöker alltid få hit en trubadur som spelar under eftm./kväll.För midsommarhelgen gäller 200.- extra
                  Sen Dragspelstämman som alltid är sista helgen i Augusti.
                  Båda dessa arrangemang brukar numera innebära att det blir fullbokad camping.
                  Så boka gärna i god tid.
              </p>
              <p> Marks golffklubb ligger bara 5 minuter med bil bort.
                  Kom till sveriges mest centrala golfbanna med driving ranch, 9 och 18 håls bana.
                  Passa också på att besöka restaurang Valla som erbjuder frukost, lunch och middag.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
  <footer>
    <div class="footer" > Hej </div>
    <div class="footerbar">  </div>
  </footer>
