<?php
  /*   Copyright by C-ART WEBDESIGN '2001 - www.c-art-web.de - (c-art@web.de)   */

 //*************** Config File ***********************
 $ver="3.0".date("n.j", getlastmod());

 if ($libarypath=="") $libarypath="../../_libary";
 include("$libarypath/inc.config.php");
 @include("inc.lng_german.php");

 $nousrchk=true;

 $cfg_picpath="../private";

 //Colors
 $bgc_headln="#1026AE";
 $bgc_main="#AEBFE3";

 //for picsend
 $cfg_uploadpath="../private/05_newpics";
 $cfg_allowed_filetype[0]="image/pjpeg";
 $cfg_allowed_filetype[1]="image/jpeg";
 $cfg_allowed_filetype[2]="image/gif";
 $cfg_picsendto="t.bielohlawek@gmx.de";

 //for TobiCam
 $cfg_campath="http://cerberos.dnsalias.net:8882/";
 $cfg_camfile="ShowLatest.class";
 $cfg_cammsgsendto="39225973@pager.icq.com";

 //for Ecard
 $cfg_default_img_height="200";

 $sess_userftpdir="tobias projects/virtualbum.de/private";
 $sess_whereshow="";

 $cfg_sitename = "8";

 //for Site
 $cfg_aufl=1024;
 $cfg_aufl_fakt[1024]=1;
 $cfg_aufl_fakt[800]=0.7;
 $cfg_aufl_fakt[600]=0.5;
 $cfg_aufl_fakt[100]=0.25;
 $cfg_dia_time=4;    // time how long pic is shown
 $cfg_pic_row=3;     // anz Pics per Row
 $cfg_pic_req=9;     //anz pics per Page

 //for votes
 $cfg_anz_votes=6;

 //for Guestbook
 $cfg_gbsendto="t.bielohlawek@gmx.de";

 //MySql connections
 //none take default:
 $connr=10;

 include("$libarypath/inc.mysqlconnect.php");
 include("$libarypath/inc.tools.php");

 $mysql_tbkat1=mysql_fetch_tabname("\_kategorie1",$connr);
 $mysql_tbkat2=mysql_fetch_tabname("\_kategorie2",$connr);
 $mysql_tbpic=mysql_fetch_tabname("\_fotos",$connr);

 $mysql_tbfav=mysql_fetch_tabname("\_userfavoriten",$connr);

 $mysql_tbecard=mysql_fetch_tabname("\_ecard",$connr);
 $mysql_tbgb=mysql_fetch_tabname("\_dadgaestebuch",$connr);
 $mysql_tbpicsend=mysql_fetch_tabname("\_fremdefotos",$connr);
 $mysql_tbadr=mysql_fetch_tabname("\_adressen",$connr);

 $mysql_tbstat=mysql_fetch_tabname("\_stat",$connr);

 $statowner="virtak";
?>