<?php
		
		$yhteys=mysqli_connect("127.0.0.1", "trtkp19a3", "trtkp19a3");
		$ok=mysqli_select_db($yhteys, "trtkp19a3");
		$uutinenUusiMaara = $_POST['uutinenUusiMaara'];
		$tulos=mysqli_query($yhteys, "select * from jamppa_uutiset LIMIT $uutinenUusiMaara");
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
