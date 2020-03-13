<!DOCTYPE html>
  <html lang="sv">
    <head>
      <meta charset="utf-8"/>
      <link href="filmer.css" rel="stylesheet" type="text/css">
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
        <div class="nav" onclick="menu()"> Meny
          <div id="hamburger" class="button_menu">
            <div id="line1" class="line_1"></div>
            <div id="line2" class="line_2"></div>
            <div id="line3" class="line_3"></div>
          </div>
        </div>
      </div>
    </header>

    <body>
      <img id="bild" src="./Bilder/Camping_bakgrund" alt="Background"></img>
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
          <div class="video">
            <iframe width="320" height="240" src="https://www.youtube.com/embed/BFBTPTDSZUo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen> </iframe>
            <iframe width="320" height="240" src="https://www.youtube.com/embed/UqcE3qx3UPs" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen> </iframe>
            <img src="" alt="">
          </div>
          <div class="facts_p1">
            <div class="text">
              <h2> Filmer </h2>
              <p> Här får ni en överblick om Hanatorp camping </p>
              <p> </p>
              <p> </p>
              <p> </p>
              <p> </p>
            </div>
          </div>
        </div>
      </div>
    </body>
    <footer>
      <div class="footer">
        <table>
        <tbody>
          <tr>
            <td class="Kontakt">
              Hanatorps camping;   Öresjövägen 26;   511 31 Örby;   Tel: +46 (0)703807048;   Kontakt:
              <a href="mailto:camping@hanatorp.se" class="linklink">Hanatorp Camping</a>
             </td>
           </tr>
         </tbody>
       </table>
      </div>
      <div class="footerbar"></div>
    </footer>
