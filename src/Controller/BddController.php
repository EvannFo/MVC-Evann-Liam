<?php

namespace App\Controller;

use App\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use PDO;

class bddController extends AbstractController
{
    public function connectToDatabase()
    {
        // Configuration de la connexion PDO
        $dsn = 'mysql:host=127.0.0.1;port=3306;dbname=Dermatillomanie';
        $username = 'root';
        $password = 'root';

        // Création de l'instance PDO
        $pdo = new PDO($dsn, $username, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));


        return $pdo;
    }

    public function index()
    {
        // Appel de la méthode connectToDatabase() publique
        $pdo = $this->connectToDatabase();

        // Utilisation de $pdo pour interagir avec la base de données
        // ...

        return new Response('Connected to the database');
    }
}
