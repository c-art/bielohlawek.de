<?php
  /*   Copyright by C-ART WEBDESIGN '2002 - www.c-art-web.de - (c-art@web.de)    - 08/01/02	 */

 include("inc.config.php");

 session_register("sess_vote");
 session_register("sess_fav");
 session_register("sess_userid");
 session_register("sess_aufl");

 $sess_aufl=$aufl;
 session_start();

 if ($cook_userid) $sess_userid=$cook_userid;
 else {
  $sess_userid=md5(uniqid(rand()));              //make new Userid
  setcookie ("cook_userid", $sess_userid, 2*time(),"/");
 }

 if ($cook_id=="") {
  setcookie("cook_id",time(),time()*2,"/");
  statistic($cfg_sitename, "visits", $cook_id, "visit", $connr);
 }
 else statistic($cfg_sitename, "views", $cook_id, "visit", $connr);

 $toe_goto=($ecard) ?  "album_ecardfetch.php?userkey=$ecard" : "album_start.php";

echo"
<html>
 <head>
  <title>Realschulklasse 1967</title>
 </head>
 <frameset rows=\"40,*\" border=0 frameborder=0 framespacing=0>
  <frame src=headln.php?id=1  name=1  marginwidth=0 marginheight=0 scrolling=no noresize>
  <frameset cols=\"150,*\" border=0 frameborder=0 framespacing=0>
   <frame src=link.php name=4  marginwidth=0 marginheight=0 scrolling=no noresize>
   <frame src=main.php  name=main  marginwidth=0 marginheight=0 noresize>
  </frameset>
 </frameset>
</html>";

?>
