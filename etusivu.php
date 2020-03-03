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
		$(document).ready(function(){
			var uutinenMaara = 2;
			$("button").click(function(){
				uutinenMaara = uutinenMaara + 2;
				$("#uutinen").load("uutistenlataus.php", {
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
                  <a id="navlink" href="menu.php">Menu</a>
                  <a id="navlink" href="contact.php">Ota yhteyttä</a> 
                </div>
                </div>
            <div class="jumbotron">
                <div id="header">
                  <h3>Ravintola Jamppa</h3> <!--MENUN OTSIKKO-->
                  <p id="headertext">Ravintola Jamppa on Hämeenlinnan keskustassa sijaitseva vuonna 2020 perustettu ravintola, josta löydät ruoat hampurilaisista-pihveihin sekä pizzoihin. Talomme tarjoaa myös monipuoliset alkuruoat sekä virvokkeet. Tervetuloa Ravintola Jamppaan lounastamaan.</p>
                </div>
              </div>

              

                <div class="aukioloajat2">
                  <div class="textbox" id="schedulebox">
                    <h4>Aukioloajat:</h4>
                    <p>Ma-Pe 10:30 – 22:00</p>
                    <p>La 11:00 – 22:00</p>
                    <p>Su Suljettu</p>
                  </div>
                  <img class="aukioloaika-kuva" src="materials/taco.jpg">
                </div>
		<div class ="historia">
			<div class ="textbox" id="uutinen">
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
			echo "Uutisia ei ole saatavilla enempää";
		}
		?>
		<button class="loadmore">Klikkaa ladataksesi lisää uutisia</button>
</div>
		</div>
              </div>
                
              <!---
               VANHA HISTORIA
              -->
              <!---<div class="historia">
                <div class="textbox">
                <h4>Historiaa</h4>
                  <p>Idea Ravintola Jampasta tuli Jampan käydessä Yhdysvalloissa. Nähdessään New Yorkin kaduilla olevat pikaruokakojut tuli Jampalle mieleen yhdistää hänen kokkaustaitonsa ja pikaruoan valmistus nopeus. Palattuaan Suomeen Jamppa alkoi heti kehitellä ideaa Ravintola Jampasta. Vuoden kuluttua idean alkamisen jälkeen oli ensimmäinen Ravintola Jamppa jo pystyssä Hämeenlinnan keskustassa.</p>
                </div>
                <img class="historia-kuva" src="materials/newyork.jpg">
              </div>---->

              
              
        
                  
            <footer>
                <div class="footer1">        
                        <h4>Osoite:</h4>
                        <p>Jamppakatu 16</p>
                        <p>00000 Hämeenlinna</p>  
                </div>

                <div class="footer2">
                        <h4>Yhteystiedot:</h4>
                        <p>050 860 5600</p>
                        <p>ravintolajamppa@gmail.com</p>
                </div> 

                <div class="footer3">
                
                    <h4>Aukioloajat:</h4>
                    <p>Ma-Pe 10:30 – 22:00</p>
                    <p>La 11:00 – 22:00</p>
                    <p>Su Suljettu</p>
                  </div>
            </footer>

            <button onclick="topFunction()" id="ylos" title="Mene ylös">Takaisin ylös</button>
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
                
                 

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</div>

<button class="open-button" onclick="openForm()">Chat</button>
<div class="chat-popup" id="myForm">
  <form action="./etusivu.php" class="form-container">
    <h3>Chat</h3>

    <textarea placeholder="Kirjoita viesti.." name="viesti" required></textarea>

    <button type="submit" class="btn">Lähetä</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Sulje</button>
  </form>
</div>


    </body>


</html>
