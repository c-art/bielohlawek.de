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
   <tr><td class=fake colspan=2>&nbsp;</td></tr>
    <tr><td valign=top align=center class=text><img src=../img/klassenfoto.$subfix $size  valign=top><br><b>Oben:</b> Horst, Ludwig, J�rgen, Roland, Georg, Heidemarie, Gabi, Eckart, Helmbert, Detlef, Franz, Wolfgang<br><b>Mitte:</b> Elke, Hr. Arzt, Annemarie, Renate, Monika, Monika, Rita, Brigitte, Rita, Marianne, Ursula, Klaus<br><b>Unten:</b> Alida, Marianne, Doris, Helga, Irmtraud, Inge, Sonja, Monika, Ulrike<br>(Wolfgang fehlt)</td></tr>
   <tr><td class=text>

<br><br>
   Das Klassentreffen muss mangels reger Teilnahme leider <font color=red>ausfallen</font>.
   <br>Ich hoffe auf mehr Zusagen beim n�chsten Mal!<br>

<!--
Liebe Klassenkameradinnen und -kameraden!<br><br>
Die Vorbereitungen zum n�chsten Klassentreffen laufen an. Ich hatte euch zu
einem zwanglosen Abstimmungstreffen nach Ginsheim eingeladen, an dem dann
auch insgesamt 5 Klassenkameradinnen und ?kameraden teilnahmen.
Wir haben uns intensivst und ausgiebig bis sp�t in die Nacht beraten.
Zun�chst haben wir die schriftlich eingegangenen Vorschl�ge gesichtet und
eigene dazu genommen. Sehr angeregt wurden alle realistischen M�glichkeiten
diskutiert, bewertet, verworfen und erneut betrachtet. Sehr lange
favorisiert, fast bis zum Schluss, wurde ein kollektiver Marathonlauf in
einer attraktiven europ�ischen Stadt. Ein anderer Vorschlag, ebenfalls
ernsthaft gepr�ft, wurde ein gemeinsamer Shopping-Vormittag. Als Anreiz
sollte der Sieger ermittelt werden, der den gr��ten Satz Hemden erstanden
hat.<br>
Aber alles wurde am Ende doch wieder als ungeeignet betrachtet und eine
recht alte Idee nahm dann konkrete Gestalten an. Wir wollen uns am
Wochenende 11/12. Oktober 2003 im sch�nen Odenwald treffen und uns einmal
richtig verw�hnen und die Seele baumeln lassen. Dazu haben wir das Hotel
Schafhof in Amorbach (Bayern) ausgesucht. Wer Internetanschlu� hat sollte
die Webseite www.schafhof.de besuchen, um sich �ber das umfangreiche
Angebot zu informieren. Es bietet wirklich sehr viel, z.B.  Tennis, Schach im
Freien, Boccia, Tischtennis f�r die sportlich orientierten unter uns und es
ist auch ein Sauna, Solarium, Vital & Beauty Refugium vorhanden.
Wie beim letzten Mal sind die Partner herzlich willkommen. Die
Entscheidung,
ob das Wochenende mit oder ohne Partner verbracht werden soll, liegt
nat�rlich bei jedem selbst.<br>
Die Doppelzimmerpreise (also f�r 2 Personen) liegen z.Z. bei  130.- inkl.
Fr�hst�ck nat�rlich; und ich f�hre mit der Hotelleitung konkrete
Verhandlungen einen hoffentlich guten Rabatt auszuhandeln. Dabei k�nnt ihr
mich tatkr�ftig unterst�tzen, indem ihr euch umgehend bei mir anmeldet. Ihr
kennt das Prinzip: je mehr Personen ich verbindlich anmelden kann, desto
st�rker wird meine Position, den Zimmerpreis dr�cken zu k�nnen.
Also, ich bitte umgehend um Anmeldung mit Angabe der Personenzahl bei mir.
Das kann per eMail geschehen, aber nat�rlich auch per konventioneller Post
und per Telefon an die private Nummer. Mit einer SMS bin ich auch
einverstanden und zwar an 0170-3396 191. Alle Anmeldungen m�ssen aber eins
gemeinsam haben: sie m�ssen verbindlich sein!!<br>
Aufgepasst: Anmeldeschluss ist der 20. Juli 2003<br><br>
Viele Gr��e und ich freue mich schon auf das laaaaange Wochenende mit euch.<br> -->
<br>
<img src=../img/signature.$subfix2 $size>
<br>
PS:<br>
Adressen ge�ndert? Bitte Info an mich per Post oder unter
detlef@bielohlawek.de<br>
Ich suche immer noch die Adresse von Heidemarie Scholz!!!

   </td></tr>
  <!-- <tr><td align=center valign=top class=text>Die Fotos vom Klassentreffen sind endlich online. Viel Spa� beim Anschauen.<br><img src=../img/signature.$subfix2 $size></td></tr>-->
 </table>
</body>
</html>
";

?>