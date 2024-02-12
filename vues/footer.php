<footer class="text-center mt-5">
        <div class="flex-1" id="footer-special-links">
            
            
            <?php 
            if(!isset($_SESSION['admin']) || $_SESSION['admin'] < 1) { ?>
              <a href="index.php?page=connexion">Connexion</a>&nbsp;&nbsp;|&nbsp;&nbsp;
          <?php
            } else { ?>
              <a href="index.php?page=deconnexion">Se d&eacute;connecter</a>&nbsp;&nbsp;|&nbsp;&nbsp;
          <?php
            }
          ?>



          <a href="index.php?page=mentions-legales">Mentions L&eacute;gales</a>
        </div>
        <div class="flex-1" id="footer-partenaires">
            Nos partenaires
        <div id="footer-partenaires-div">
            <div>
                <a href="https://www.custom-chrome-europe.com/fr/" target="_blank">
                    <img src="img/partenaires/custom-chrome-europe.svg" alt="custom-chrome-europe">
                </a>
            </div>
            <div class="bg-white">
                <a href="https://www.motorcyclestorehouse.com/" target="_blank">
                    <img src="img/partenaires/motorcyclesstorehouse.png" alt="motorcyclesstorehouse">
                </a>
            </div>
            <div>
                <a href="https://www.partseurope.eu/fr/" target="_blank">
                    <img src="img/partenaires/partseurope.png" alt="partseurope">
                </a>
            </div>
            <div class="bg-white">
                <a href="https://mag-online.com/" target="_blank">
                    <img src="img/partenaires/mag-online.png" alt="mag-online">
                </a>
            </div>
            <div class="bg-white">
                <a href="https://hocoparts.com/" target="_blank">
                    <img src="img/partenaires/hocoparts.png" alt="hocoparts">
                </a>
            </div>
            <div id="p2r-expert">
                <a href="https://www.p2r-expert.com/fr/?moto" target="_blank">
                    <img src="img/partenaires/p2r-expert.svg" alt="p2r-expert">
                </a>
            </div>                
            <div>
                <a href="https://www.ngkntk.com/fr/" target="_blank">
                    <img src="img/partenaires/ngk-bougies.webp" alt="ngk-bougies">
                </a>
            </div>
        </div>    
        </div>
        <div class="flex-1">
            <p>Cust'Home Bike 34 - Colombiers (34440) - Tous droits réservés</p>
            <p>Webmaster - <a href="mailto:fabien.macip@gmail.com">fabien.macip@gmail.com</a></p>
        </div>
</footer>
