<?PHP

echo "Klasa 2E łączenie z bazą danych MySQL"."<br>"."<br>";

$serwer = "localhost";
$uzytkownik = "root";
$haslo = "";
$baza = "AgencjaArtystycznaPrzyklad";
$con = new mysqli($serwer, $uzytkownik, $haslo, $baza);

$zapytanie = "SELECT NazwaScenicznaWykonawcy FROM Wykonawcy ORDER BY NazwaScenicznaWykonawcy DESC";

if ($wynik = $con -> query($zapytanie))
	WHILE ($row = $wynik -> fetch_array())
		echo $row["NazwaScenicznaWykonawcy"]."<br>";
else
	echo $con -> errno." ".$con -> error;

$con -> close();

?>
