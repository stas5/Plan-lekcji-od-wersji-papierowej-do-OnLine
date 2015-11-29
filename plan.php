<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
  <head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="styl.css" />
  </head>
<body>

<form action="plan.php" method="post" name="forma" >
<?php include ('connect.php');
         mysql_query("SET NAMES 'utf8'");
         $str=$_POST['str'];
	 $pytanie="select distinct klasa  from szkola order by klasa";
        $wynik = mysql_query ($pytanie); 
        $total = mysql_num_rows($wynik);
          print "<p align=center>Znaleziono ".$total." klas<br>";
        print "<select name='str' class='xsel' onchange='document.forma.submit();'>";
        for ($i=0;$i<$total;$i++){
        $wiersz=mysql_fetch_array($wynik);
        $wiersz[0]==$str?$t="selected":$t="";
        	print "<option value=$wiersz[0] $t>".$wiersz[0];
        	}
        print "</select> ";
        $str=$_POST['str'];
         if(isset($str)){
	 $k=$_POST['str'];
	  ?>
  <div id="p">
  <table border="1" cellspacing="0">
    <tbody>
      <tr>
<?php echo("<caption>Plan lekcji - $k</caption>");
                $dni=array("","Poniedziałek","Wtorek","Środa","Czwartek","Piątek");
                for ($i=1;$i<6;$i++){                      
                         	if($i==3||$i==5)echo("<tr>");?><td><?php $pytanie="select * from szkola where dzien=".$i." and klasa='".$k."' order by godzina";
                                 $wynik=mysql_query($pytanie);
                 		?>
        <table class="dzien" border="1" cellpadding="" cellspacing="0" width="280">
          <tbody>
            <tr>
              <th>G.l</th>
              <th>Przedmiot</th>
              <th>Sala</th>
              <th>Nauczyciel</th>
            </tr>
<?php $j=1;
                                 echo("<caption>$dni[$i]</caption>");
                                                     //przetwarzanie poszczególnych rekordów wyniku.
                                 $wiersz=mysql_fetch_array($wynik);
                                 $dol=$wiersz[1];
                 		$przed=$wiersz[2];
                 		$naucz=$wiersz[5];
                 		$sala=$wiersz[3];
                 		$j++;
                                 while($wiersz=mysql_fetch_array($wynik)){    
                                         while($j<$wiersz[1]){
                                           echo("<tr><td>$j</td><td>--</td><td>--</td></tr>");
                 			  $j++;}                                        
                                         if($wiersz[1]==$dol){
                                         	$przed=$przed."|$wiersz[2]";
                                                 $sala=$sala."|$wiersz[3]";
                                                 $naucz=$naucz."|$wiersz[5]";
                                                 $dol=$wiersz[1];
                 				}else{
                 				echo("<tr ><td>$dol</td><td>$przed</td><td>$sala</td><td>$naucz</td></tr>");
                                                 $dol=$wiersz[1];$przed=$wiersz[2];$naucz=$wiersz[5];$sala=$wiersz[3];
                 				$j++;
                 				}
                 			} 
                 		echo("<tr><td>$dol</td><td>$przed</td><td>$sala</td><td>$naucz</td></tr>");
                 		while($j<=8){
                 		echo("<tr><td>$j</td><td>--</td><td>--</td><td>--</td></tr>");
                 		$j++;
                 		}
                 		?>
          </tbody>
        </table>
        </td>
<?php if($i==2||$i==4)echo("</tr>");
                         	}
                               	?><td>
        <table>
          <caption>Sobota</caption>
        </table>
        </td>
      </tr>
    </tbody>
  </table>
  </div>
<?php }
      ?> 
      </form>
</body>
</html>
