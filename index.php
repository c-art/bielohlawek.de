<?php
  /*   Copyright by C-ART WEBDESIGN '2002 - www.c-art-web.de - (c-art@web.de)    - 08/01/02	 */

 if ($ecard) header("Location: php/album_frame.php?ecard=$ecard");
 
 $year = "?year=".(date("Y") - 1967)."&year2=".date("Y");
 ?>

<html>
<title>Realschulklasse 1967</title>
<body>


<style type="text/css">
  .link {font-family: arial,verdana,helvetica,sans-serif; font-size: 12pt; color:#0B36A4; font-style:italic; font-weight:bold; text-decoration:none;}
  .alink {font-family: arial,verdana,helvetica,sans-serif; font-size: 8pt; color:#000000; font-style:italic; text-decoration:none;}
</style>

<script language="JavaScript" type="text/javascript">
    if (screen.width>1000) faktx='aufl=1024&';
    else if (screen.width>700) faktx='aufl=800&';
    else faktx='aufl=600&';
</script>

<br>
<table border=0 width=100%>
<tr><td align=center>

<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0" WIDTH=800 HEIGHT=440>
 <?php echo'<PARAM NAME=movie VALUE="klassentreffen.swf'.$year.'">'; ?>
 <PARAM NAME=loop VALUE=false> 
 <PARAM NAME=menu VALUE=false> 
 <PARAM NAME=quality VALUE=high> 
 <PARAM NAME=scale VALUE=exactfit> 
 <PARAM NAME=bgcolor VALUE=#FFFFFF> 
 <?php echo'<EMBED src="klassentreffen.swf'.$year.'" loop=false menu=false quality=high scale=exactfit bgcolor=#FFFFFF  WIDTH=800 HEIGHT=440 TYPE="application/x-shockwave-flash" PLUGINSPAGE="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash"></EMBED>'; ?>
</OBJECT>

</td></tr>
<tr><td align=center class="alink">best viewed in 800*600, IE or NE, Cookies and Javascript enabled<br><a href="http://www.c-art-web.de/sign/index.php?id=virtualbum_detlef" class="alink">(c) by C-Art Webdesign'00 - www.c-art-web.de</a></td></tr>


</table>
</body>
</html>


