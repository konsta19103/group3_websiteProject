<?php
?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ravintola Jamppa</title> 
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="etusivu.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script>
		$(documents).ready(function(){
			var uutinenMaara = 2;
			$("#nappula").click(function(){
				uutinenMaara = uutinenMaara + 2;
				$(".textbox").load("uutistenlataus.php", {
					uutinenUusiMaara: uutinenMaara
				});
			});
		});
	</script>
    </head>

    <body>
           
        <div class="container">
                <div id="navheader">
                <div>
                    <a href="etusivu.html">
                    <img class="logo" src="materials/logo1.png"></a>
                    </a>
                </div>
                
                <div class="topnav" id="navbar">
                    <a href="javascript:void(0);" style="font-size: 36px"; class="icon" onclick="myFunction()">
                        <i id="responsivebutton" class="fa fa-bars"></i>
                      </a>
                      
                  <a class="active" id="navlink" href="etusivu.html">Etusivu</a>
                  <a id="navlink" href="menu.html">Menu</a>
                  <a id="navlink" href="contact.html">Ota yhteytt�</a> 
                </div>
                </div>
            <div class="jumbotron">
                <div id="header">
                  <h3>Ravintola Jamppa</h3> <!--MENUN OTSIKKO-->
                  <p id="headertext">Ravintola Jamppa on H�meenlinnan keskustassa sijaitseva vuonna 2020 perustettu ravintola, josta l�yd�t ruoat hampurilaisista-pihveihin sek� pizzoihin. Talomme tarjoaa my�s monipuoliset alkuruoat sek� virvokkeet. Tervetuloa Ravintola Jamppaan lounastamaan.</p>
                </div>
              </div>

              

                <div class="aukioloajat2">
                  <div class="textbox" id="schedulebox">
                    <h4>Aukioloajat:</h4>
                    <p>Ma-Pe 10:30 � 22:00</p>
                    <p>La 11:00 � 22:00</p>
                    <p>Su Suljettu</p>
                  </div>
                  <img class="aukioloaika-kuva" src="materials/taco.jpg">
                </div>
			<div class="historia">	

                  <div class="textbox">
                    <h4>Uutiset</h4>
		<?php
		$yhteys=mysqli_connect("127.0.0.1", "trtkp19a3", "trtkp19a3");
		$ok=mysqli_select_db($yhteys, "trtkp19a3");

		$tulos=mysqli_query($yhteys, "select * from jamppa_uutiset LIMIT 2");
			if (mysqli_num_rows($tulos) > 0){
			while ($row = mysqli_fetch_assoc($tulos)){
				echo "<p>";
				echo $row['tekija'];
				echo "<br>";
				echo $row['uutinen'];
				echo "</p>";
			}
		}else{
			echo "Uutisia ei ole saatavilla enemp��";
		}
		?>
                 </div> 
                </div>
		<button id="nappula">Klikkaa ladataksesi lis�� uutisia</button>
              
                
              <!---
               VANHA HISTORIA
              -->
              <!---<div class="historia">
                <div class="textbox">
                <h4>Historiaa</h4>
                  <p>Idea Ravintola Jampasta tuli Jampan k�ydess� Yhdysvalloissa. N�hdess��n New Yorkin kaduilla olevat pikaruokakojut tuli Jampalle mieleen yhdist�� h�nen kokkaustaitonsa ja pikaruoan valmistus nopeus. Palattuaan Suomeen Jamppa alkoi heti kehitell� ideaa Ravintola Jampasta. Vuoden kuluttua idean alkamisen j�lkeen oli ensimm�inen Ravintola Jamppa jo pystyss� H�meenlinnan keskustassa.</p>
                </div>
                <img class="historia-kuva" src="materials/newyork.jpg">
              </div>---->

              
              
        </div>
                  
            <footer>
                <div class="footer1">        
                        <h4>Osoite:</h4>
                        <p>Jamppakatu 16</p>
                        <p>00000 H�meenlinna</p>  
                </div>

                <div class="footer2">
                        <h4>Yhteystiedot:</h4>
                        <p>050 860 5600</p>
                        <p>ravintolajamppa@gmail.com</p>
                </div> 

                <div class="footer3">
                
                    <h4>Aukioloajat:</h4>
                    <p>Ma-Pe 10:30 � 22:00</p>
                    <p>La 11:00 � 22:00</p>
                    <p>Su Suljettu</p>
                  </div>
            </footer>

            <button onclick="topFunction()" id="ylos" title="Mene yl�s">Takaisin yl�s</button>
            <script>
                var mybutton = document.getElementById("ylos");
                
                window.onscroll = function() {scrollFunction()};
                
                function scrollFunction() {
                  if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
                    mybutton.style.display = "block";
                  } else {
                    mybutton.style.display = "none";
                  }
                }
                function myFunction() {
                var x = document.getElementById("navbar");
                    if (x.className === "topnav") {
                      x.className += " responsive";
                    } else {
                      x.className = "topnav";
                    }
                }
                
                function topFunction() {
                  document.body.scrollTop = 0;
                  document.documentElement.scrollTop = 0;
                }

                

                function openForm() {
                  document.getElementById("myForm").style.display = "block";
                  }

                  function closeForm() {
                    document.getElementById("myForm").style.display = "none";
                    }

                </script>
                
                 

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</div>

<button class="open-button" onclick="openForm()">Chat</button>
<div class="chat-popup" id="myForm">
  <form action="./etusivu.php" class="form-container">
    <h3>Chat</h3>

    <textarea placeholder="Kirjoita viesti.." name="viesti" required></textarea>

    <button type="submit" class="btn">L�het�</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Sulje</button>
  </form>
</div>


    </body>


</html>
