<?php

$titre = 'CUST\'HOME BIKE 34';

ob_start();

?>



<div class="m-0 max-width-100vw">
  <div id="div-image-accueil" class="box">
      <span>
        Cust'Home Bike 34<br>
      </span>
      <span>
        powered by<br>
      </span>
      <span>
        MSR 34
      </span>
  </div>

<?php

// DEBUT Test si "message absence" à afficher

if(isset($messagesAbsencesToday) && !empty($messagesAbsencesToday) ) { ?>

  <input type="hidden" id="message-absence-flag" value="yes">
  <div id="message-absence">
    <?= $messagesAbsencesToday->getMessage(); ?>
    
  </div>

<?php }
// FIN Test si "message absence" à afficher

// Gestion des messages d'absence
if (isset($_SESSION['admin']) && $_SESSION['admin'] > 0) {
  require_once('messagesAbsence.php');
  require_once('passwordModify.php');
}
?>

  <div class="row max-width-100percent jcc wrap" id="accueil-text-boxes">
    
    <div class="accueil-text-boxes" id="accueil-generalites">
      <h2>Bienvenue chez Cust'Home Bike 34</h2>
  
      <div id="image-accueil-text">
        Votre sp&eacute;cialiste<span class="span-dash"> - </span><span class="span-br"><br></span>
        entretien & r&eacute;paration<br>
        motos am&eacute;ricaines
      </div>
      <div id="image-accueil-sub-text">
        <b>Cust'Home Bike34</b> se distingue en tant que spécialiste de l'entretien et de la réparation 
        de <b>motos américaines</b>. Avec une expertise dédiée, notre équipe assure des services professionnels 
        sur mesure, préservant la performance et l'authenticité des motos américaines pour 
        une expérience de conduite optimale.
      </div>


      <p>
        <b>Ouverture</b><br>
        Mardi<br>
        09h00 - 12h00<br>
        13h00 - 18h00<br><br>
        Mercredi - Jeudi - Vendredi<br>
        08h00 - 12h00<br>
        13h00 - 18h00
      </p>      
      <p>
        <b>Adresse</b><br>
        2, rue Jojo Barrau<br>
        Local 17<br>
        Nissan-les-Ens&eacute;runes (34440)
      </p>
    </div>

    <div id="accueil-motos" class="accueil-text-boxes">
      <div id="accueil-motos-cards">
        <div class="accueil-motos-card">
          <div class="accueil-motos-card-img">
            <img src="img/accueil-motos/harley.jpg">
          </div>
          <div class="accueil-motos-card-text">
            <b>Cust'Home Bike 34</b> est une société spécialisée dans la <u>réparation de motos emblématiques</u>, 
            notamment les <b>Harley Davidson</b>. Avec une équipe hautement qualifiée, nous redonnons vie 
            à ces machines légendaires en fournissant des services de réparation professionnels et 
            méticuleux, assurant ainsi une <u>performance optimale</u> et une <u>expérience de conduite exceptionnelle</u>.
          </div>
        </div>
        <div class="accueil-motos-card">
          <div class="accueil-motos-card-img">
            <img src="img/accueil-motos/victory.jpg">
          </div>
          <div class="accueil-motos-card-text">
            <b>Cust'Home Bike 34</b> excelle dans la réparation des motos de la marque <b>Victory</b>. Notre équipe 
            dévouée et compétente offre des services de réparation spécialisés, assurant la restauration 
            complète de ces machines emblématiques pour offrir des <u>performances optimales</u> et une 
            <u>expérience de conduite incomparable</u>.
          </div>
        </div>
        <div class="accueil-motos-card">
          <div class="accueil-motos-card-img">
            <img src="img/accueil-motos/buell.jpg">
          </div>
          <div class="accueil-motos-card-text">
            <b>Cust'Home Bike 34</b> se distingue par sa maîtrise dans la réparation des motos de la marque 
            <b>Buell</b>. Grâce à notre équipe experte, nous offrons des services de réparation spécialisés, 
            redonnant vie à ces machines uniques pour une <u>performance exceptionnelle</u> et une <u>expérience de conduite inégalée</u>.
          </div>
        </div>
        <div class="accueil-motos-card">
          <div class="accueil-motos-card-img">
            <img src="img/accueil-motos/indian.jpg">
          </div>
          <div class="accueil-motos-card-text">
            <b>Cust'Home Bike 34</b> se distingue par son expertise dans la réparation des motos de la 
            marque <b>Indian</b>. Forts d'une équipe hautement qualifiée, nous offrons des services 
            de réparation personnalisés, redonnant vie à ces motos emblématiques pour garantir 
            <u>une performance optimale</u> et une <u>expérience de conduite inégalée</u>.
          </div>
        </div>

      </div>
    </div>
  </div>

</div>


<?php
$contenu = ob_get_clean();
require_once('layout.php');