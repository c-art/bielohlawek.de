<?php
  /*   Copyright by C-ART WEBDESIGN '2002 - www.c-art-web.de - (c-art@web.de)    - 08/01/02	 */
   // requires: $bgcolor $background $id
   //                    Farbschema

 require("inc.config.php");

 $subfix2 = (@GetImageSize ("../img/headln.gif")) ? "gif" : "jpg";
 $size = @GetImageSize ("../img/headln.$subfix2");
echo"
<html>
<body class=bodyst>
<a href=main.php target=main><img src=../img/headln.$subfix2 $size border=0></a>
</body>
</html>
";

?>