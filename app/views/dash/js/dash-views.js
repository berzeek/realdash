// Helper Functions
$(document).ready(function(){
            $(".hide").hide('fast');
        });

// View Functions
var LD {
  function getLeads(){
    $.post("leads/userleads", function( data ){

        if (data === undefined || data.length == 0) {
          console.log('Check the POST');
        }

        var BODY = '';
              BODY += '\
              <tr>\
                <td>ID</td>\
                <td>Name</td>\
                <td>Date Added</td>\
                <td>Name</td>\
                <td>Phone</td>\
                <td>Email</td>\
                <td>Address</td>\
                <td>City</td>\
                <td>State</td>\
                <td>Zip</td>\
                <td>Source</td>\
                <td>Status</td>\
              </tr>\
              ';
            });
  };
};

$('.leads').click(function() {
  var dash = $('dash-view');
  var leads = $('lead-view');
  leads.fadeToggle();
  LD.getLeads();
  if(leads.is(':visible')){
    dash.hide();
  }
}
