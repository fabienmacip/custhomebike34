<?php
session_start();

require_once('modeles/ConnectMe.php');
require_once('controleurs/controleur.php');
require_once('modeles/Modele.php');
require_once('modeles/MessageAbsence.php');
require_once('modeles/MessageAbsences.php');
require_once('modeles/Administrateur.php');
require_once('modeles/Administrateurs.php');

$controleur = new Controleur($pdo);

// PROCEDURE Connexion et Déconnexion
if(isset($_POST['action']) && 'connexion' === $_POST['action']) {
    $controleur->verifConnexion($_POST['connect-email'], $_POST['connect-passw']);
}  elseif (isset($_GET['page']) && 'deconnexion' === $_GET['page']) {
    $controleur->deconnexion();
}

// PAGE CONNEXION
elseif (isset($_GET['page']) && 'connexion' === $_GET['page']) {
    ob_start();
    require_once('vues/page-connexion.php');
    $contenu = ob_get_clean();
    require_once('vues/layout.php');

}

// MENTIONS LEGALES
elseif (isset($_GET['page']) && 'mentions-legales' === $_GET['page']) {
    ob_start();
    require_once('vues/page-mentions-legales.php');
    $contenu = ob_get_clean();
    require_once('vues/layout.php');
}

// NOS EVENEMENTS
elseif (isset($_GET['page']) && 'nos-evenements' === $_GET['page']) {
    ob_start();
    require_once('vues/page-nos-evenements.php');
    $contenu = ob_get_clean();
    require_once('vues/layout.php');
}

// NOS LOCAUX
elseif (isset($_GET['page']) && 'nos-locaux' === $_GET['page']) {
    ob_start();
    require_once('vues/page-nos-locaux.php');
    $contenu = ob_get_clean();
    require_once('vues/layout.php');
}

// TEMOIGNAGES
elseif (isset($_GET['page']) && 'temoignages' === $_GET['page']) {
    ob_start();
    require_once('vues/page-temoignages.php');
    $contenu = ob_get_clean();
    require_once('vues/layout.php');
}

// CONTACT & HORAIRES
elseif (isset($_GET['page']) && 'contact-horaires' === $_GET['page']) {
    ob_start();
    require_once('vues/page-contact-horaires.php');
    $contenu = ob_get_clean();
    require_once('vues/layout.php');
}

/* PARTENAIRE (LABELS) */

elseif (isset($_GET['page']) && 'partenaires' === $_GET['page']){
    ob_start();
    require_once('vues/page-partenaires.php');
    $contenu = ob_get_clean();
    require_once('vues/layout.php');
}

else {
    ob_start();
    require_once('vues/page-accueil.php');
    //$contenu = ob_get_clean();
    //require_once('vues/layout.php');
}

