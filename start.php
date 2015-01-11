<?php
  /*   Copyright by C-ART WEBDESIGN '2002 - www.c-art-web.de - (c-art@web.de)    - 08/01/02	 */

 session_start();
 ?>

<html>
<script language="JavaScript">
  if (screen.width>1000) faktx='?aufl=1024';
  else if (screen.width>700) faktx='?aufl=600';
  else faktx='?aufl=400';

  self.location.href='php/frame.php'+faktx
</script>
</html>


