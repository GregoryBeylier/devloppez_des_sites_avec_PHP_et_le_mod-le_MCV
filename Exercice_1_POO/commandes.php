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
    // Méthode pour afficher les détails d'un contact
    public function detail($id)
    {
        $contact = $this->contactManager->findbyId($id);
        echo $contact . "\n";
    }
    // Méthode pour créer un nouveau contact
    public function create($name, $email, $phone)
    {
        $this->contactManager->createContact($name, $email, $phone);
        echo "contact créé avec succès !\n";
    }

    // Méthode pour supprimer un contact
    public function delete($id)
    {
        $this->contactManager->deleteContact($id);
        echo "contact supprimé avec succès !\n";
    }
}
