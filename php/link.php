<?php
  /*   Copyright by C-ART WEBDESIGN '2002 - www.c-art-web.de - (c-art@web.de)    - 08/01/02	 */

  $subfix2 = (@GetImageSize ("../img/desk.gif")) ? "gif" : "jpg";
  $size = @GetImageSize ("../img/desk.$subfix2");


echo"
<html>
<style type=\"text/css\">
 .bodyst { background-image:url(../img/style/$style/b4.gif); background-repeat:no-repeat; background-attachment:fixed; background-position:0px 0px;  }
</style>
 <body bgcolor='$bgcolor' class=bodyst>



<table border=0 width=130 height=250>
 <tr><td align=center><br><br><img src=\"../img/desk.$subfix2 \" usemap=#map border=0 $size></td></tr>
</table>

<map name=\"map\">";

 $link[0]="";
 $link[1]="site.php?cat=164&catname=Oberseemen&str=1&aufl=100";
 $link[2]="site.php?cat=163&catname=Grainau&str=1&aufl=100";
 $link[3]="site.php?cat=162&catname=Detlef&str=1&aufl=100";
 $link[4]="site.php?cat=165&catname=Klassentreffen&str=1&aufl=100";
 $link[5]="";
 $link[6]="klassenliste.php";
 $link[7]="album_guestb.html";
 $link[8]="";
 $link[9]="";
 $link[10]="";
 $link[11]="";
 $link[12]="";

 if ($link[0] !="") echo "<area shape=rect coordS=\"5,10,120,27\"    target=main href=\"$link[0]\" alt=\"\"></area>";
 if ($link[1] !="") echo "<area shape=rect coordS=\"5,28,120,45\"    target=main href=\"$link[1]\" alt=\"\"></area>";
 if ($link[2] !="") echo "<area shape=rect coordS=\"5,46,120,63\"    target=main href=\"$link[2]\" alt=\"\"></area>";
 if ($link[3] !="") echo "<area shape=rect coordS=\"5,64,120,81\"    target=main href=\"$link[3]\" alt=\"\"></area>";
 if ($link[4] !="") echo "<area shape=rect coordS=\"5,82,120,99\"    target=main href=\"$link[4]\" alt=\"\"></area>";
 if ($link[5] !="") echo "<area shape=rect coordS=\"5,100,120,117\"  target=main href=\"$link[5]\" alt=\"\"></area>";
 if ($link[6] !="") echo "<area shape=rect coordS=\"5,118,120,135\"  target=main href=\"$link[6]\" alt=\"\"></area>";
 if ($link[7] !="") echo "<area shape=rect coordS=\"5,136,120,153\"  target=main href=\"$link[7]\" alt=\"\"></area>";
 if ($link[8] !="") echo "<area shape=rect coordS=\"5,154,120,171\"  target=main href=\"$link[8]\" alt=\"\"></area>";
 if ($link[9] !="") echo "<area shape=rect coordS=\"5,172,120,189\"  target=main href=\"$link[9]\" alt=\"\"></area>";
 if ($link[10] !="") echo "<area shape=rect coordS=\"5,190,120,207\" target=main href=\"$link[10]\" alt=\"\"></area>";
 if ($link[11] !="") echo "<area shape=rect coordS=\"5,208,120,225\" target=main href=\"$link[11]\" alt=\"\"></area>";
 if ($link[12] !="") echo "<area shape=rect coordS=\"5,226,120,250\" target=main href=\"$link[12]\" alt=\"\"></area>";

echo"
</map>
</body>
</html>

";
