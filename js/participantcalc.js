CRM.$(function ($) {
  $('#noOfparticipants').hide();
  $('input','#priceset','select','#priceset').on('keyup', countParticipants);
  function countParticipants() {
    addlParticipants = pPartiCount - 1;
    if (addlParticipants > 9) {
      addlParticipants = 9;
    }
    $('#additional_participants').val(addlParticipants);
    // mjwshared looks for a blank value if no add'l participants
    if (addlParticipants === 0) {
      $('#additional_participants').val('');
    }
  }
});
