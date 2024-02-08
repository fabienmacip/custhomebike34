window.addEventListener('load', function() {

  if (typeof $('#toaster-decouverte-form') != 'undefined' && $('#toaster-decouverte-form').is(":visible")) { 
    alert('Votre message a bien été envoyé. Nous vous recontactons dès que possible.');
  }

  if($('#message-absence-flag') && $('#message-absence-flag').val() === 'yes') {
    const messageAbsence = $('#message-absence').text().trim();
    //this.alert(messageAbsence);
  }

  if($('#msgabsAdded') && $('#msgabsAdded').text() !== '') {
    let msgabsConfirm = $('#msgabsAdded').html().replace("<br>","\n");
    msgabsConfirm = msgabsConfirm.replace("<pre>","\n");
    msgabsConfirm = msgabsConfirm.replace("</pre>","\n\n");
    msgabsConfirm = msgabsConfirm.replace(/(<([^>]+)>)/gi, "");
    alert(msgabsConfirm);
  }

})

/* function closeContactFormToaster(){
  $('#toaster-decouverte-form').hide();
}
 */




function checkConnexionFormField(field) {
    
  let error = false;
  
  if (field == 'connect-email') {
    const regexEmail = /^([0-9a-zA-Z].*?@([0-9a-zA-Z].*\.\w{2,4}))$/;
    error = (($('#connect-email').val().length > 0 && !regexEmail.test($('#connect-email').val())) || $('#connect-email').val().trim().length < 1);
  } else {
      error = ($('#'+field).val().trim().length < 8);
  }
  
  if(error) {
    $('#error-'+field).show();
  } else {
    $('#error-'+field).hide();
  }
  
  validFormConnexion();

}

function validFormConnexion() {
  
  let formOK = true;
  const regexEmail = /^([0-9a-zA-Z].*?@([0-9a-zA-Z].*\.\w{2,4}))$/;

  if($('#connect-email').val().length > 0 && !regexEmail.test($('#connect-email').val())){
    formOK = false;
  } 

  if($('#connect-passw').val().length < 8){
    formOK = false;
  }


  if(formOK){
    $('#btn-connexion').addClass('btn-active');
    $('#btn-connexion').removeClass('btn-inactive');
    $('#btn-connexion').prop('disabled', false);
  } else {
    $('#btn-connexion').removeClass('btn-active');
    $('#btn-connexion').addClass('btn-inactive');
    $('#btn-connexion').prop('disabled', true);
  }
  
}