<?php
// Fichier contenant les commandes disponibles
require 'ContactManager.php';



class commandes
{
    private $contactManager;

    // Constructeur pour instancier 
    public function __construct()
    {
        $this->contactManager = new ContactManager();
    }
    // Méthode pour afficher la liste des contacts
    public function list()
    {
        echo "affichage de la liste de contacts \n";
        $contacts = $this->contactManager->findAll();
        foreach ($contacts as $contact) {
            echo $contact . "\n";
        }
    }
}
