<DOCTYPE! hmtl>
<head>
    <title>Einschreibung</title>
</head>
<body>
    
<?php

// Verbindung zur Datenbank
$verbindung = mysqli_connect("localhost", "root", "", "WTC");

 if(mysqli_connect_error()){

        die("Es konnte keine Verbindung zur Datenbank hergestellt werden.");
    };
// Variablen, in denen die Eingabe entgegengenommen wird        
$vorname = $_POST["vorname"];
$nachname = $_POST["nachname"];
$email = $_POST["email"];
$firma = $_POST["firma"];
 
// Kontrolle, ob etwas eingetragen wurde
if($vorname == "" or $nachname == "" or $email == "" or $firma == ""){
    echo "Sie müssen alle Felder ausfüllen!";
}else {
    
    // Bei erfolgreichem Eintrag werden die Daten gesammelt und in der Datenbank abgespeichert
    $eintrag = "INSERT INTO einschreiben (Vorname, Nachname, Email,Firma) VALUES ('$vorname', '$nachname', '$email', '$firma')";
    
    $eintragen = mysqli_query($verbindung, $eintrag);
    
    // Meldung für den Einzutragenden, ob alles erfolgleich war
    if($eintragen == true){
      
        echo "Sie haben sich erfolgreich eingeschrieben!";
        
    }else "Fehler: Ihre Einschreibung konnte nicht abgespeichert werden!";
    
}; 

?>    
    
</body>