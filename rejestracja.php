<?php
$login = ($_POST['login']);
$password = ($_POST['haslo']);
$nazwisko = ($_POST['nazwisko']);
$imie = ($_POST['imie']);
$pesel = ($_POST['pesel']);
$data_urodzenia = ($_POST['data_urodzenia']);
$level = 1;

if ($login)
{
  $sql = "SELECT login FROM users WHERE login='".$login."'";
  $req =  sqlsrv_query($conn, $sql) or die(print_r(sqlsrv_errors(),true));

  if(sqlsrv_has_rows($req) != 1){
      echo "REJESTRACJA PRZEBIEGŁA POMYŚLNIE!";

      $query = "INSERT INTO Users (Login,Password,Level,Nazwisko,Data_urodzenia,Pesel,Imie) VALUES
     ('$login','$password','$level','$nazwisko','$data_urodzenia','$pesel','$imie')";
     $result = sqlsrv_query($conn,$query);

  }else{
      while($data = sqlsrv_fetch_array($req, SQLSRV_FETCH_ASSOC))
        echo "PRZYKTO NAM, PODANY LOGIN JUŻ ISTNIEJE.";}


      }
?>
