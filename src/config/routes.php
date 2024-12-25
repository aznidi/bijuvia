<?php

// Inclure les contrôleurs nécessaires
require_once '../src/controllers/HomeController.php';
require_once '../src/controllers/ProductController.php';
require_once '../src/controllers/CartController.php';
require_once '../src/controllers/AuthController.php';

// Fonction pour définir les routes
function defineRoutes() {
    // Vérifier la route demandée
    $route = $_GET['route'] ?? 'home';  // Route par défaut
    switch ($route) {
        case 'home':
            showHome();  // Affiche la page d'accueil
            break;

        case 'product':
            $productId = $_GET['id'] ?? null;
            if ($productId) {
                showProduct($productId);  // Affiche le produit avec l'ID passé
            } else {
                echo "Produit introuvable.";
            }
            break;

        case 'cart':
            showCart();  // Affiche le contenu du panier
            break;

        case 'login':
            login();  // Affiche la page de connexion
            break;

        case 'register':
            register();  // Affiche la page de connexion
            break;

        case 'logout':
            logout();  // Déconnecte l'utilisateur
            break;

        default:
            echo "Page introuvable.";  // Page 404 si la route n'est pas trouvée
            break;
    }
}
?>
