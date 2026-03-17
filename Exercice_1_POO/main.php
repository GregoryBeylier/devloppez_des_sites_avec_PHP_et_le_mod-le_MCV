<?php
require 'commandes.php';

$commandes = new commandes();


// Boucle pour lire les commandes de l'utilisateur
while (true) {
    $line = readline("Entrez votre commande : ");
    echo "Vous avez saisi : $line\n";

    if ($line === "list") {
        $commandes->list();
    }
}
