<?
mysql_connect ("host:port", "login", "haslo") or
 die ("Nie można połączyć");
 mysql_select_db("baza_danych")or
 die ("Nie można połączyć z bazą");
?>