<?PHP

echo "Klasa 2E łączenie z bazą danych MySQL"."<br>"."<br>";

$serwer = "localhost";
$uzytkownik = "root";
$haslo = "";
$baza = "ptaki";
$con = new mysqli($serwer, $uzytkownik, $haslo, $baza);

$zapytanie = "SELECT nazwa_zwyczajowa FROM gatunki ORDER BY nazwa_zwyczajowa DESC";

if ($wynik = $con -> query($zapytanie))
	WHILE ($row = $wynik -> fetch_array())
		echo $row["nazwa_zwyczajowa"]."<br>";
else
	echo $con -> errno." ".$con -> error;

$con -> close();

?>
