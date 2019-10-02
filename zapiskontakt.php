<?php
$email = ($_POST['email']);
$temat = ($_POST['temat']);
$tresc = ($_POST['tresc']);


if ($email and $temat and $tresc)
{
$do_zapisania='Email: '.$email.' Temat: '.$temat.' Treść: '.$tresc."\n\r";
$plik=fopen('feedback.txt','a+');
if (!$plik)//6
{
  echo 'Wystąpił błąd podczas otwierania pliku!';//7
  exit;//8
}
if (!flock($plik, LOCK_EX))//9
{
  echo 'Wystąpił błąd podczas zakładania blokady pliku!';//10
  fclose($plik);//11
  exit;//12
}

fwrite($plik,$do_zapisania."\n\r");//13
flock($plik, LOCK_UN);//14
fclose($plik);//15
}
 ?>
