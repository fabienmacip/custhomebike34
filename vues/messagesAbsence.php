<div id="messageAbsenceForm">

<?php 
    $today = new DateTime('now');
    $today = $today->format('Y-m-d');
    $tomorrow = new DateTime('now');
    $tomorrow->add(new DateInterval('P1D'));
    $tomorrow = $tomorrow->format('Y-m-d');
?>

<?php

if(isset($msgConfirm) && $msgConfirm !== '') { ?>
  <div id="msgabsAdded"><?= $msgConfirm ?></div>
<?php } ?>

<!-- CREATION D'UN MESSAGE -->
<!-- action="app/controleurs/editMessageAbsence.php" -->
<form id="formMsgAbs" method='post' class="form-msgabs" action="index.php" style="background-color: #55bf55;">
        
        <input type="hidden" id="page" name="page" value="accueil"/>
        <input type="hidden" id="action" name="action" value="messageAbsenceCreate"/>
        
        <label for="datedebut" class="msgabs-input-label">Date d&eacute;but affichage (inclus)<br/>
        <input type="date" name="datedebut" id="datedebut" value="<?= $today ?>" min="2022-05-01" max="2060-12-31" class="date-picker date-debut" tabindex="1"><br/><br/>
        </label>

        <label for="datefin" class="msgabs-input-label">Date fin affichage (inclus)<br/>
        <input type="date" name="datefin" id="datefin" value="<?= $tomorrow ?>" min="2022-05-01" max="2060-12-31" class="date-picker date-fin" tabindex="2"><br/><br/>
        </label>

        <label for="msgabs-message" class="msgabs-message-label">Votre message<br>
        <textarea id="msgabs-message" name="msgabs-message" maxlength=600 rows=8 placeholder="votre message" tabindex="3">
Chers clients,
votre atlier Cust'Home Bike 34 sera exceptionnellement fermé ce ...
Merci pour votre compréhension.
        </textarea></label><br>

        <div id="msgabs-btn" class="btns-msgabs">
            <input type="button" class="button CTAButton" id="btn-envoyer-msgabs" tabindex="4" Value="Ajouter" onclick="confirmMessageAbsence()"/>
        </div>	
    </form>

<!-- FIN CREATION D'UN MESSAGE -->


    <?php
    $msgabss = $messagesAbsences;

    if(is_object($messagesAbsencesToday)){
      //echo '<div id="messageAbsence">'.nl2br($msgAbsToday->getMessage()).'</div>';
      $msgCurrentlyShowed = $messagesAbsencesToday->getId();
    } else {
        $msgCurrentlyShowed = '';
    }

    foreach($msgabss as $msg) { 
        
        if($msgCurrentlyShowed == $msg->getId()) {
            $backgroundForm = 'style="background: black; color: var(--main-color-red);"';
        } else {
            $backgroundForm = '';
        }

        //action="app/controleurs/editMessageAbsence.php"
        ?>
        <form id="formMsgAbs<?= $msg->getId() ?>" method='post' action="index.php" class="form-msgabs" <?= $backgroundForm ?>>
        
            <input type="hidden" id="page" name="page" value="accueil"/>
            <input type="hidden" id="action" name="action" value="messageAbsenceUpdate"/>
            

            <input type="hidden" id="msgabs-id" name="msgabs-id" value="<?= $msg->getId() ?>"/>
            Message n°<?= $msg->getId() ?><br/><br/>
            <label for="datedebut" class="msgabs-input-label">Date d&eacute;but affichage (inclus)<br/>
            <input type="date" name="datedebut" id="datedebut" value="<?= $msg->getDateDebut() ?>" min="2022-05-01" max="2060-12-31" class="date-picker date-debut" tabindex="1"><br/><br/>
            </label>

            <label for="datefin" class="msgabs-input-label">Date fin affichage (inclus)<br/>
            <input type="date" name="datefin" id="datefin" value="<?= $msg->getDateFin() ?>" min="2022-05-01" max="2060-12-31" class="date-picker date-fin" tabindex="2"><br/><br/>
            </label>


            <label for="msgabs-message" class="msgabs-message-label">Votre message<br>
            <textarea id="msgabs-message" name="msgabs-message" maxlength=600 rows=8 placeholder="votre message" tabindex="3"><?= $msg->getMessage() ?></textarea></label><br>
 

            <div id="msgabs-btn<?= $msg->getId() ?>" class="btns-msgabs">
                <input type="button" class="button CTAButton" id="btn-envoyer-msgabs<?= $msg->getId() ?>" tabindex="4" onClick="confirmUpdateMessageAbsence(<?= $msg->getId() ?>)" value="Modifier"/>
                <input type="button" class="button CTAButton" id="btn-delete-msgabs<?= $msg->getId() ?>"  onClick="confirmDeleteMessageAbsence(<?= $msg->getId() ?>)" value="Supprimer"/>
            </div>	


        </form>

    <?php }

    ?>

</div>
