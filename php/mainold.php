<?php
  /*   Copyright by C-ART WEBDESIGN '2002 - www.c-art-web.de - (c-art@web.de)    - 08/01/02	 */
   // requires: $bgcolor $background $id
   //                    Farbschema


  $subfix = (@GetImageSize ("../img/klassenfoto.gif")) ? "gif" : "jpg";
  $size = @GetImageSize ("../img/klassenfoto.$subfix2");
  $subfix2 = (@GetImageSize ("../img/signature.gif")) ? "gif" : "jpg";
  $size = @GetImageSize ("../img/signature.$subfix2");


echo"
<html>
<style type=\"text/css\">
 .bodyst {background-repeat:no-repeat; background-attachment:fixed; background-position:0px 0px; background-color:$bgcolor }
</style>
<link rel=stylesheet type=\"text/css\" href=\"style.css\">
<body class=bodyst>
 <table border=0 width=100%>
   <tr><td class=text colspan=2><br>

   <font color=red size=+2>Hüttenwochenende findet wegen zu geringer Anmeldung nicht statt.</font><br><br>
Hüttenwochenende - Auf geht's!!<br>
<br>
Das Wochenende steht fest, die Hütte ist reserviert und der Schwarzwald
wartet auf uns! Bitte haltet Euch unbedingt <b>das Wochenende am 12/13.
Oktober</b> frei! Wir wollen uns dann nämlich urig, gesellig vergnügen und so
mal richtig die Seele baumeln lassen.<br>
<br>
Macht mit bei unserem zweiten Hüttenwochenende!!! Das erste hat vor 19
Jahren an gleicher Stelle stattgefunden. Wisst ihr noch???<br>
<br>
Wie immer wollen wir uns mit Partner treffen. Einzelheiten gehen denjenigen
zu, die sich bitte bei mir <b>bis 1. September anmelden</b>.<br>
<br>
Ich hoffe, dass viele wieder einmal Lust haben im Schlafsack und
Stockwerkbetten und (fast) wie in alten Zeiten in Ober Seemen oder Grainau
ein Hauch von Abenteuer zu erleben. Aus dem Alter sind wir doch noch nicht
raus!!! Oder???<br>
<br>
Also bitte das Wochenende frei planen und nichts wie hin.<br>&nbsp;</td></tr>
   <tr><td class=fake>&nbsp;</td></tr>
   <tr><td align=center valign=top class=text><br><img src=../img/signature.$subfix2 $size></td></tr>
 </table>
</body>
</html>
";

?>