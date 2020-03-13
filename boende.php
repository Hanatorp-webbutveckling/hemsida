<!DOCTYPE html>
<html lang="sv">
  <head>
    <meta charset="utf-8"/>
    <link href="boende.css" rel="stylesheet" type="text/css">
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
        <div class="bild">
          <img id="Bobild1" src=./Bilder/th_Bobild1.jpg alt=""> </img>
          <img id="Bobild2" src=./Bilder/th_Bobild2.jpg alt=""> </img>
          <img id="Bobild3" src=./Bilder/th_Bobild3.png alt=""> </img>
          <img id="Bobild4" src=./Bilder/th_Bobild4.jpg alt=""> </img>
        </div>
        <div class="facts_p1">
          <div class="text">
            <h3>Boende</h3>
            <p>Hanatorps camping är en lugn familjecamping med trevlig atmosfär. Här hittar du platser med underbar sjöutsikt och alltid nära servicehus. Platserna är stora, över 100 kvm, väl dränerade och med asfalterade parkeringar. Alla platserna är rustade med 16 A el och nya moderna jordfelsbrytare. Här ansluter du säkert med eu-koppling. Vi har också komforttomter med vatten, avlopp och centralantenn.</p>
            <h4>Priser campingtomter</h4>
            <table>
              <tbody>
                <tr>
                  <td class="Priser1">
                    Plats utan el. 200 kr / natt
                    <br>
                    Smala platser. 245 kr / natt
                    <br>
                    Trivselbyn. 275 kr / natt
                    <br>
                    Strandtomt. 375 kr / natt
                    <br>
                    Hos oss bor du 7 nätter och betalar för 6.
                   </td>
                 </tr>
               </tbody>
             </table>
             <h4>Priser Stugor</h4>
             <table>
               <tbody>
                 <tr>
                   <td class="Priser2">
                     Sjöstugor 2 bädds med trinettkök 550 kr / natt
                     <br>
                     Sommarbyn 4 bädds med trinettkök 550 kr / natt
                     <br>
                     Sommarbyn 3 bädds med trinettkök dusch WC 750 kr / natt
                     <br>
                     Lönneberga 4 bädds med kök dusch WC 950 kr / natt
                     <br>
                     Städning av stugan kan beställas och kostar 250.- pr påbörjad timme.
                     <br>
                     Vi kontrollerar stugorna vid avresa.
                     <br>
                     Hos oss bor du 7 nätter och betalar för 6.
                    </td>
                  </tr>
                </tbody>
              </table>
              <h4>Info</h4>
              <table>
                <tbody>
                  <tr>
                    <td class="Info1">
                      Vi har även ett antal platser för säsongs uppställning.
                      <br>
                      Vissa av dessa har el , vatten och avlopp.
                      <br>
                      Säsongen är från Påsk , skärtorsdag till 30 september.
                      <br>
                      Kontakta oss för prisuppgifter.
                     </td>
                   </tr>
                 </tbody>
               </table>
               <table>
                 <tbody>
                   <tr>
                     <td class="Kontakt">
                       <br>
                       Hanatorps camping
                       <br>
                       Tel: +46 (0)703807048
                       <br>
                       Kontakt:
                       <a href="mailto:camping@hanatorp.se" class="linklink">Hanatorp Camping</a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              <p></p>
          </div>
        </div>
      </div>
    </div>
  </body>

  <footer>
    <div class="footer"> <table>
      <tbody>
        <tr>
          <td class="Kontakt">
            Hanatorps camping;   Öresjövägen 26;   511 31 Örby;   Tel: +46 (0)703807048;   Kontakt:
            <a href="mailto:camping@hanatorp.se" class="linklink">Hanatorp Camping</a>
           </td>
         </tr>
       </tbody>
     </table> </div>
    <div class="footerbar"> </div>
  </footer>
