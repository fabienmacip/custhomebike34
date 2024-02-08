<!DOCTYPE html>
<html lang="fr">
<?php
    require_once("head.php");
?>
<body id="body">

<?php
    if(isset($_SESSION['admin']) && $_SESSION['admin'] === 1) {
        echo "<input type='hidden' id='isSuperAdmin' value='1'>";
        echo "<input type='hidden' role='1'>";
    } elseif (isset($_SESSION['admin']) && $_SESSION['admin'] > 1) {
        $sessionAdmin = $_SESSION['admin'];
        echo "<input type='hidden' id='isAdmin' value='".$sessionAdmin.">";
        echo "<input type='hidden' role='2'>";
    }
?>

<?php
    require_once("header.php");
?>

<?php
    if(isset($_SESSION['admin']) && $_SESSION['admin'] > 0) {

        ?>
           <div id='admin-greeting'>
                Bonjour <b><?= $_SESSION['prenom']; ?> <?= $_SESSION['nom']; ?></b>,<br>
                Vous &ecirc;tes connect&eacute;(e) avec l'adresse mail : <?= $_SESSION['mail']; ?>.
            </div>
        <?php
    }
?>

<section>

    <?php 
    require_once('nav.php');
    ?>

    <?= $contenu ?>
</section>

</main>
<!-- fw-light fst-italic fs-6 -->
<?php
    require_once('footer.php');
?>
<!-- ADDED -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<!-- FIN ADDED -->

</body>
</html>