<?php
require 'commandes.php';

$commandes = new commandes();


// Boucle pour lire les commandes de l'utilisateur
while (true) {
    $line = readline("Entrez votre commande : ");
    echo "Vous avez saisi : $line\n";

    if ($line === "list") {
        $commandes->list();
    } else if (preg_match('/^detail (\d+)$/', $line, $matches)) {
        $id = $matches[1];
        $commandes->detail($id);
    } else if (preg_match('/^create (.+),(.+),(.+)$/', $line, $matches)) {
        $name = $matches[1];
        $email = $matches[2];
        $phone = $matches[3];
        $commandes->create($name, $email, $phone);
    } else if (preg_match('/^delete (\d+)$/', $line, $matches)) {
        $id = $matches[1];
        $commandes->delete($id);
    } else if ($line === "exit") {
        echo "Au revoir !\n";
        break;
    } else {
        echo "Commande inconnue. Veuillez réessayer.\n";
    }
}
