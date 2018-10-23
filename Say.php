<?php

echo '<b>Scritto da t.me/Matxk</b>';

																		t.me/DevelopingLab;

$admins = [ID, ID]; //Inserire gli ID degli admin che potranno usare /say
   
//Comando Start
if($msg == '/start') {
 	sm($chatID, '<i>Bot avviato con successo<i>\n\n<b>Se sei admin, scrivi in chat</b> <code>/say [ID] [MESSAGGIO]</code> <b>per mandare un messaggio a una persona tramite il suo ID</b>');
}

//Comando Say
if(stripos($msg, '/say')===0 and in_array($userID, $admins)) {
 $allmsg = explode(" ", $msg, 3);
 $destinator = $allmsg[1];
 $msgtext = $allmsg[2];

 if(is_numeric($destinator)) {
  if($msgtext > null) {
   sm($destinator, "<b>Staff: </b>".$msgtext);
  	 sm($chatID, '<b>Messaggio Inviata!</b>');
 }elseif($msgtext <= null) {
	  sm($chatID, "<b>Non puoi inviare un messaggio vuoto!</b>");
  }elseif(!is_numeric($destinator)) {
   sm($chatID, "<b>Puoi inviare un messaggio solo tramite l' ID dell utente!");
  }
 }
}