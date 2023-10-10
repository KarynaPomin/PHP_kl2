<?PHP
// 1) XAMPP - plik htdocs
// 2) http://localhost/Klasa_2E/
// phpinfo();

// Konkatybacja "."
echo "Klasa 2E łączenie z bazą danych MySQL"."<br>"."<br>";

// 3306 --> Port MySQL w XAMPP
// $con = new mysqli("127.0.0.1:3306", "root", "", "przepisyPrzyklad")
$serwer = "localhost";
$uzytkownik = "root";
$haslo = "";
$baza = "przepisyPrzyklad";
$con = new mysqli($serwer, $uzytkownik, $haslo, $baza);

$zapytanie = "SELECT NazwaPrzepisu FROM przepisy ORDER BY NazwaPrzepisu DESC";

if ($wynik = $con -> query($zapytanie))
	// fetch_array -> tablica skojażona z bazy danych
	WHILE ($row = $wynik -> fetch_array())
		echo $row["NazwaPrzepisu"]."<br>";
else
	echo $con -> errno." ".$con -> error;

// Zamknięcie połączenia z bazą
$con -> close();

// Znacznik końca pliku PHP
?>
