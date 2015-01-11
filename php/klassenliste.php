<?php
   /*   Copyright by C-ART '2001 www.c-art-web.de (c-art@web.de)    */
 include_once("inc.config.php");

 $error = ( $name == "" ) ? "" : "Das Passwort ist falsch";

 $stand = strftime( "%d. %B %Y", filemtime( "klassenliste.php" ) );

if( $name == "19klatre67" ) {
echo"
<html>
<head>
<meta http-equiv=Content-Type content=text/html; charset=windows-1252>
<title>Realschulklassenliste STAND: $stand</title>
<style>
 .n {font-size:8.0pt; font-family:Arial;}
 .h {font-size:8.0pt; font-family:Arial; font-weight:bold;}
</style>

</head>
<body bgcolor=#FFFFFF>STAND: $stand
<table border=1 cellspacing=0 cellpadding=2 width=100% height=100%>
  <tr>
    <td class=h align=center>GebTag</td>
    <td class=h>Titel</td>
    <td class=h>Vorname</td>
    <td class=h>Name</td>
    <td class=h>Geb.</td>
    <td class=h>Strasse</td>
    <td class=h>PLZ</td>
    <td class=h>Ort</td>
    <td class=h>Tel_privat</td>
    <td class=h>Internetadresse</td>
  </tr>";

$query="SELECT * FROM $mysql_tbadr";
$res = mysql_query($query,$mysql_nr[$connr]) or myerror($query,__LINE__,__FILE__,mysql_error($mysql_nr[$connr]));
while ($row = mysql_fetch_array($res)) {
 $r1 = ($row[1]!="") ? $row[1] : "&nbsp;";
 $r2 = ($row[2]!="") ? $row[2] : "&nbsp;";
 $r3 = ($row[3]!="") ? $row[3] : "&nbsp;";
 $r4 = ($row[4]!="") ? $row[4] : "&nbsp;";
 $r5 = ($row[5]!="") ? $row[5] : "&nbsp;";
 $r6 = ($row[6]!="") ? $row[6] : "&nbsp;";
 $r7 = ($row[7]!="") ? $row[7] : "&nbsp;";
 $r8 = ($row[8]!="") ? $row[8] : "&nbsp;";
 $r9 = ($row[9]!="") ? $row[9] : "&nbsp;";
$r10 = ($row[10]!="") ? "<a href=mailto:$row[10]>$row[10]</a>" : "&nbsp;";

echo"
  <tr>
    <td class=n align=center>$r1</td>
    <td class=n>$r2</td>
    <td class=n>$r3</td>
    <td class=n>$r4</td>
    <td class=n>$r5</td>
    <td class=n>$r6</td>
    <td class=n>$r7</td>
    <td class=n>$r8</td>
    <td class=n>$r9</td>
    <td class=n>&nbsp;$r10</td>
  </tr>";
}

echo"
  </table>
 </body>
</html>
";
}

else {
echo"
<html>
 <style>
 .text {font-size:10.0pt; font-family:Arial;}

</style>
 <body bgcolor=#ffffff>
  <table border=0 width=100% height=40%>
   <tr><td align=center valign=middle class=text>$error</td></tr>
   <tr><td align=center valign=middle>
    <form action=klassenliste.php method=post target=_self>
     <table border=1 cellpadding=6 cellspacing=0 bordercolor=blue rules=none>
       <tr><td align=left valign=middle class=text>Passwort:</td></tr>
       <tr><td align=center valign=middle><input type=password name=name>&nbsp;</td></tr>
       <tr><td align=right valign=middle><input type=submit value=ok>&nbsp;</td></tr>
     </table>
    </form>
   </td></tr>
  </table>
 </body>
</html>";
}

?>