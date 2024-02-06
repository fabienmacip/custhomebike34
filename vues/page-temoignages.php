<div id="temoignages-div">
    <h1>TEMOIGNAGES</h1>

    <?php
        function calculAnterioriteAvis($dateAvis){
            $dateObj = new DateTime($dateAvis);
            $today = new DateTime('now');
            
            $difference = $dateObj->diff($today);
            
            $resultat = '';

            // Ajouter les années si elles sont présentes
            if ($difference->y > 0) {
                $resultat .= $difference->y . ' an(s) ';
            }

            // Ajouter les mois si ils sont présents
            if ($difference->m > 0) {
                $resultat .= $difference->m . ' mois ';
            }

            // Ajouter les jours si ils sont présents
/*             if ($difference->d > 0) {
                $resultat .= $difference->d . ' jour(s) ';
            }
 */
            return $resultat;

        }
    ?>
    <div id="temoignages-section">
        <div class="avis-google"> 
            <div>
                <div>
                    <img 
                            class="avis-img" 
                            alt="avatar-avis" 
                            src="img/temoignages/01.png"
                    >
                </div>    
                <div>
                    <span class="avis-auteur">Guy Massol</span>
                    <span class="avis-nb">Local Guide · 44 avis · 92 photos</span>
                </div>
            </div>
            <div>
                <div>
                    <img
                        class="avis-etoile"
                        alt="etoile"
                        src="img/icones/etoile-ok.png"
                    >
                    <img
                        class="avis-etoile"
                        alt="etoile"
                        src="img/icones/etoile-ok.png"
                    >
                    <img
                        class="avis-etoile"
                        alt="etoile"
                        src="img/icones/etoile-ok.png"
                    >
                    <img
                        class="avis-etoile"
                        alt="etoile"
                        src="img/icones/etoile-ok.png"
                    >
                    <img
                        class="avis-etoile"
                        alt="etoile"
                        src="img/icones/etoile-ok.png"
                    >
                </div>
                <div>
                    il y a <?= calculAnterioriteAvis("2023-06-01") ?>
                </div>
            </div>
            <div>
                <div>
                    Cedric, un pro de chez HD , 21 ans mécanicien chez HD Béziers, on peut lui confier sa bécane sans problème
                </div>
                <div>
                    Visit&eacute; en juin 2023
                </div>
            </div>
        </div>
        
        <div class="avis-google"> 
            <div>
                <div>
                    <img 
                            class="avis-img" 
                            alt="avatar-avis" 
                            src="img/temoignages/02.png"
                    >
                </div>    
                <div>
                    <span class="avis-auteur">Naty G</span>
                    <span class="avis-nb">20 avis · 11 photos</span>
                </div>
            </div>
            <div>
                <div>
                    <img
                        class="avis-etoile"
                        alt="etoile"
                        src="img/icones/etoile-ok.png"
                    >
                    <img
                        class="avis-etoile"
                        alt="etoile"
                        src="img/icones/etoile-ok.png"
                    >
                    <img
                        class="avis-etoile"
                        alt="etoile"
                        src="img/icones/etoile-ok.png"
                    >
                    <img
                        class="avis-etoile"
                        alt="etoile"
                        src="img/icones/etoile-ok.png"
                    >
                    <img
                        class="avis-etoile"
                        alt="etoile"
                        src="img/icones/etoile-ok.png"
                    >
                </div>
                <div>
                    il y a <?= calculAnterioriteAvis("2023-08-01") ?>
                </div>
            </div>
            <div>
                <div>
                    Très bon très professionnel.mécano connu chez harley beziers. 
                    On lui confiait notre bécane les yeux fermés.  
                    Heureux de t'avoir trouvé Cédric 😊😉 …
                </div>
                <div>
                    Visit&eacute; en ao&ucirc;t 2023
                </div>
            </div>
        </div>
    
        <div class="avis-google"> 
            <div>
                <div>
                    <img 
                            class="avis-img" 
                            alt="avatar-avis" 
                            src="img/temoignages/03.png"
                    >
                </div>    
                <div>
                    <span class="avis-auteur">Dominique Robert</span>
                    <span class="avis-nb">24 avis</span>
                </div>
            </div>
            <div>
                <div>
                    <img
                        class="avis-etoile"
                        alt="etoile"
                        src="img/icones/etoile-ok.png"
                    >
                    <img
                        class="avis-etoile"
                        alt="etoile"
                        src="img/icones/etoile-ok.png"
                    >
                    <img
                        class="avis-etoile"
                        alt="etoile"
                        src="img/icones/etoile-ok.png"
                    >
                    <img
                        class="avis-etoile"
                        alt="etoile"
                        src="img/icones/etoile-ok.png"
                    >
                    <img
                        class="avis-etoile"
                        alt="etoile"
                        src="img/icones/etoile-ok.png"
                    >
                </div>
                <div>
                    il y a <?= calculAnterioriteAvis("2023-10-01") ?>
                </div>
            </div>
            <div>
                <div>
                    Très pro..<br>
                    Accueil chaleureux..<br>
                    Ont sent la passion..
                </div>
                <div>
                    Visit&eacute; en octobre 2023
                </div>
            </div>
        </div>
    
        <div class="avis-google"> 
            <div>
                <div>
                    <img 
                            class="avis-img" 
                            alt="avatar-avis" 
                            src="img/temoignages/04.png"
                    >
                </div>    
                <div>
                    <span class="avis-auteur">Eric Maurel</span>
                    <span class="avis-nb">41 avis</span>
                </div>
            </div>
            <div>
                <div>
                    <img
                        class="avis-etoile"
                        alt="etoile"
                        src="img/icones/etoile-ok.png"
                    >
                    <img
                        class="avis-etoile"
                        alt="etoile"
                        src="img/icones/etoile-ok.png"
                    >
                    <img
                        class="avis-etoile"
                        alt="etoile"
                        src="img/icones/etoile-ok.png"
                    >
                    <img
                        class="avis-etoile"
                        alt="etoile"
                        src="img/icones/etoile-ok.png"
                    >
                    <img
                        class="avis-etoile"
                        alt="etoile"
                        src="img/icones/etoile-ok.png"
                    >
                </div>
                <div>
                    il y a <?= calculAnterioriteAvis("2023-08-01") ?>
                </div>
            </div>
            <div>
                <div>
                    Très gentil bien reçus.
                </div>
                <div>
                    Visit&eacute; en ao&ucirc;t 2023
                </div>
            </div>
        </div>

        <div class="avis-google"> 
            <div>
                <div>
                    <img 
                            class="avis-img" 
                            alt="avatar-avis" 
                            src="img/temoignages/05.png"
                    >
                </div>    
                <div>
                    <span class="avis-auteur">Rico Freaky</span>
                    <span class="avis-nb">Local Guide · 3 avis · 59 photos</span>
                </div>
            </div>
            <div>
                <div>
                    <img
                        class="avis-etoile"
                        alt="etoile"
                        src="img/icones/etoile-ok.png"
                    >
                    <img
                        class="avis-etoile"
                        alt="etoile"
                        src="img/icones/etoile-ok.png"
                    >
                    <img
                        class="avis-etoile"
                        alt="etoile"
                        src="img/icones/etoile-ok.png"
                    >
                    <img
                        class="avis-etoile"
                        alt="etoile"
                        src="img/icones/etoile-ok.png"
                    >
                    <img
                        class="avis-etoile"
                        alt="etoile"
                        src="img/icones/etoile-ok.png"
                    >
                </div>
                <div>
                    il y a <?= calculAnterioriteAvis("2023-09-01") ?>
                </div>
            </div>
            <div>
                <div>
                    
                </div>
                <div>
                    Visit&eacute; en septembre 2023
                </div>
            </div>
        </div>

        <div class="avis-google"> 
            <div>
                <div>
                    <img 
                            class="avis-img" 
                            alt="avatar-avis" 
                            src="img/temoignages/06.png"
                    >
                </div>    
                <div>
                    <span class="avis-auteur">Francoise ANDRE</span>
                    <span class="avis-nb">17 avis</span>
                </div>
            </div>
            <div>
                <div>
                    <img
                        class="avis-etoile"
                        alt="etoile"
                        src="img/icones/etoile-ok.png"
                    >
                    <img
                        class="avis-etoile"
                        alt="etoile"
                        src="img/icones/etoile-ok.png"
                    >
                    <img
                        class="avis-etoile"
                        alt="etoile"
                        src="img/icones/etoile-ok.png"
                    >
                    <img
                        class="avis-etoile"
                        alt="etoile"
                        src="img/icones/etoile-ok.png"
                    >
                    <img
                        class="avis-etoile"
                        alt="etoile"
                        src="img/icones/etoile-ok.png"
                    >
                </div>
                <div>
                    il y a <?= calculAnterioriteAvis("2023-09-01") ?>
                </div>
            </div>
            <div>
                <div>
                    
                </div>
                <div>
                    Visit&eacute; en septembre 2023
                </div>
            </div>
        </div>


    </div>

</div>