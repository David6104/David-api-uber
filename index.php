<?php
echo "Ceci est la page index.php<br><br>";

// Vérifie si le paramètre "page" est vide ou non présent dans l'URL
if (empty($_GET["page"])) {
    echo "La ressource demandée n'existe pas.";
} else {
    // On découpe la chaîne en segments
    $url = explode("/", $_GET['page']);

    // Affiche le tableau pour vérification

    print_r($url);

  // On teste le premier segment pour déterminer la ressource demandée
    switch($url[0]) {
        case "chauffeurs":
            // Si un second segment est présent (ex: un ID), on l’utilise
            if (isset($url[1])) {
                echo "Afficher les informations du chauffeur : " . $url[1];
                  // Exemple : /chauffeurs/3 → affiche les infos du chauffeur 3
            } else {
                // Sinon, on affiche tous les chauffeurs
                echo "Afficher les informations des chauffeurs";
            }
            break;

        case "clients":
            if (isset($url[1])) {
                echo "Afficher les informations du client : " . $url[1];
            } else {
                echo "Afficher les informations des clients";
            }
            break;

        case "voitures":
            if (isset($url[1])) {
                echo "Afficher les informations de la voiture : " . $url[1];
            } else {
                echo "Afficher les informations des voitures";
            }
            break;

        case "trajets":
            if (isset($url[1])) {
                echo "Afficher les informations du trajet : " . $url[1];
            } else {
                echo "Afficher les informations des trajets";
            }
            break;
        // Si la ressource n'existe pas, on renvoie un message d’erreur
        default:
            echo "La page n'existe pas";
    }
}
?>
