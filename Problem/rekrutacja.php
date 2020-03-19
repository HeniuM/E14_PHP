<?php
$connect = mysql_connect("localhost","root"," ");
if (!$connect)
  {
  die('Nie mozna polaczyc: ' . mysql_error());
  }
  
mysql_select_db("baza", $connect);
  
$sql="INSERT INTO ogloszenie (imie, nazwisko, stanowisko)
VALUES
('$_POST[imie]','$_POST[nazwisko]','$_POST[stanowisko]')";
  
if (!mysql_query($sql,$connect))
  {
  die('Blad: ' . mysql_error());
  }
echo "Dodano dane rekrutacyjne do bazy!";
  
mysql_close($connect)
?>