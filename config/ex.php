<?php

return <<<HTML

Impariamo a modellare la struttura dei nostri database grazie alle Migrations!<br>
Creiamo una tabella trains e relativa Migration, cercando di capire la natura dei campi necessari.<br> 

Ogni treno dovrà avere:<br>

    Azienda<br>
    Stazione di partenza<br>
    Stazione di arrivo<br>
    Orario di partenza<br>
    Orario di arrivo<br>
    Codice Treno<br>
    Totale Carrozze<br>
    Se in orario o meno<br>
    Se cancellato o meno<br>

È probabile che siano necessarie altre colonne per far funzionare la tabella nel modo corretto 😉<br>

Inventiamo dei dati fittizi e inseriamoli tramite PhpMyAdmin.<br>

Creiamo un Model per i treni ed un relativo Controller per poi mostrare nella home page tutti i treni che sono in partenza dalla data odierna in avanti, in ordine cronologico.<br>

Bonus<br> 
Con un po' di fantasia inventiamo lo stile del nostro tabellone treni!<br> 
Posso suggerire il font "Share Tech Mono"?<br>
HTML;
