<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ravintola Jamppa</title> 
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="contact.css">
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
                          
                      <a id="navlink" href="etusivu.php">Etusivu</a>
                      <a id="navlink" href="menu.php">Menu</a>
                      <a class="active" id="navlink" href="contact.html">Ota yhteyttä</a> 
                    </div>
                    </div>
            <div class="jumbotron">
                <div id="header">
                  <h3>Ota yhteyttä</h3> <!--MENUN OTSIKKO-->
                  <p id="headertext">Jamppa ja henkilökuntamme otamme asiakkaat ja heidän huolet ja murheensa huomioon. Pidämme Jampan Ravintolassa huolen siitä, että asiakkaamme lähtevät ja tulevat uudelleen mielellään nauttimaan antimistamme iloin mielin.</p>
                </div>
              </div>
            <div id="aspa">
                <img src="materials/contact.png" width="100px" height="100px">
                <h2>Asiakaspalvelu</h2>
                <p>
                    Puh. 050 860 5600 <br>
                    Sähköposti: ravintolajamppa@gmail.com
                </p>
            </div>
            <form>
                <div id="palautetta">
                    <h2>Lähetä palautetta</h2>
                    <div class="form-part">
                        <label>Nimesi</label><label class="req">*</label><br>
                        <input type="text" name="name" size="30" required>  <br>
                    </div>
                    <div class="form-part">
                        <label>Sähköposti</label><label class="req">*</label><br>
                        <input type="text" name="email" size="35" required>
                    </div>
                    <div class="form-part">
                        <label>Puhelin</label><br>
                        <input type="text" name="phone" size="9" required>
                    </div>
                    <div class="form-part">
                        <label>Aihe</label><label class="req">*</label><br>
                        <input type="text" name="topic" size="30" required>
                    </div>
                    <div class="form-part" id="comment">
                        <label>Viesti</label><label class="req">*</label><br>
                        <textarea name="comment" cols="50" rows="10" required></textarea>
                    </div>
                    <input type="submit" value="Lähetä">
                </div>
                </form>
            </div>
        </div>
        
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
                  if (document.body.scrollTop > 150 || document.documentElement.scrollTop > 150) {
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
                </script>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</div>

    </body>


</html>
