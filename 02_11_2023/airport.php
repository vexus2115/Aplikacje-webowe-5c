<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Odloty samolotów</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
	<div id="baner1"><h2>Odloty z lotniska</h2></div>
    <div id="baner2"><img src="logo.png" alt="logotyp"></div>
    <div id="glowny">
        <table border: 1 >
            <tr>
                <th>LP.</th>
                <th>NUMER REJSU</th>
                <th>CZAS</th>
                <th>KIERUNEK</th>
                <th>STATUS</th>
            </tr>
			<?php
				$polonczenie=mysqli_connect("localhost","root","","egzamin");
				$zapytanie=mysqli_query($polonczenie,'SELECT id, nr_rejsu, czas,kierunek,status_lotu from odloty ORDER BY czas desc');
				while($r = mysqli_fetch_array($zapytanie))
				{
					echo "<tr>";
						echo "<td>";
						echo $r[0];
						echo "</td><td>";
						echo $r[1];
						echo "</td><td>";
						echo $r[2];
						echo "</td><td>";
						echo $r[3];
						echo "</td><td>";
						echo $r[4];
						echo "</td>";
					echo "</tr>";
				}
			?>
        </table>
    </div>
    <div id="stopka1">
		<a href="samolot.jpg">Pobierz obraz</a>
	</div>
    <div id="stopka2"><p>
		<?php
			if(isset($_COOKIE["ciasteczko"]))
			{
				echo "<b>Miło nam, że nas znowu odwiedziłeś</b>";
			}
			else
			{
				$name="ciasteczko";
				$value="1";
				$expires=time()+7200;
				setcookie($name,$value,$expires);
				echo "<i>Dzień dobry! sprawdź regulamin naszej strony</i>";
			}
		?>
		</p></div>
    <div id="stopka3">Autor:Jakub Terelak</div>
</body>
</html>
