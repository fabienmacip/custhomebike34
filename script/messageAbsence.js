function checkMsgAbs(id = '') {
 
  const regexDate = /([12]\d{3}-(0[1-9]|1[0-2])-(0[1-9]|[12]\d|3[01]))/;

  let formOK = true;
  
  const datedebut = $('#formMsgAbs'+id+' #datedebut')[0].value;

  if(!regexDate.test(datedebut)) {
    formOK = false;
    alert("Merci d'entrer une date de début valide.");
  }
  const datedebutJS = new Date(datedebut);

  const datefin = $('#formMsgAbs'+id+' #datefin')[0].value;
 
  if(!regexDate.test(datefin)) {
    formOK = false;
    alert("Merci d'entrer une date de fin valide.");
  }
  const datefinJS = new Date(datefin);

  const msgabs = $('#formMsgAbs'+id+' #msgabs-message')[0].value.trim();
 
  // Check pertinence des dates
   if(datedebutJS > datefinJS){
      formOK = false;
      alert("La date de fin doit être le même jour ou plus tard que la date de début.");
  }
 
  // Check message non-vide
   if(msgabs.length === 0){
    formOK = false;
    alert("Avez-vous écrit un message ?");
  }
 
  return formOK;
}




function confirmMessageAbsence(){
  
  if(!checkMsgAbs()) {
    return;
  }
  
  
  
  if (!confirm('Valider l\'ajout de ce MESSAGE ?')){
    return;
  } else {
    $('#formMsgAbs').submit();
  }

}


function confirmDeleteMessageAbsence(id) {
  if (!confirm('Supprimer ce MESSAGE ?')){
    return;
  } else {
    
    $('#formMsgAbs'+id+' #action').prop('value',"messageAbsenceDelete");
    $('#formMsgAbs'+id).submit();
  }
}

function confirmUpdateMessageAbsence(id) {
  if(!checkMsgAbs(id)) {
    return;
  }
  
  if (!confirm('Valider la modification de ce MESSAGE ?')){
    return;
  } else {
    $('#formMsgAbs'+id).submit();
  }
}




