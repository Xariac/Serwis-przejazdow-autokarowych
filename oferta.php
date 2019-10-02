<body>
<div class="external" id="top">

<div class="header">
  <h1 class="logo"><a href="index.php">Przewozy autokarowe<br /><br /></a></h1>
     <div class="home_spacer">
     <a href="index.php">
     <div class="home">
     </div>  </a>
     <div class="letter">
     </div>
     </div>
</div>
<div class="decoration1"></div>
<div class="main">
  <div class="sidebar_spacer">
  <div class="section sidebar">

      <ul class="menu">

 <li class="first selected"><a font color='red'>Witaj,<br />strona służy do przeglądania dostępności tras,
   oraz do rezerwacji biletów.</a></li>

      </ul>
      <div id="kontakt">

        <form action="" method="post"  <br />
<div class="kontakt">Kontakt</div><br />
<div class="email"><input name="email" class="field" id="email" placeholder="Adres e-mail"/><br /><br /></div>
<div class="temat"><input name="temat" class="field" id="temat" placeholder="Temat"/><br /><br /></div>
<div class="tresc"><textarea name="tresc" cols="16" rows="50" class="field2" id="tresc" placeholder="Treść" ></textarea><br /></div>
<div class="wyslij"><input type="submit" value="wyślij" name="submit" id="wyslij" /></div>
</form>


      </div>
    <div class="clear"></div>
  </div>
  </div>
   <div class="content_spacer">
    <div class="section_content">
      <div class="menu_poziome">

      <ul class="menu">
        <li ><a href="?page=content">Home</a></li>
        <li ><a href="?page=oferta">Oferta</a></li>
        <li ><a href="?page=zarezerwuj">Zarezerwuj</a></li>
        <li ><a href="?page=zaloguj">Zaloguj się</a></li>
        <li ><a href="?page=zarejestruj">Zarejestruj się</a></li>
      </ul>

      </div>
      <div class="obrazek"></div>
      <div class="decoration2"></div>
      <div class="content">
      <div class="tekst">
<?php
$zap = "SELECT k.Id kurs_id, * FROM Kurs k, Trasas t, Pojazds p, Users u WHERE t.id=k.trasa_id AND  p.Id=k.pojazd_Id And (u.Id=k.kierowca_Id AND u.Level=2)";
//$zap = "SELECT * from Kurs";
//brak dostepu do bazy - komenatrz ponizej
//$wynik = sqlsrv_query( $conn, $zap);
echo "<table><tr>
<caption>KURSY DOSTĘPNE W OFERCIE FIRMY</caption>";
echo "<td><strong>ID kursu</strong></td>";
echo "<td><strong>Data kursu</strong></td>";
echo "<td><strong>Nazwisko kierowcy</strong></td>";
echo "<td><strong>Numer rejestracyjny pojazdu</td>";
echo "<td><strong>Nazwa trasy</strong></td>";
echo "</tr>";
// brak dostepu do bazy - komentarze ponizej
//while( $row = sqlsrv_fetch_array( $wynik)) {
//   echo "</tr>";
//   echo "<td>" . $row['kurs_id'] . "</td>";
//   echo "<td>" . $row['data']->format('d/m/Y H:i:s') . "</td>";
//   echo "<td>" . $row['Nazwisko'] . "</td>";
//   echo "<td>" . $row['Nr_Rejestracyjny'] . "</td>";
//   echo "<td>" . $row['Nazwa_trasy'] . "</td>";
//   echo "</tr>";
//}
echo "</table>";

 ?>
      </div>
      </div>
      <div class="footer">
      <p>Copyright &copy; 2018; <br />Projekt: Przewozy autokarowe</p>
      </div>
    </div>

  </div>

  <div class="clear"></div>
</div>
</div>
