<?php

namespace App\Controller;

use App\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Controller\BddController;

class LoginController extends AbstractController
{
    private $bddController;

    public function __construct(BddController $bddController)
    {
        $this->bddController = $bddController;
    }

    #[Route('/login')]
    public function index(Request $request): Response
    {
        try {
            $message = '';

            // Vérification de la soumission du formulaire
            if ($request->isMethod('POST') && $request->get('submit')) {
                $username = $request->get('username');
                $password = $request->get('password');

                if (empty($username) || empty($password)) {
                    $message = 'Tous les champs sont requis';
                } else {
                    // Utiliser le contrôleur BddController pour se connecter à la base de données
                    $pdo = $this->bddController->connectToDatabase();

                    $requete = $pdo->prepare("SELECT motDePasse,idRole,id FROM utilisateurs WHERE identifiant=:identifiant");
                    $requete->bindParam(':identifiant', $request->get("username"));
                    $requete->execute();
                    $verify = $requete->fetch();
                    $count = $requete->rowCount();

                    if ($count > 0 && password_verify($request->get("password"), $verify["motDePasse"])) {
                        $session = $request->getSession();
                        $session->set('username', $request->get("username"));
                        $session->set('role', $verify["idRole"]);
                        $session->set('idUtilisateur', $verify["id"]);

                        return $this->redirectToRoute('accueil');
                    } else {
                        $message = "Mauvais nom d'utilisateur ou mot de passe";
                    }
                }
            }
        } catch (\PDOException $error) {
            $message = $error->getMessage();
        }

        return $this->twig->render('login.html.twig', ['message' => $message]);
    }
}
